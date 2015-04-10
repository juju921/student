<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {


    protected $fillable = [
        'title',
        'content',
        'status',

    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
	}


    public function tags()
    {

        return $this->belongsToMany('App\Tag', 'tag_post');
    }

}