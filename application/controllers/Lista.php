<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Lista extends CI_Controller {

	public function index()
	{
		$data['nombre'] = 'Klvst3r';
		$data['nombre2'] = 'Kozlov';

		$this->load->view('view_list_contactos',$data);
	}
}



//http://localhost/dev/codeIgniterProject/index.php/list
/*End of list.php */