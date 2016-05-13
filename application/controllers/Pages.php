<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
            $this->load->view('templates/header');
            $this->load->view('templates/lang');
            $this->load->view('pages/home');
            $this->load->view('templates/footer');
	}
        
        public function submenu()
        {
            $this->load->view('templates/header');
            $this->load->view('templates/lang');
            $this->load->view('pages/submenu');
            $this->load->view('templates/footer');
        }
}