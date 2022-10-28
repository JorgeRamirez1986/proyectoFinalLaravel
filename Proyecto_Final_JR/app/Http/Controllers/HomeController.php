<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function testDBConection()
    {
        try {
            DB::connection()->getPdo();
            if (DB::connection()->getDatabaseName()) {
                return "YES!!!  Se Conecto a La Base de Datos: " . DB::connection()->getDatabaseName();
            } else {
                die("No Puede encontrar la Base de Datos. Chequea Tu Conexion");
            }
        } catch (\Exception $e) {
            die("No Puede encontrar la Base de Datos. Chequea Tu Conexion. {$e -> getMessage()}");
        }
    }

}
