<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'url', 'image', 'description'];


    public function getImagePath()
    {
        return asset('storage/' . $this->image);
    }
}
