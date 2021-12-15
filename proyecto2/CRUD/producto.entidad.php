<?php
class Producto
{
	private $id;
	private $nombre;
	private $precio;
	private $cantidad;
	private $Nombre;
	private $Precio;
	private $Cantidad;

	public function __GET($k){ return $this->$k; }
	public function __SET($k, $v){ return $this->$k = $v; }
}