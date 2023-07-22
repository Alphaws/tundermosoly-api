<?php

namespace App\Actions;

use App\Http\Requests\ContactMessageRequest;
use App\Models\Message;
use Lorisleiva\Actions\Concerns\AsAction;

class StoreContactMessageAction
{
    use AsAction;

    public function handle(ContactMessageRequest $request): bool
    {
        Message::create($request->validated());
        return true;
    }
}
