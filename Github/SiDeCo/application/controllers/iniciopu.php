<?php 
/**
* 
*/
class Iniciopu extends CI_Controller
{
	
	function index()
	{
		$data['titulo'] = "::SiDeCo::";
		$data['contenido_principal'] = $this->load->view('iniciopu',$data,true);
		$this->load->view("front/template",$data);
	}
}
 ?>