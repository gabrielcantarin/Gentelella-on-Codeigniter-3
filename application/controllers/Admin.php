<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/header_footer/dashboard_header');
		$this->load->view('admin/index');
		$this->load->view('admin/header_footer/dashboard_footer');
	}

	public function login()
	{
		$this->load->view('admin/header_footer/login_header');
		$this->load->view('admin/login');
	}


	public function index2()
	{
		$this->load->view('admin/header_footer/dashboard_header');
		$this->load->view('admin/index2');	
		$this->load->view('admin/header_footer/dashboard_footer');
	}

	public function index3()
	{
		$this->load->view('admin/header_footer/dashboard_header');
		$this->load->view('admin/index3');	
		$this->load->view('admin/header_footer/dashboard_footer');
	}

	public function form()
	{
		$this->load->view('admin/header_footer/dashboard_header');
		$this->load->view('admin/form');	
		$this->load->view('admin/header_footer/dashboard_footer');
	}

	public function form_advanced()
	{
		$this->load->view('admin/header_footer/dashboard_header');
		$this->load->view('admin/form_advanced');	
		$this->load->view('admin/header_footer/dashboard_footer');
	}

	public function form_validation()
	{
		$this->load->view('admin/header_footer/dashboard_header');
		$this->load->view('admin/form_validation');	
		$this->load->view('admin/header_footer/dashboard_footer');
	}

	public function form_wizards()
	{
		$this->load->view('admin/header_footer/dashboard_header');
		$this->load->view('admin/form_wizards');	
		$this->load->view('admin/header_footer/dashboard_footer');
	}

	public function form_upload()
	{
		$this->load->view('admin/header_footer/dashboard_header');
		$this->load->view('admin/form_upload');	
		$this->load->view('admin/header_footer/dashboard_footer');
	}

	public function form_buttons()
	{
		$this->load->view('admin/header_footer/dashboard_header');
		$this->load->view('admin/form_buttons');	
		$this->load->view('admin/header_footer/dashboard_footer');
	}

	public function general_elements()
	{
		$this->load->view('admin/header_footer/dashboard_header');
		$this->load->view('admin/general_elements');	
		$this->load->view('admin/header_footer/dashboard_footer');
	}

	public function media_gallery()
	{
		$this->load->view('admin/header_footer/dashboard_header');
		$this->load->view('admin/media_gallery');	
		$this->load->view('admin/header_footer/dashboard_footer');
	}

	public function typography()
	{
		$this->load->view('admin/header_footer/dashboard_header');
		$this->load->view('admin/typography');	
		$this->load->view('admin/header_footer/dashboard_footer');
	}

	public function icons()
	{
		$this->load->view('admin/header_footer/dashboard_header');
		$this->load->view('admin/icons');	
		$this->load->view('admin/header_footer/dashboard_footer');
	}

	public function glyphicons()
	{
		$this->load->view('admin/header_footer/dashboard_header');
		$this->load->view('admin/glyphicons');	
		$this->load->view('admin/header_footer/dashboard_footer');
	}

	public function widgets()
	{
		$this->load->view('admin/header_footer/dashboard_header');
		$this->load->view('admin/widgets');	
		$this->load->view('admin/header_footer/dashboard_footer');
	}

	public function invoice()
	{
		$this->load->view('admin/header_footer/dashboard_header');
		$this->load->view('admin/invoice');	
		$this->load->view('admin/header_footer/dashboard_footer');
	}

	public function inbox()
	{
		$this->load->view('admin/header_footer/dashboard_header');
		$this->load->view('admin/inbox');	
		$this->load->view('admin/header_footer/dashboard_footer');
	}

	public function calendar()
	{
		$this->load->view('admin/header_footer/dashboard_header');
		$this->load->view('admin/calendar');	
		$this->load->view('admin/header_footer/dashboard_footer');
	}


	public function tables (){
		$this->load->view('admin/header_footer/dashboard_header');
		$this->load->view('admin/tables');
		$this->load->view('admin/header_footer/dashboard_footer');
	}

	public function tables_dynamic (){
		$this->load->view('admin/header_footer/dashboard_header');
		$this->load->view('admin/tables_dynamic');
		$this->load->view('admin/header_footer/dashboard_footer');
	}

	public function chartjs (){
		$this->load->view('admin/header_footer/dashboard_header');
		$this->load->view('admin/chartjs');
		$this->load->view('admin/header_footer/dashboard_footer');
	}

	public function chartjs2 (){
		$this->load->view('admin/header_footer/dashboard_header');
		$this->load->view('admin/chartjs2');
		$this->load->view('admin/header_footer/dashboard_footer');
	}

	public function morisjs (){
		$this->load->view('admin/header_footer/dashboard_header');
		$this->load->view('admin/morisjs');
		$this->load->view('admin/header_footer/dashboard_footer');
	}

	public function echarts (){
		$this->load->view('admin/header_footer/dashboard_header');
		$this->load->view('admin/echarts');
		$this->load->view('admin/header_footer/dashboard_footer');
	}

	public function other_charts (){
		$this->load->view('admin/header_footer/dashboard_header');
		$this->load->view('admin/other_charts');
		$this->load->view('admin/header_footer/dashboard_footer');
	}

	public function fixed_sidebar (){
		$this->load->view('admin/header_footer/dashboard_header');
		$this->load->view('admin/fixed_sidebar');
		$this->load->view('admin/header_footer/dashboard_footer');
	}

	public function fixed_footer (){
		$this->load->view('admin/header_footer/dashboard_header');
		$this->load->view('admin/fixed_footer');
		$this->load->view('admin/header_footer/dashboard_footer');
	}

	public function e_commerce (){
		$this->load->view('admin/header_footer/dashboard_header');
		$this->load->view('admin/e_commerce');
		$this->load->view('admin/header_footer/dashboard_footer');
	}

	public function projects (){
		$this->load->view('admin/header_footer/dashboard_header');
		$this->load->view('admin/projects');
		$this->load->view('admin/header_footer/dashboard_footer');
	}

	public function project_detail (){
		$this->load->view('admin/header_footer/dashboard_header');
		$this->load->view('admin/project_detail');
		$this->load->view('admin/header_footer/dashboard_footer');
	}

	public function contacts (){
		$this->load->view('admin/header_footer/dashboard_header');
		$this->load->view('admin/contacts');
		$this->load->view('admin/header_footer/dashboard_footer');
	}

	public function profile (){
		$this->load->view('admin/header_footer/dashboard_header');
		$this->load->view('admin/profile');
		$this->load->view('admin/header_footer/dashboard_footer');
	}

	public function page_403 (){
		$this->load->view('admin/page_403');
	}

	public function page_404 (){
		$this->load->view('admin/page_404');
	}

	public function page_500 (){
		$this->load->view('admin/page_500');
	}

	public function plain_page (){
		$this->load->view('admin/header_footer/dashboard_header');
		$this->load->view('admin/plain_page');
		$this->load->view('admin/header_footer/dashboard_footer');
	}

	public function pricing_tables (){
		$this->load->view('admin/header_footer/dashboard_header');
		$this->load->view('admin/pricing_tables');
		$this->load->view('admin/header_footer/dashboard_footer');
	}

	public function level2 (){
		$this->load->view('admin/header_footer/dashboard_header');
		$this->load->view('admin/level2');
		$this->load->view('admin/header_footer/dashboard_footer');
	}

}
