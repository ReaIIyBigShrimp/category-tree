<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    protected $fillable = [
        'name',
        'parent_id'
    ];

    public function subCategory() {
        return $this->hasMany('App\Category', 'parent_id');
    }
}
