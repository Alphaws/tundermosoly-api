<?php

namespace App\Actions;

use App\Http\Requests\SetConfigRequest;
use Lorisleiva\Actions\Concerns\AsAction;

class SetConfigAction
{
    use AsAction;

    public function handle()
    {
        // ...
    }

    public function asController(SetConfigRequest $request)
    {
        dd($request->user());
    }
}
