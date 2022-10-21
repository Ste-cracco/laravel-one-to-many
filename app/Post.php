<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'slug'
    ];

    public function category() {

        return $this->belongsTo('App\Category','category_id', 'id');
        // Questo metodo lo useremo come proprità per stampare i dati ($post->category->name) *Laravel's Trick*
    }
}
