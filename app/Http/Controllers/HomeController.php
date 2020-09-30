<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('index');
    }

    public function login_form()
    {
        return view('auth.login',['nameTitle' => 'Вход']);
    }

    public function login(Request $request)
    {
        $username = $request['username'];
        $password = $request['password'];
        if($username == "Ivan" && $password = "456852")
        {
            return view('auth.game');
        }
        else{return view('auth.login',['nameTitle' => 'Вход']);}
    }

    public function register_form(Request $request)
    {
        return view('auth.register',['nameTitle' => 'Регистрация']);     
    }

    public function register(Request $request)
    {
        $first_name = $request['first_name']; 
        $last_name = $request['last_name'];       
        $result = DB::table('user_informations')->insert(['first_name' => $first_name]);
        $result = DB::table('user_informations')->insert(['last_name' => $last_name]);
    }
}
