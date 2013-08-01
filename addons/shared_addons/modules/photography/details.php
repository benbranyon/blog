<?php 
class Module_Photography extends Module {
	public $version = '1.0';

	public function info(){
		return array(
			'name' => array(
				'en' => 'Photography',

			),
			'description' => array(
				'en' => 'This is a Photo Gallery Module.',
			),
			'frontend' => TRUE,
			'backend' => TRUE,
			'menu' => 'content',
			'sections' => array(
				'photography' => array(
					'name' => 'Photo Galleries',
					'uri' => 'admin/photography',
					'shortcuts' => array(
						'create' => array(
							
							'name' => 'Add Gallery',
							'uri' => 'admin/photography/create',
							'class' => 'add',
						)
					)
				)
			)
		);
	}

	public function install() {
		$this->dbforge->drop_table('photo_gallery');
		$this->dbforge->drop_table('photography_images');

		// Create the photgraphy galleris table.
		$this->install_tables(array(
			'photo_gallery' => array(
				'id' => array('type' => 'INT', 'constraint' => 11, 'auto_increment' => true, 'primary' => true),
				'slug' => array('type' => 'VARCHAR', 'constraint' => 255, 'null' => false, 'unique' => true, 'key' => true),
				'title' => array('type' => 'VARCHAR', 'constraint' => 255, 'null' => false, 'unique' => true),
				'folder_id' => array('type' => 'INT', 'constraint' => 11, 'null' => false),
				'description' => array('type' => 'TEXT')
			),
		));
		return true;
	}	

	public function uninstall() {
		return true;
	}

	public function upgrade($old_version){
		// Your Upgrade Logic
		return true;
	}

	public function help(){
		// Return a string containing help info
		// You could include a file and return it here.
		return "No Help";
	}
}
?>
