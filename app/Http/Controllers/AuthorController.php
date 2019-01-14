<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{
    //to display all Author
    public function index(){
        return Author::all();
    }
    
    //to create a data
    public function create(request $request){
        $author = new Author;
        $author->name = $request->name;
        $author->username = $request->username;
        $author->save();
    
        return "Data inserted";
    }
    
    //to display a specific Author
    public function view($id){
        
       return Author::find($id);
    }
    
    //to update a specific Author
    public function update(request $request,$id){
        $name = $request->name;
        $username = $request->username;
    
        $author = Author::find($id);
        $author->name = $name;
        $author->username =$username;
        $author->save();
    
        return "Data updated";
    }
    
    //to delete a specific Author
    public function delete($id){
    
        $author = Author::find($id);
        $author->delete();
       
        return "Data deleted";
    }
}
