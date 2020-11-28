<?php
defined('__ROOT_URL__') OR exit('No direct script access allowed');

class Pages extends Controller {
	
	public function index() {		
		header('location:' . __ROOT_URL__ . '/error404' );         
    }
	
	public function About(){		
		$data = [
			'title' => 'About page',
			'page' => 'about'
        ];
		
		$this->view('pages/about', $data);        
    }
	
}