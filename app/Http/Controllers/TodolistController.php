<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\ToDo;



class TodolistController extends Controller
{

    public function index()
    {
        $todolists = ToDo::all();
        return view('home', compact('todolists'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'content'=>'required'
        ]);
        ToDO::create($data);
        return back();
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy(Todolist $todolist)
    {
        $todolist->delete();
        return back();
    }
}
