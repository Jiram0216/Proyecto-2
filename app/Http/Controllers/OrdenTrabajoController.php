<?php

namespace App\Http\Controllers;

use App\Models\OrdenTrabajo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\CategoriaTipotrabajo;
use Illuminate\Auth\Middleware\Authorize;
use Intervention\Image\Facades\Image;

class OrdenTrabajoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Variable Usuario
        $usuario = auth()->user()->id;
        // Recetas con paginacion
        $ordentrabajos = OrdenTrabajo::where('user_id', $usuario)->paginate(4);

        return view('ordentrabajo.index')->with('ordentrabajos', $ordentrabajos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Almacenamos las categorias en la variable $categorias obtenidas de la Dase de datos
        // $categorias = DB::table('Categoria_tipotrabajos')->get()->pluck('nombre', 'id');
        
        // Obtener las categorias con modelo
        // Almacenamos las categorias en la variable $categorias obtenidas con el modelo
        $categorias = CategoriaTipotrabajo::all(['id', 'nombre']);

        // Pasando a la vista la variable $categorias con with
        return view('ordentrabajo.create') ->with('categorias', $categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validando datos del formulario
        $data = request()->validate([
            'maquina' => 'required|min:6',
            'area'=> 'required',
            'trabajo'=> 'required',
            'horas'=> 'required',
            'descripcion'=> 'required',
            'causa'=> 'required',
            'solucion'=> 'required',
            'refacciones'=> 'required',
            'monto'=> 'required',
            'observaciones'=> 'required',
            'fecha'=> 'required',
            'categoria' => 'required',
        ]);
        // Obtener la ruta de la imagen a subir en la base de datos
        // $ruta_imagen = $request['imagen']->store('upload-ordentrabajos', 'public');

        // Resize de la imagen
        // $img = Image::make( public_path("storage/{$ruta_imagen}"))->fit(1000,550);
        // $img->save();

        // Si el usuario sube una imagen
        if($request ['imagen']){
            // Obtener la ruta de la imagen a subir en la base de datos
            $ruta_imagen = $request['imagen']->store('upload-ordentrabajos', 'public');
            // Resize de la imagen
            $img = Image::make( public_path("storage/{$ruta_imagen}"))->fit(600,600);
            $img->save();
            // Crear un arreglo de imagen
            // $array_imagen = ['imagen' => $ruta_imagen];
            $data["imagen"] = $ruta_imagen;

        }

        // Insertar datos en la db DB con modelo.
        auth()->user()->ordentrabajo()->create([
            'maquina'=> $data['maquina'],
            'area'=> $data['area'],
            'trabajo'=> $data['trabajo'],
            'horas'=> $data['horas'],
            'descripcion'=> $data['descripcion'],
            'causa'=> $data['causa'],
            'solucion'=> $data['solucion'],
            'refacciones'=> $data['refacciones'],
            'monto'=> $data['monto'],
            'observaciones'=> $data['observaciones'],
            'fecha'=> $data['fecha'],
            'imagen'=> $data ['imagen'] ?? null,
            'categoria_id'=>$data['categoria']
        ]);

        // Redireccionando hacia el index
        return redirect()->action([OrdenTrabajoController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrdenTrabajo  $ordenTrabajo
     * @return \Illuminate\Http\Response
     */
    public function show(OrdenTrabajo $ordenTrabajo)
    {
        return view('ordentrabajo.show')->with('ordenTrabajo', $ordenTrabajo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrdenTrabajo  $ordenTrabajo
     * @return \Illuminate\Http\Response
     */
    public function edit(OrdenTrabajo $ordenTrabajo)
    {
        // Revisar el policy
        $this->authorize('view', $ordenTrabajo);

        // Obtener las categorias con modelo
        // Almacenamos las categorias en la variable $categorias obtenidas con el modelo
        $categorias = CategoriaTipotrabajo::all(['id', 'nombre']);

        return view('ordentrabajo.edit', compact('categorias', 'ordenTrabajo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OrdenTrabajo  $ordenTrabajo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrdenTrabajo $ordenTrabajo)
    {
        // Revisar el policy
        $this->authorize('update', $ordenTrabajo);
        // Validando datos del formulario que esta actualizando
        $data = request()->validate([
            'maquina' => 'required|min:6',
            'area'=> 'required',
            'trabajo'=> 'required',
            'horas'=> 'required',
            'descripcion'=> 'required',
            'causa'=> 'required',
            'solucion'=> 'required',
            'refacciones'=> 'required',
            'monto'=> 'required',
            'observaciones'=> 'required',
            'fecha'=> 'required',
            'categoria' => 'required',
        ]);

        // Asignar los valores
        $ordenTrabajo->maquina = $data['maquina'];
        $ordenTrabajo->area = $data['area'];
        $ordenTrabajo->trabajo = $data['trabajo'];
        $ordenTrabajo->horas = $data['horas'];
        $ordenTrabajo->descripcion = $data['descripcion'];
        $ordenTrabajo->causa = $data['causa'];
        $ordenTrabajo->solucion = $data['solucion'];
        $ordenTrabajo->refacciones = $data['refacciones'];
        $ordenTrabajo->monto = $data['monto'];
        $ordenTrabajo->observaciones = $data['observaciones'];
        $ordenTrabajo->fecha = $data['fecha'];
        $ordenTrabajo->categoria_id = $data['categoria'];
        

        // Si el usuario sube una nueva imagen
        if(request('imagen')){
            // Obtener la ruta de la imagen a subir en la base de datos
            $ruta_imagen = $request['imagen']->store('upload-ordentrabajos', 'public');

            // Resize de la imagen
            $img = Image::make( public_path("storage/{$ruta_imagen}"))->fit(600,600);
            $img->save();

            // Asignar al objeto
            $ordenTrabajo->imagen = $ruta_imagen;
        }
        $ordenTrabajo->save();
        // redireccionar
        return redirect()->action([OrdenTrabajoController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrdenTrabajo  $ordenTrabajo
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrdenTrabajo $ordenTrabajo)
    {
        
        // Ejecutar el 1Policy
        $this->authorize('delete', $ordenTrabajo);

        // Eliminar receta
        $ordenTrabajo->delete();
        
        // redireccionar
        return redirect()->action([OrdenTrabajoController::class, 'index']);
    }

    public function search(Request $request)
    {
        // Leyendo la busqueda
        $busqueda = $request['buscar'];
        $ordenes = OrdenTrabajo::where('maquina', 'like', '%'.$busqueda.'%')->paginate(9);
        
        
        return view('busquedas.show', compact('ordenes'));
    }
}
