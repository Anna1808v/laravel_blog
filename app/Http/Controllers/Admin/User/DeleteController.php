<?php

namespace App\Http\Controllers\Admin\User;

use App\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\UpdateRequest;

class DeleteController extends Controller
{
    public function __invoke(User $user)
    {
        $user->delete();
        return redirect()->route('admin.user.index', compact('users'));
    }
}
