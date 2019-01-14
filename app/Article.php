<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function authors()
    {
        
        return $this->belongsTo(Author::class);
    }

    //set The primary key
    protected $primaryKey = 'article_id';
    protected $foreignKey = 'author_id';
    protected $fillable = ['article_id','title','content','author_id'];
}
