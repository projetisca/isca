<?php

class Accueil extends CI_Controller {
	
	private $titre ;
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');		
	}
	
	public function index(){
		$this->accueil();	
	}
	
	public function accueil(){
		$this->load->view('accueil',array('IP'=>$_SERVER['REMOTE_ADDR']));
	}
	
	public function inscription (){
		echo 'Vous allez vous inscrire mwahahaha';
	}
	
	public function deconnection (){
		echo 'Vous etes deconnecté hihi';
	}

	public function admin(){
		$this->load->view('accueil',array('urlAdmin',site_url('admin')));
	}
}