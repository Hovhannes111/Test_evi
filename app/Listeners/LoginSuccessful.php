<?php

namespace App\Listeners;

use App\Models\Worktime;
use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;

class LoginSuccessful
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Login $event
     * @return void
     */
    public function handle(Login $event)
    {

        $isLoginToday = Worktime::query()
            ->whereDate('date', Carbon::today()->toDate())
            ->where('user_id', $event->user->getAuthIdentifier())
            ->exists();
        if (!$isLoginToday) {
            Worktime::query()->create([
                'user_id' => $event->user->getAuthIdentifier(),
                'date' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
