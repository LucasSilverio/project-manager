<?php

namespace App\Controllers;

use App\Models\Users;

class UsersController
{
    public function show($container, $request)
    {
        $user = new Users($container);
        $user->create(['name' => 'Lucas']);
        return $data = $user->get($request->attributes->get(1));
    }
}