<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    //Update the primary key so when using $id for example - it uses listings_id instead of the default(id)
    protected $primaryKey = 'listings_id';

    //Create relationship between models(user)
    public function user() {
        return $this->belongsTo('App\User');
    }
}
