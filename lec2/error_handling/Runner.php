<?php
require_once "Configuration.php";

class Runner {
	static function init() {
		try {
			$conf = new Configuration( dirname(__FILE__)."/confa01.xml" );
			print "user: ".$conf->get('user')."\n";
			print "host: ".$conf->get('host')."\n";
			$conf->set("pass", "newpass");
			$conf->write();
		} catch ( FileException $e ) {
			echo $e->getMessage();
			// permissions issue or non-existent file
		} catch ( XmlException $e ) {
			echo $e->getMessage();
			// broken xml
		} catch ( ConfException $e ) {
			echo $e->getMessage();
			// wrong kind of XML file
		} catch ( Exception $e ) {
			echo $e->getMessage();
			// backstop: should not be called
		}
	}
}

Runner::init();