<?php
class About extends CI_Controller{
	public	function __construct(){
		parent::__construct();

		$this->load->helper(array('url','form'));
		//$this->load->library('barcode');
	}
	function index(){


		$this->load->view('web/v_about');

	}

}
