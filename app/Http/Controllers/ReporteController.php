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

    public function menosExistencia()
    {
        $sql = 'SELECT  shipping_cost, NAME,brand, details, price FROM productos WHERE shipping_cost < 10 Limit 20';
        $products = DB::select($sql);
        echo view ('reportes.top20existencias',['products'=>$products]);
    }

    public function ClienteFrecuente()
    {
        $sql = 'SELECT  count(Cliente) AS Cantidad, Cliente FROM ventas GROUP BY Cliente LIMIT 1';
        $products = DB::select($sql);
        echo view ('reportes.clienteFrecuente',['products'=>$products]);
    }

    public function ClienteFrecuenteChimaltenango()
    {
        $sql = 'SELECT  count(Cliente) AS Cantidad, Cliente FROM ventas where Sucursal = "Pradera Chimaltenango" GROUP BY Cliente LIMIT 1';
        $products = DB::select($sql);
        return $products;
    }

    public function ClienteFrecuenteMazatenango()
    {
        $sql = 'SELECT  count(Cliente) AS Cantidad, Cliente FROM ventas where Sucursal = "Las Américas Mazatenango" GROUP BY Cliente LIMIT 1';
        $products = DB::select($sql);
        return $products;
    }

    public function ClienteFrecuenteCoatepeque()
    {
        $sql = 'SELECT  count(Cliente) AS Cantidad, Cliente FROM ventas where Sucursal = "La Trinidad Coatepeque" GROUP BY Cliente LIMIT 1';
        $products = DB::select($sql);
        return $products;
    }

    public function ClienteFrecuenteXela()
    {
        $sql = 'SELECT  count(Cliente) AS Cantidad, Cliente FROM ventas where Sucursal = "Pradera Xela Quetzaltenango" GROUP BY Cliente LIMIT 1';
        $products = DB::select($sql);
        return $products;
    }

    public function ClienteFrecuenteEscuintla()
    {
        $sql = 'SELECT  count(Cliente) AS Cantidad, Cliente FROM ventas where Sucursal = "Pradera Escuintla" GROUP BY Cliente LIMIT 1';
        $products = DB::select($sql);
        return $products;
    }

    public function ClienteFrecuenteMiraflores()
    {
        $sql = 'SELECT  count(Cliente) AS Cantidad, Cliente FROM ventas where Sucursal = "Centro Comercial Miraflores CC" GROUP BY Cliente LIMIT 1';
        $products = DB::select($sql);
        return $products;
    }
}