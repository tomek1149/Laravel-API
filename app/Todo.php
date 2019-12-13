<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = ['user_id', 'title', 'completed'];
    protected $hidden = ['created_at', 'updated_at'];


    public function user(){
        return $this->hasMany('App\Todo');
    }

}
