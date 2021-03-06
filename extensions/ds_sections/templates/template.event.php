<?php
	
	require_once EXTENSIONS . '/ds_sections/lib/class.event.php';
	
	Final Class Event%1$s extends SectionsEvent {
		public function __construct(){
			parent::__construct();
			
			$this->_about = (object)array(
				'name'			=> %2$s,
				'author'		=> (object)array(
					'name'			=> %3$s,
					'website'		=> %4$s,
					'email'			=> %5$s
				),
				'version'		=> %6$s,
				'release-date'	=> %7$s
			);
			
			$this->_parameters = (object)array(
				'root-element' => %8$s,
				'section' => %9$s,
				'filters' => %10$s,
				'overrides' => %11$s,
				'defaults' => %12$s,
				'output-id-on-save' => %13$s
			);
		}

		public function allowEditorToParse() {
			return true;
		}
	}

	return 'Event%1$s';
