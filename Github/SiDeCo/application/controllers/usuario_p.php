<?php 
/**
* 
*/
class Usuario_p extends CI_Controller
{
	
	function index()
	{
		$data['titulo']="::SiDeCo::";
		$data['contenido_principal']=$this->load->view('usuario_p',$data,true);
		$this->load->view("front/template",$data);
	}
}
 ?>