<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use Mcamara\LaravelLocalization\LaravelLocalization;
class UserController extends Controller
{
    function __construct() {
    }
    public function index(){
        return View('users.index');
    }

    public function userChangePassword(){
        return View('users.changePassword');
    }

    public function userChangeProfilePicture(){
        return View('users.changeProfilePicture');
    }

    public function userChangeSettings(){
        return View('users.changeSettings');
    }



}