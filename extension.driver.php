<?php
	
	class extension_helloworld extends Extension {
		public function about() {
			return array(
				'name'			=> 'Hello World',
				'version'		=> '1.0',
				'release-date'	=> '2010-04-24',
				'author'		=> array(
					'name'			=> 'Carson Sasser',
					'website'		=> 'http://carsonsasser.com/',
					'email'			=> 'sassercw@cox.net'
				),
				'description'	=> 'Hello world sample extension.'
	 		);
		}
		
		public function fetchNavigation(){ 
			return array(
				array(
					'location'	=> 200,
					'name'		=> 'Hello World',
					'link'		=> '/greeting/',
				)
			);
		}
	}
	
?>
