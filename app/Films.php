<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Films extends Model
{
    //
	protected $table = 'films';
	/**
     * Fillable fields
     * 
     * @var array
     */
    protected $fillable = [
        'name','description','release_date','rating','ticket_price','country','genre_id','photo'
    ];
}
