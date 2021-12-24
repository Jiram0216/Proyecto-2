<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PerfilController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function show(Perfil $perfil)
    {
        return view('perfiles.show', compact('perfil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function edit(Perfil $perfil)
    {
        // Ejecutar el policy
        $this->authorize('View', $perfil);
        
        return view('perfiles.edit', compact('perfil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perfil $perfil)
    {
        // Ejecutar el policy
        $this->authorize('update', $perfil);

        // Validar
        $data = request()->validate([
            'nombre' => 'required',
            'biografia' => 'required'
        ]);
        // Si el usuario sube una imagen
        if($request ['imagen']){
            // Obtener la ruta de la imagen a subir en la base de datos
            $ruta_imagen = $request['imagen']->store('upload-perfiles', 'public');
            // Resize de la imagen
            $img = Image::make( public_path("storage/{$ruta_imagen}"))->fit(600,600);
            $img->save();
            // Crear un arreglo de imagen
            $array_imagen = ['imagen' => $ruta_imagen];
        }
        // Asignar nombre
        auth()->user()->name = $data ['nombre'];
        auth()->user()->save();
        // Eliminar el nombre del usuario actualizado de $data
        unset($data['nombre']);
        // Asignar biografia
        auth()->user()->perfil()->update( array_merge(
            $data, $array_imagen ?? []
        ));
        // Guardar informacion

        // Redireccionar

        return redirect()->action([MenuController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perfil $perfil)
    {
        //
    }
}
