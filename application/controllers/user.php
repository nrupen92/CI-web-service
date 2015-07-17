<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Controller {

	public function insert()
	{
		$data = $_POST;
		echo "<pre>";print_r($data);exit;
	}
}

