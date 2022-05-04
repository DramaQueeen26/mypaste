<?php

namespace App\Controllers;

use App\Model\SettingsModel;
use App\Controllers\Error;

class SettingsController
{
	// GET SITE NAME FROM DATABASE
    protected function site_name(){

        $settings = new SettingsModel();
        $settings = $settings->get_site_name();

        foreach($settings as $row){
            $site_name = $row->value;
        }

        return $site_name;

    }
}