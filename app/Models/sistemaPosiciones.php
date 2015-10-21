<?php namespace App\Models;

use App\Models\usuario;

class sistemaPosiciones
{
	private $usuarios = array();
	private $contador = 0;

	public function __construct()
    {

    }

    public function nuevoUsuario($id)
    {
    	$user = new usuario($id);
    	array_push($this->usuarios, $user);
    	$this->contador++;
    }

    public function getContador()
    {
    	return $this->contador;	
    }
}

?>