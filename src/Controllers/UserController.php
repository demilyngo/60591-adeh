<?php

namespace App\Controllers;

use App\Models\UserModel;
use Framework\Controller;
use Framework\Exceptions\UnauthorizedException;
use Framework\Request;


//use UserModel;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return $this->view('users.php', ['user' =>  $request->getUser(), 'message' => $request->getSession()['msg'], 'users' => UserModel::all()]);

    }
    public function getByID(Request $request, int $id)
    {

        if($request->getUser()->id != $id){
            throw new UnauthorizedException('');
        }
//        var_dump($users->getById($id));
        return $this->view('user.php', ['user' =>  UserModel::getById($id)]);

    }

}

//namespace App\Controllers;
//
//use App\Models\UserModel;
//use Framework\Controller;
//
//
////use UserModel;
//
//class UserController extends Controller
//{
//    public function index()
//    {
//        $users = new UserModel();
//
//
//        return $this->view('users.php', ['users' =>  $users->all()]);
//
//    }
//    public function getByID($id)
//    {
//        $users = new UserModel();
//
////        var_dump($users->getById($id));
//        return $this->view('user.php', ['users' =>  $users->getById($id)]);
//
//    }
//
//}