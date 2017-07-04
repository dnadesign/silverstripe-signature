<?php

namespace DNA\Signature;


use SilverStripe\Control\HTTPRequest;
use SilverStripe\SiteConfig\SiteConfig;
use SilverStripe\Control\Controller;


class Signature_Controller extends Controller
{

    private static $allowed_actions = array(
        'index'
    );

    public function index(HTTPRequest $request)
    {
        return $this->renderWith(array('Signature_Index'));
    }

    public function getSiteConfig()
    {
        return SiteConfig::current_site_config();
    }
}
