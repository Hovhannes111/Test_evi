<?php

namespace App\Http\Controllers;

use App\Models\Worktime;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    private function checkRole($role)
    {
        return \App\Models\User::query()
            ->where('users.id', Auth::id())
            ->leftJoin('roles', 'roles.id', '=', 'users.role_id')
            ->where('roles.name', $role)
            ->exists();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        if ($this->checkRole('admin')) {

            $users = User::query()
                ->select('users.*')
                ->when($request->date, function ($query) use ($request) {
                    $query->join('worktimes', function ($join) use ($request) {
                        $date = Carbon::parse($request->date)->format('Y-m-d');
                        $join->on('worktimes.user_id', '=', 'users.id')
                             ->whereDate('worktimes.date', $date);
                    });
                })
                ->where('users.id', '!=', Auth::id())
                ->when($request->name, function ($query) use ($request) {
                    $query->where('users.name', 'like', '%' . $request->name . '%');
                })
                ->paginate(9);
            return view('admin.home', compact('users'));
        } else {
            $user_id = Auth::user()->getAuthIdentifier();
            $user = User::find($user_id);
            $user_name = $user->name;
            $user_email = $user->email;


            $workTime = Worktime::query()
                ->select('date')
                ->where('user_id', Auth::id())
                ->get()
                ->keyBy('date')
                ->toArray();
            $date = array_keys($workTime);

            return view('user', compact('user_name', 'user_email', 'user_id', 'user', 'date'));
        }

    }
}
