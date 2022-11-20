<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ReporteController extends Controller
{
    //
    public function generalTOP100()
    {
        $sql = 'SELECT  NAME, SUM(quantity) AS Cantidad FROM ventas GROUP BY NAME';
        $products = DB::select($sql);
        echo view ('reportes.top100General',['products'=>$products]);
    }

    public function sucursalMazatenangoTOP100()
    {
        $sql = 'SELECT  NAME, SUM(quantity) AS Cantidad, Sucursal FROM ventas WHERE sucursal = "Las Américas Mazatenango" GROUP BY NAME LIMIT 100';
        $products = DB::select($sql);
        echo view ('reportes.top100Sucursal',['products'=>$products]);
    }

    public function sucursalPraderaXelaTOP100()
    {
        $sql = 'SELECT  NAME, SUM(quantity) AS Cantidad, Sucursal FROM ventas WHERE sucursal = "Pradera Xela Quetzaltenango" GROUP BY NAME LIMIT 100';
        $products = DB::select($sql);
        echo view ('reportes.top100Sucursal',['products'=>$products]);
    }

    public function sucursalPraderaChimaltenangoTOP100()
    {
        $sql = 'SELECT  NAME, SUM(quantity) AS Cantidad, Sucursal FROM ventas WHERE sucursal = "Pradera Chimaltenango" GROUP BY NAME LIMIT 100';
        $products = DB::select($sql);
        echo view ('reportes.top100Sucursal',['products'=>$products]);
    }

    public function sucursalPraderaEscuintlaTOP100()
    {
        $sql = 'SELECT  NAME, SUM(quantity) AS Cantidad, Sucursal FROM ventas WHERE sucursal = "Pradera Escuintla" GROUP BY NAME LIMIT 100';
        $products = DB::select($sql);
        echo view ('reportes.top100Sucursal',['products'=>$products]);
    }

    public function sucursalLaTrinidadTOP100()
    {
        $sql = 'SELECT  NAME, SUM(quantity) AS Cantidad, Sucursal FROM ventas WHERE sucursal = "La Trinidad Coatepeque" GROUP BY NAME LIMIT 100';
        $products = DB::select($sql);
        echo view ('reportes.top100Sucursal',['products'=>$products]);
    }

    public function sucursalMirafloresTOP100()
    {
        $sql = 'SELECT  NAME, SUM(quantity) AS Cantidad, Sucursal FROM ventas WHERE sucursal = "Centro Comercial Miraflores CC" GROUP BY NAME LIMIT 100';
        $products = DB::select($sql);
        echo view ('reportes.top100Sucursal',['products'=>$products]);
    }
}