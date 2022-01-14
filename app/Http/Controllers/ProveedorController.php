<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CategoriaProveedors;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ProveedorController extends Controller
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
        // variable del usuario
        $usuario = auth()->user()->id;
        // proveedores con paginacion
        $proveedores = Proveedor::where('user_id', $usuario)->paginate(4);
        // $proveedores = auth()->user()->proveedor;

        return view('proveedores.index')->with('proveedores', $proveedores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Obteniendo las categorias con modelos
        $categorias = CategoriaProveedors::all('id', 'nombre');

        return view('proveedores.create')->with('categorias', $categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validacion de formulario
        $data = request()->validate([
            'empresa' => 'required|min:4',
            'categoria' => 'required',
            'contacto' => 'required',
            'correo' => 'required',
            'telefono' => 'required',
            'observacion' => 'required'
        ]);
        // Si el usuario sube una imagen
        if($request ['imagen']){
            // Obtener la ruta de la imagen a subir en la base de datos
            $ruta_imagen = $request['imagen']->store('upload-proveedores', 'public');
            // Resize de la imagen
            $img = Image::make( public_path("storage/{$ruta_imagen}"))->fit(600,600);
            $img->save();
            // Crear un arreglo de imagen
            // $array_imagen = ['imagen' => $ruta_imagen];
            $data["imagen"] = $ruta_imagen;

        }

        // Insertar datos en la db DB con modelo.
        auth()->user()->proveedor()->create([
            'empresa' =>$data['empresa'],
            'contacto' =>$data['contacto'],
            'correo' =>$data['correo'],
            'telefono' =>$data['telefono'],
            'imagen'=> $data['imagen'] ?? null,
            'observacion'=> $data['observacion'],
            'categoria_id' =>$data['categoria'],
        ]);
        
        return redirect()->action([ProveedorController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function show(Proveedor $proveedor)
    {
        return view('proveedores.show', compact('proveedor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function edit(Proveedor $proveedor)
    {   
        // Obteniendo las categorias con modelos
        $categorias = CategoriaProveedors::all('id', 'nombre');

        return view('proveedores.edit', compact('proveedor','categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proveedor $proveedor)
    {
        // Revisar el policy
        $this->authorize('update', $proveedor);
        // Validacion de formulario
        $data = request()->validate([
            'empresa' => 'required|min:4',
            'categoria' => 'required',
            'contacto' => 'required',
            'correo' => 'required',
            'telefono' => 'required',
            'observacion' => 'required'
        ]);
        // Asignar los valores
        $proveedor->empresa = $data['empresa'];
        $proveedor->contacto = $data['contacto'];
        $proveedor->correo = $data['correo'];
        $proveedor->telefono = $data['telefono'];
        $proveedor->categoria_id = $data['categoria'];
        $proveedor->observacion= $data['observacion'];
        // Si el usuario sube una nueva imagen
        if(request('imagen')){
            // Obtener la ruta de la imagen a subir en la base de datos
            $ruta_imagen = $request['imagen']->store('upload-proveedores', 'public');

            // Resize de la imagen
            $img = Image::make( public_path("storage/{$ruta_imagen}"))->fit(600,600);
            $img->save();

            // Asignar al objeto
            $proveedor->imagen = $ruta_imagen;
        }
        $proveedor->save();

        return redirect()->action([ProveedorController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proveedor $proveedor)
    {
        
        // Revisar el policy
        $this->authorize('delete', $proveedor);
        
        // Eliminar proveedor
        $proveedor->delete();

        return redirect()->action([ProveedorController::class, 'index']);
    }

    public function search(Request $request)
    {
        // Leyendo la busqueda
        $busqueda = $request['buscar'];
        $ordenes = Proveedor::where('empresa', 'like', '%'.$busqueda.'%')->paginate(9);
        
        
        return view('busquedas.show2', compact('ordenes'));
    }
}
