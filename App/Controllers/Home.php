<?php

namespace App\Controllers;

use Core\View;
use Core\Util;
use App\Controllers\settingsController;

class Home extends settingsController
{
    // ------------------ VIEWS ---------------------

    public function index()
    {

        if(isset($_GET['url']) != 'home'){
            $views = ['home/index'];
            $args  = [
                'site_name' => settingsController::site_name(),
                'title' => 'Share your texts'
            ];
            $header = 'templates/index/header';
            $footer = 'templates/index/footer';
            View::render($views, $args, $header, $footer);
        }else{
            $baseUrl = new Util();
            echo '<script> window.location.href="' . $baseUrl->baseUrl() . '"</script>';
        }
        
    }

    public function signin()
    {
        $views = ['home/signin'];
        $args  = [
            'site_name' => settingsController::site_name(),
            'title' => 'Sign In'
        ];
        $header = 'templates/index/header';
        $footer = 'templates/index/footer';
        View::render($views, $args, $header, $footer);
    }

    public function signup()
    {
        $views = ['home/signup'];
        $args  = [
            'site_name' => settingsController::site_name(),
            'title' => 'Sign Up'
        ];
        $header = 'templates/index/header';
        $footer = 'templates/index/footer';
        View::render($views, $args, $header, $footer);
    }

    public function recover()
    {
        $views = ['home/recover'];
        $args  = [
            'site_name' => settingsController::site_name(),
            'title' => 'Recover Password'
        ];
        $header = 'templates/index/header';
        $footer = 'templates/index/footer';
        View::render($views, $args, $header, $footer);
    }
}
