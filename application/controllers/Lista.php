<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Lista extends CI_Controller {

	public function index()
	{
		$this->load->view('view_list_contactos');
	}
}



//http://localhost/dev/codeIgniterProject/index.php/list
/*End of list.php */