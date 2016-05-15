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
        
        public function permits()
        {
            $this->load->view('templates/header');
            $this->load->view('templates/lang');
            $this->load->view('pages/permits');
            $this->load->view('templates/footer');
        }
        
        public function classification()
        {
            $this->load->view('templates/header');
            $this->load->view('templates/lang');
            $this->load->view('pages/classification');
            $this->load->view('templates/footer');
        }
        
        public function template()
        {
            $this->load->view('templates/header');
            $this->load->view('templates/lang');
            $this->load->view('pages/template');
            $this->load->view('templates/footer');
        }
        
        public function railway()
        {
            $this->load->view('templates/header');
            $this->load->view('templates/lang');
            $this->load->view('pages/railway');
            $this->load->view('templates/footer');
        }
        
        public function railway_tmpl()
        {
            $this->load->view('templates/header');
            $this->load->view('templates/lang');
            $this->load->view('pages/railway_tmpl');
            $this->load->view('templates/footer');
        }
        
        public function rules()
        {
            $this->load->view('templates/header');
            $this->load->view('templates/lang');
            $this->load->view('pages/rules');
            $this->load->view('templates/footer');
        }
        
        public function photos()
        {
            $this->load->view('templates/header');
            $this->load->view('templates/lang');
            $this->load->view('pages/photos');
            $this->load->view('templates/footer');
        }
}