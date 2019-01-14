<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Author;


class ArticleController extends Controller
{
    public function index(){
        return Article::all();
    }

    public function create(request $request){
        $article = new Article;
        $article->title = $request->title;
        $article->content = $request->content;
        $article->author_id =$request->author_id;
        $article->save();

        if($article->save())
        {  
            return "Data created";
        }
        else {
            return "Author doesn't exist. Please try another author";
        }
        
        
        /*
        //dia then check whether the authors exist ke tak. if the author exist, then proceed. if not, it doesnt proceed.
        $author = $article->author_id;
        $author_id = Author::find($author)->where('author_id', $author)->pluck('author_id');
       //if ($author_id == $author)
       //if($article->save())
            
       if ('exist::author,author_id,1') 
       {
           $article->save();
            return "Data created";
       }
       else
       {
        return "Author doesnt exist. Data has not been created.". Author::find($author) . $author_id;
        }
        */
    }

    public function view($id)
    {   
        //cara 1
              
        $article = Article::find($id);
        $data = [
            'title'  => $article->title,
            'content'=> $article->content,
            'author' => Author::find($id)->name,
            'created_at'=> $article->created_at,
            'updated_at'=> $article->updated_at
        ];
        
        return $data;
        

        //cara 2
        /* $article = Article::find($id);
        $data = [
            Article::find($id),
            'author' => Author::find($id)->name

        ];
        
        return $data;*/

        // Author::find($id)->where('author_id', $id)->pluck('name');

        
    }

    public function update(request $request, $id){
        $title = $request->title;
        $content = $request->content;
        $author = $request->author_id;

        $article = Article::find($id);
        $article->title = $title;
        $article->content = $content;
        $article->author_id = $author;
        $article->save();

        return "Data updated";

    }

    public function delete($id)
    {
        $article = Article::find($id);
        $article->delete();

        return "Data deleted";
    }
}
