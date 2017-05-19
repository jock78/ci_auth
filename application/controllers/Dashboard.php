<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * This controller can be accessed 
 * for all logged in users
 */
class Dashboard extends MY_Controller {	
protected $access = "Editor, Admin"; // you can put * to get access for all roles
	public function index()
	{
		$this->load->view("header");
		$this->load->view("navbar");
		$this->load->view("dashboard");
		$this->load->view("footer");
	}

}
