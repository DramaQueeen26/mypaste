<?php

namespace App\Controllers;

use Core\View;

class Home
{
    public function index()
    {

        if(isset($_GET['url']) != 'home'){
            $views = ['home/index'];
            $args  = ['title' => 'Home'];
            $header = 'templates/index/header';
            $footer = 'templates/index/footer';
            View::render($views, $args, $header, $footer);
        }else{
            $url = stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://';
            $url = $url . $_SERVER['HTTP_HOST'];
            echo '<script> window.location.href="' . $url . '"</script>';
        }
        
    }

    public function signin()
    {
        $views = ['home/signin'];
        $args  = ['title' => 'Sign In'];
        $header = 'templates/index/header';
        $footer = 'templates/index/footer';
        View::render($views, $args, $header, $footer);
    }

    public function signup()
    {
        $views = ['home/signup'];
        $args  = ['title' => 'Sign Up'];
        $header = 'templates/index/header';
        $footer = 'templates/index/footer';
        View::render($views, $args, $header, $footer);
    }

    public function recover()
    {
        $views = ['home/recover'];
        $args  = ['title' => 'Recover Password'];
        $header = 'templates/index/header';
        $footer = 'templates/index/footer';
        View::render($views, $args, $header, $footer);
    }
}
