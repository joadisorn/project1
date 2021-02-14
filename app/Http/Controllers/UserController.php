<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'Users' => User::all(),
        ];
        return view('User.index', $data);
    }

    public function create()
    {
        return view('User.create');
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');

        $User = new User();
        $User->name = $name;
        $User->username = $username;
        $User->email = $email;
        $User->password = Hash::make($password);
        $User->save();

        return redirect('/User');
    }

    public function edit($id)
    {
        $User = User::find($id);
        $data = [
            'User' => $User
        ];
        return view('User.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $name = $request->input('name');
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');

        $User = User::find($id);
        $User->name = $name;
        $User->username = $username;
        $User->email = $email;
        $User->password = Hash::make($password);
        $User->save();

        return redirect('/User');
    }

    public function delete($id)
    {
        $User = User::find($id);
        $User->delete();
        return redirect('/User');
    }

}
