<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inditab extends CI_Controller {

	public function index()
	{
		$this->load->view('pages/home');
	}
	public function contact()
	{
		$this->load->view('pages/contact');
	}
	public function about()
	{
		$this->load->view('pages/about');
	}
	public function privacy_policy()
	{
		$this->load->view('pages/privacy_policy');
	}
	public function terms()
	{
		$this->load->view('pages/terms');
	}
}
