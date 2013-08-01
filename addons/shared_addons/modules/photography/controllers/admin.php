<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * @author Ben Branyon
 * @package photography
 *
 */

class Admin extends Admin_Controller
{
	protected $section = 'photography';

	protected $gallery_validation_rules = array(
		'title' => array(
			'field' => 'title',
			'label' => 'Title',
			'rules' => 'trim|htmlspecialchars|required|max_length[200]'
		),
		'slug' => array(
			'field' => 'slug',
			'label' => 'Slug',
			'rules' => 'trim|max_length[255]|required'
		)
	);
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('photo_gallery_m');
		$this->load->library('form_validation');

		$this->load->helper('html');
		$this->load->model('files/file_folders_m');

			
	}

	public function index()
	{
		// Get all the galleries
		$photo_galleries = $this->photo_gallery_m->get_all();

		// Get folders
		$folders = $this->file_folders_m->get_folders();

		$this->template
		     ->title($this->module_details['name'])
		     ->set('photo_galleries', $photo_galleries)
		     ->set('folders', $folders)
		     ->build('admin/index');
	}

	public function create()
	{
		// Set the validation rules from the array above
		$this->form_validation->set_rules($this->gallery_validation_rules);

		// check if the form validation passed
		if($this->form_validation->run())
		{
			// See if the model can create the record
			if($this->photo_gallery_m->create($this->input->post()))
			{
				// All good...
				$this->session->set_flashdata('success', 'Success');
				redirect('admin/photography');
			}
			// Something went wrong. Show them an error
			else
			{
				$this->session->set_flashdata('error', 'Error');
				redirect('admin/photography/create');
			}
		}

		$photo_gallery = new stdClass;

		$this->template
		     ->set('photo_gallery', $photo_gallery)
		     ->build('admin/form');
	}

		
}
