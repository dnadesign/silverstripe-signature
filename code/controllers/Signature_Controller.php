<?php
class Signature_Controller extends Controller {

	private static $allowed_actions = array(
		'index'
	);

	public function index(SS_HTTPRequest $request) {
		return $this->renderWith(array('Signature_Index'));
	}

	public function getSiteConfig() {
		return SiteConfig::current_site_config();
	}

}