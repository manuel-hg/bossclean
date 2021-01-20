<?php namespace App\Controllers;

class Cclean extends BaseController
{
	public function index()
	{
		echo view("Inicio/nav");
		echo view("Inicio/body");
		echo view("Inicio/footer");
	}
	public function conocenos()
	{
		echo view("Inicio/nav");
		echo view("conocenos/body");
		echo view("Inicio/footer");	
	}
	public function contacto()
	{
		echo view("Inicio/nav");
		echo view("contacto/body");
		echo view("Inicio/footer");		
	}
	public function productos()
	{
		echo view("Inicio/nav");
		echo view("productos/body");
		echo view("Inicio/footer");		
	}

	//--------------------------------------------------------------------

}
