<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function getPostCount(){
        return $this->hasMany("App\Models\Post","category_id","id")->count();
    }

}
