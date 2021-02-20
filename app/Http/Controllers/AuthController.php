<?php


namespace App\Http\Controllers;
Use Illuminate\Http\Request;
Use database\factories\UserFactory;

class AuthController extends Controller
{
    protected $userName = [
        'login' => 'user',
        'password' => '123',
    ];

    public function index()
    {
        if ($_GET) {
            if($_GET['login'] == $this->userName['login'] &&$_GET['password'] == $this->userName['password']){
                return 'Ок - авторизация успешна';
            }else{
                return 'ДОСТУП ОГРАНИЧЕН';
            }
        } else {
            return view('auth.index');
        }
    }

}

