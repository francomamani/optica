<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;

class ChartController extends Controller
{
    public function pie() {
        $tabla = [];
        $lista = User::join('oftalmologos', 'users.id', 'oftalmologos.user_id')
            ->join('diagnosticos', 'oftalmologos.id', 'diagnosticos.oftalmologo_id')
            ->selectRaw('users.nombres as oftalmologo, count(diagnosticos.concepto) as num_diag')
            ->groupBy('users.nombres')
            ->get();
        foreach ($lista as $item) {
            array_push($tabla, [$item->oftalmologo, $item->num_diag]);
        }
        $lava = new Lavacharts();
        $datatable = $lava->DataTable();
        $datatable->addStringColumn('Oftalmologo');
        $datatable->addNumberColumn('Numero de Diagnosticos');
        $datatable->addRows($tabla);

        $chart = $lava->PieChart('Diagnosticos', $datatable, [
            'title' => '# de Diagnosticos por Oftalmologo',
            'width' => 800,
            'height' => 600
        ]);
        $filtro = $lava->NumberRangeFilter(1, [
            'ui' => [
                'labelStacking' => 'vertical'
            ]
        ]);
        $control = $lava->ControlWrapper($filtro, 'control');
        $grafica = $lava->ChartWrapper($chart, 'chart');
        $lava->Dashboard('PanelControl', $datatable)
             ->bind($control, $grafica);
        return view('charts.diagnosticos', ['lava' => $lava]);
    }
}
