<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
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
        // $usuario = DB::table('usuarios')->insert(array(
		// 	'nombre' => $request->input('nombre'),
		// 	'descripcion'  => $request->input('descripcion'),
		// 	'precio' => $request->input('precio'),
		// 	'fecha' => date('Y-m-d')
		// ));
		echo "Create";
    }

    public function save(Request $request)
    {
        // $nombre = $request->input('nombre');
        // $email = $request->input('email');
        // $password = $request->input('password');
        $nombre = "Alan";
        $email = "alan@laravel.com";
        $password = "12345";
        DB::table('usuarios')->upsert([
            ['nombre' => $nombre, 'email' => $email, 'password' => $password]
        ]);

        return view('welcome');

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
