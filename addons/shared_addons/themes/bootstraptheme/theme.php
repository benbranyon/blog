<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Theme_Bootstraptheme extends Theme
{
  public $version		= '1.0';

  public $name			= 'bootstraptheme';
  public $author		= 'Ben Branyon';
  public $author_website	= 'http://benbranyon.com';
  public $description	= 'Bootswatch HTML responsive template, based on Bootstrap.';
  public $website		= 'http://benbranyon.com';
  public $options 		= array(
		'show_breadcrumbs' 	=> array(
			'title'         => 'Do you want to show breadcrumbs?',
			'description'   => 'If selected it shows a string of breadcrumbs at the top of the page.',
			'default'       => 'yes',
			'type'          => 'radio',
			'options'       => 'yes=Yes|no=No',
			'is_required'   => TRUE
		),
	);
}
