<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\crud;

class CrudController extends Controller
{
    //
    public function ShowPage($id = null)
    {
        // Don't any id than call this if condation after that show all user.
        if ($id == '') {
            $page = crud::get();
            return response()->json(['users' => $page], 200); // 200 means Don't Error this code , Ok.
        } else {
            $page = crud::find($id);
            return response()->json(['users' => $page], 200); // 200 means Don't Error this code , Ok.
        }
    }

    // Store Page with Api System
    public function store(Request $request)
    {
        $request->validate([
            "page_position" => 'required|max:25',
            "page_name" => 'max:25',
            "page_title" => "max:25",
        ]);

        crud::insert([
            "page_position" => $request->page_position,
            "page_name" => $request->page_name,
            "page_title" => $request->page_title,
            "created_at" => Carbon::now(),
        ]);
        $message =  'Add a new page Successfully !';
        return  response()->json(['message' => $message], 201); // 201 means createded suuccessfylly, kono data successfully create korla 201 ase
    }

    // Update Page Api function
    public function update(Request $request, $id)
    {
        // $update = Page::find($id);
        $request->validate([
            "page_position" => 'max:25',
            "page_name" => 'max:25',
            "page_title" => "max:25",
        ]);
        crud::findOrFail($id)->update([
            "page_position" => $request->page_position,
            "page_name" => $request->page_name,
            "page_title" => $request->page_title,
            "updated_at" => Carbon::now(),
        ]);
        $message =  'Update Page Successfully !';
        return  response()->json(['message' => $message], 201);
    }

    // Delete Page Api Function
    public function destroy($id)
    {
        crud::findOrFail($id)->delete();

        $message =  'Page Delete Successfully !';
        return  response()->json(['message' => $message], 201);
    }
}
