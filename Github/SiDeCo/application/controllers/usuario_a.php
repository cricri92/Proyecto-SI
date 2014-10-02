<?php 
/**
* 
*/
class Usuario_a extends CI_Controller
{
	
	function index()
	{
		$data['titulo']="::SiDeCo::";
		$data['contenido_principal']=$this->load->view('usuario_a',$data,true);
		$this->load->view("front/template",$data);
	}
}
 ?>