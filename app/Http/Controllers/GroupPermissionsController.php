<?php
namespace App\Http\Controllers;
use App\Enums\GroupPermissionEnums;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use Mcamara\LaravelLocalization\LaravelLocalization;
use Validator;
class GroupPermissionsController extends Controller
{
    function __construct() {
    }
    public function index(){
        return View('permissions.index');
    }

    public function saveGroupPermission(Request $request){
        $validator = Validator::make($request->all(), GroupPermissionEnums::$saveGroupPermissionRules);
        if (!$validator->passes()) {
            $msg = getErrorMessageDataForLiTag($validator->errors()->all() );
            return [
                'errors' => 1,
                'msg' => $msg
            ];
        }else{
            //check if the Group Permission exist or no
            return $request;

        }
    }

}