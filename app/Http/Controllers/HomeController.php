<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $res = DB::select("SELECT * FROM `employees`");
        print_r($res[5]);
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
        $result = DB::table('employees')->insert(['first_name' => $first_name,'last_name' => $last_name]);
    }

    public function profile()
    {
        echo "Profile page";
    }
}