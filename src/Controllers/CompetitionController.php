<?php

namespace App\Controllers;

use App\Models\CompetitionModel;
use Framework\Container;
use Framework\Controller;
use Framework\Request;


//use UserModel;

class CompetitionController extends Controller
{
    public function index(Request $request){
        return $this->view('competitions.php', ['user' =>  $request->getUser(), 'message' => $request->getSession()['msg'], 'competitions' => CompetitionModel::all()]);

    }

}
