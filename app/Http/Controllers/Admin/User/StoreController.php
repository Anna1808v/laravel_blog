<?php

namespace App\Http\Controllers\Admin\User;

use App\User;
use App\Jobs\StoreUserJob;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        StoreUserJob::dispatch($data);
        //StoreUserJob::dispatch()->Queue($data);

        return redirect()->route('admin.user.index');
    }
}
