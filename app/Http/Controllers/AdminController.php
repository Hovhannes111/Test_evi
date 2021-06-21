<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Role;
use App\Models\Worktime;
use function GuzzleHttp\Promise\all;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{


    public function view($id)
    {
        $workTime = Worktime::query()
            ->select('date')
            ->where('user_id', $id)
            ->orderBy('date', 'desc')
            ->get()
            ->keyBy('date')
            ->toArray();
        $date = array_keys($workTime);

        $user = \App\Models\User::query()->find($id);
        if (is_null($user)) {
            return redirect()->back();
        }
        $role = Role::find($user->role_id);

        return view('admin.view', compact('user', 'date', 'role'));
    }


    public function delete($id)
    {
        $user = \App\Models\User::query()->find($id);
        if (!is_null($user)) {
            if ($user->image !== null) {
                unlink(public_path('uploads\\') . $user->image);
            }
            $user->delete();
        }
        session()->flash('user_del', 'User is deleted');
        return redirect()->to('/home');
    }


    public function changeRole($id)
    {
        $user = \App\Models\User::query()->find($id);

        if (!is_null($user)) {
            if ($user->role_id === 1) {
                $user->role_id = 2;
            } else {
                $user->role_id = 1;
            }

            $user->save();
        }
        session()->flash('user_admin', 'This user role changed');
        return redirect()->to('/home');
    }


    public function deleteMe($id)
    {
        $user = \App\Models\User::query()->find($id);
        if (!is_null($user)) {
            if ($user->image !== null) {
                unlink(public_path('uploads\\') . $user->image);
            }
            $user->delete();
        }
        return redirect()->to('/');
    }
}
