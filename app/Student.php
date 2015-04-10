<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model {

    /**
     * @var array
     */
    protected $fillable = [
        'firstname',
        'name',
        'publish_at',
        'bio',
        'status',
        'uri'
    ];

    /**
     * @param $value
     */
    public function setFirstNameAttribute($value)
    {
        $this->attributes['firstname'] = ucfirst($value);
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }

    /*public function scopeCurrent($query)
    {
        return $query->where('published_at', '<=', date('Y-m-d'));
    }*/








}
