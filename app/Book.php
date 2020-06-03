<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = "book";
    public $fillable = ["bookid","authorid","title","ISBN","pub_year","avaliable"];
}
