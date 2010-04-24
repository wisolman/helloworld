<?php 

require_once(TOOLKIT . '/class.administrationpage.php');

Class contentExtensionHelloWorldGreeting extends AdministrationPage{
	
	function view(){
		$link = new XMLElement('link');
		$this->addElementToHead($link);

		$this->setTitle('Symphony &ndash; Hello World');
        $this->setPageType('');

		$this->appendSubheading('Hello World!');
	}
	
}
?>
