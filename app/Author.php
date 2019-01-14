<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function article()
    {
        return $this->hasMany(Article::class);
    }

    //set The primary key
    protected $primaryKey = 'author_id';
    //set the data to be inserted
    protected $fillable = ['author_id','name','username'];
}
