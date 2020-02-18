<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
class TodoController extends Controller
{
    //

    public function index(){
		//    $todos = Todo::all();
	    return view('todos.index')->with('todos', Todo::all());
    }

    public function show(Todo $todo){
    	//dd($todoId); Testing
    	//$todo = Todo::find($todoId);
    	return view('todos.show')->with('todo', $todo);
    	//return view('todos.show')->with('todoitem',$todo);
    	//todoitem merupakan nama datanya nanti pas di panggil di viewnya
	}
	public function create(){
		return view('todos.create');
	}
	public function store(){
		$this->validate(request(),[
			'name' => 'required|min:6|max:20',//at least there is 6 characters and max 20
			'description' =>'required'
		]);
		//dd(request()->all());
		$data = request()->all();
		$todo = new Todo();
		$todo->name = $data['name'];
		$todo->description = $data['description'];
		$todo->completed = false; 

		session()->flash('success', 'Todo Created Successfully');
		$todo->save();

		return redirect('/todos');
	}
	public function edit(Todo $todo){
		return view('todos.edit')->with('todo', $todo);
	}
	public function update(Todo $todo){

		$this->validate(request(),[
			'name' => 'required|min:6',
			'description' => 'required'
		]);
		$data = request()->all();
		 
		$todo->name = $data['name'];
		$todo->description  = $data['description'];
		$todo->save();
		
		return redirect('/todos');
	}
	public function delete(Todo $todo){
		$todo->delete();
		//dd("test");
		session()->flash('success','Todo Deleted Succesfully');//Key...,showed message
		return redirect('/todos'); 
	}
	public function complete(Todo $todo){
		$todo->completed = true;
		$todo->save();
		session()->flash('success', 'Completed Change Successfully');
		return redirect('/todos');
	}
}
