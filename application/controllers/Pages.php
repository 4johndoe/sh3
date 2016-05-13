<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
            $this->load->view('templates/header');
            $this->load->view('pages/lang');
            $this->load->view('pages/home');
            $this->load->view('templates/footer');
	}
        
        public function truckMenu()
        {
            $this->load->view('templates/header');
            $this->load->view('pages/lang');
            $this->load->view('pages/truckMenu');
            $this->load->view('templates/footer');
        }
}