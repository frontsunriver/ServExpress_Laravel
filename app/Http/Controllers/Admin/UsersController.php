<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\MassDestroyUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Role;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
        // abort_unless(\Gate::allows('user_access'), 403);
        $menu = "users";

        return view('admin.users.index', compact('menu'));
    }

    public function getUserList(Request $request)
    {
        $start = $request->start;
        $length = $request->length;
        $users = User::skip($start)->take($length)->get();
        $count = User::get()->count();
        $result['data'] = $users;
        $result['recordsFiltered'] = $count;
        $result['recordsTotal'] = $count;
        return json_encode($result);
    }

    public function create()
    {
        // abort_unless(\Gate::allows('user_create'), 403);
        $menu = "users";
        return view('admin.users.create', compact('menu'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['password'] = md5('12345678');
        if(isset($data['status'])){
            $data['status'] = 1;
        }else{
            $data['status'] = 0;
        }
        $user = User::create($data);
        return redirect()->route('admin.users.index');
    }

    public function edit(User $user)
    {
        // abort_unless(\Gate::allows('user_edit'), 403);

        $roles = Role::all()->pluck('title', 'id');

        $user->load('roles');

        return view('admin.users.edit', compact('roles', 'user'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        // abort_unless(\Gate::allows('user_edit'), 403);

        $user->update($request->all());
        $user->roles()->sync($request->input('roles', []));

        return redirect()->route('admin.users.index');
    }

    public function show(User $user)
    {
        // abort_unless(\Gate::allows('user_show'), 403);

        $user->load('roles');

        return view('admin.users.show', compact('user'));
    }

    public function destroy(User $user)
    {
        // abort_unless(\Gate::allows('user_delete'), 403);

        $user->delete();

        return back();
    }

    public function massDestroy(MassDestroyUserRequest $request)
    {
        User::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
