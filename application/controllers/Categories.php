<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

	public function horoscope()
	{
		$this->load->view('category/horoscope');
	}
  public function numerology()
	{
		$this->load->view('category/numerology');
	}
  public function tarot_card()
	{
		$this->load->view('category/tarot-card');
	}
  public function vedic_astrology()
	{
		$this->load->view('category/vedic-astrology');
	}
  public function western_astrology()
	{
		$this->load->view('category/western-astrology');
	}
}