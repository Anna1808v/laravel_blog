<?php

namespace App\Http\Controllers\Admin\User;

use App\User;
use App\Http\Controllers\Controller;

class EditController extends Controller
{
    public function __invoke(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }
}
