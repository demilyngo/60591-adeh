<?php

namespace Framework;

use src\Models\UserModel;

class Auth
{

  public function enrichByUser(Request $request): Request
  {
    if ($session = $request->getSession()) {
      $request->setUser(UserModel::getById((int)$session['id']));
    }
    return $request;
  }
}