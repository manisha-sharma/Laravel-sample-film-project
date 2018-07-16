<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
     //
	protected $table = 'comments';
	/**	
     * Fillable fields
     * 
     * @var array
     */
    protected $fillable = [
        'user_id','film_id','name','comments'
    ];
}