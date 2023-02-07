<?php

namespace App\Http\Controllers\Admin\User;

use App\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        User::firstOrCreate($data);
        return redirect()->route('admin.user.index');
    }
}
