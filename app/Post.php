<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public static $rules = [
            'title' => 'required|max:100',
            'url' => 'required|max:255',
            'content' => 'required'
    ];

    public function user()
    {
    	return $this->belongsTo(User::class, 'created_by');
    }
}
