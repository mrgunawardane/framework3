<?php

namespace App\Controllers;

use Core\View;

class User extends \Core\Controller {
    public function signupAction(){
        View::render('User/signup.html', [
            'successMessage' => 'Register successfully'
        ]);
    }

    protected function before(){
        // echo '<br> before <br>';
    }
    protected function after(){
        // $input = json_decode(file_get_contents('php://input'), true);

        // echo $input;
       
    }
}