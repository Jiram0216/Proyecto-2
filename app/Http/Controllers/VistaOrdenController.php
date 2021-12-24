<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Support\Str;
use App\Models\OrdenTrabajo;
use Illuminate\Http\Request;
use App\Models\CategoriaProveedors;
use App\Models\CategoriaTipotrabajo;

class VistaOrdenController extends Controller
{
    public function index ()
    {
        
        // Obtener las ordenes de trabajo mas recientes
        // $nuevas = OrdenTrabajo::orderBy('created_at', 'DESC')->get();
        $nuevas = OrdenTrabajo::latest()->take(6)->get();

        // Ordenes todas las categorias
        $categorias = CategoriaTipotrabajo::all();
        
        // agrupar las recetas por categoria
        $ordenes = [];
        foreach($categorias as $categoria){
            $ordenes [Str::slug($categoria->nombre)][] = OrdenTrabajo::where('categoria_id', $categoria->id)->take(10)->get();
        }
        return view('vistaorden.index', compact('nuevas', 'ordenes'));
    }
    public function proveedor () 
    {   
        // Obteniendo las 6 proveedores mas recientes.
        $nuevas = Proveedor::latest()->take(6)->get();
        // Obteniendo todas las categorias
        $categorias = CategoriaProveedors::all();

        // Agrupando los proveedoores por categoria
        $proveedores = [];
        foreach($categorias as $categoria){
            $proveedores [Str::slug($categoria->nombre)][] = Proveedor::where('categoria_id', $categoria->id)->take(10)->get();
        }


        return view('vistaorden.proveedor', compact('nuevas', 'proveedores'));
    } 
}
