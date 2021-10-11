<?php

namespace App\Controllers;

class Inicio extends BaseController
{
	public function index()
	{
		echo "Bienvenido, Método <b>Index</b> del controlador Inicio";
	}

	public function holamundo()
	{
		$datos['nombre'] = "Carlos";
		$datos['apellidos'] = "PIMENTEL ZEGARRA";
		return view('mensaje01',$datos);
	}

	public function sumar($a, $b)
	{
		$c = $a + $b;
		echo "$a + $b = $c";
	}

	public function visualizar($nombre, $apellidos)
	{
		$datos['nombre'] = $nombre;
		$datos['apellidos'] = $apellidos;
		return view('mensaje01',$datos);
	}
}
