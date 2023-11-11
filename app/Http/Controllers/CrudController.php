<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\crud;
use Illuminate\Support\Carbon;

class CrudController extends Controller
{
    //
    public function view_user()
    {
        //
        $view_data = crud::all();
        return view('user.index', compact('view_data'));
    }

    public function create_user()
    {
        //
        return view('user.create');
    }

    public function add_user(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|unique:cruds|max:25',
        ]);

        crud::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->route('view.user');
    }

    public function user_edit($id = null)
    {
        //
        $edit = crud::findOrFail($id);
        return view('user.edit', compact('edit'));
    }

    public function user_update(Request $request)
    {
        //
        $update = $request->id;
        crud::findOrFail($update)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'updated_at' => Carbon::now(),

        ]);
        return redirect()->route('view.user');
    }
    public function user_delete($id = null)
    {
        //
        crud::findOrFail($id)->delete();
        return redirect()->back();
    }
}
