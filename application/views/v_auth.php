<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class V_Auth
{
	public function show_login()
	{
		if ($this->input->post('login')) {
			echo "string";
		}
		include "res/login.php";
	}
}