<?php defined('BASEPATH') or exit('No direct script access allowed');

class Photography extends Public_Controller {
	public function __construct() 
	{
		parent::__construct();

		// Load the required classes
		$this->load->model('photo_gallery_m');
		$this->load->helper('html');

		// Load pagination library
		$this->load->library('files/files');
		$this->load->library('pagination');
	}

	function index() 
	{
		$folders = $this->file_folders_m->folder_tree(3);
		$this->template
		     ->title($this->module_details['name'])
		     ->set('folders', $folders)
		     ->build('display');
	}

	function view($id)
	{
		$this->template
		     ->title($this->module_details['name'])
		     ->set('id', $id)
		     ->build('view');
	}
}
