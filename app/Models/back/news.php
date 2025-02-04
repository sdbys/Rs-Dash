<?php

namespace App\Models\back;


use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class news extends Model
{
   use sluggable;
    
    protected $table = "tb_news";
    protected $guarded = ['id'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['title','slug'],
                'firstUniqueSuffix' => 1
            ]
        ];
    } 
}
