<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Blog extends Model
{
    use HasFactory;

    protected  $guarded = [];

    public function author(){
        //belongsTo relatie altijd enkelvoud, houdt het makkelijk.
        return $this->belongsTo('\App\Models\User' , 'author_id');
    }
}
