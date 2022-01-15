<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;
use App\Models\Users;

use Illuminate\Support\Facades\DB;


class TaskController extends Controller
{
    public function index(Request $request){
        $user = DB::table('users')
        ->select('id', 'name', 'phone', 'email')
        ->get();

        return view('index', [
            'tasks' => $user,
        ]);
    }

    public function create(){
        return view('tasks.create');
    }

    public function store(Request $request){
        $user = new Users;
        error_log("{$request->input('name')}, {$request->input('email')}, {$request->input('phone')}");


        $this->validate($request,[
            'name'=>'required|max:15',
            'phone'=>'required|max:15',
            'email'=>'required|max:254',
        ]);

        $user->name=$request->input('name');
        $user->phone=$request->input('phone');
        $user->email=$request->input('email');

        $user->save();

        return redirect('index');
    }

    public function edit($id){
        $user = users::find($id);
        return view('tasks.edit', compact('user'));
    }

    public function update(Request $request, $id){
        $user = users::find($id);

        $user->name=$request->input('name');
        $user->phone=$request->input('phone');
        $user->email=$request->input('email');

        $user->save();

        return redirect('index');
    }

    public function destroy(Request $request, Users $user){
        $user = users::find($request->id);
        $user->delete();
        return redirect('index');
    }

}
