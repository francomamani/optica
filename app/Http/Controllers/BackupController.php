<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class BackupController extends Controller
{
    /*
     * renderiza el boton de backups
     *
     * */
    public function create() {
        return view('backup.backup');
    }
    public function crearBackup() {
        try{
            $nombre = 'backup-' . date('Y-m-d');
            Artisan::call('backup:mysql-dump', ['filename' => $nombre]);
            return response()->download(storage_path('app/backups/' . $nombre . '.sql'));
        } catch (\Exception $e) {
            return response()->json( $e->getMessage(), 500);
        }
    }
}
