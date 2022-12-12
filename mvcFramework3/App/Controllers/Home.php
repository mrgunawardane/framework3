<?php

namespace App\Controllers;

use \Core\View;

class Home extends \Core\Controller{
    public function indexAction(){
        // echo 'Hello this is home in controllers';
        View::render('Home/index.html', [
            'name' => 'Dave',
            'color' => ['red', 'blue', 'green']
        ]);
    }

    protected function before(){
        // echo '<br> before <br>';
    }
    protected function after(){
        // echo '<br> after <br>';
    }
}