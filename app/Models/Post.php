<?php

namespace App\Models;

use Illuminate\Support\Facades\URL;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable=['title', 'slug','date','image','text','description','posted','type', 'category_id'];
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function tags()
    {
        return $this->morphToMany(Tag::class,'taggables');
    }
    
    public function getImageUrl()
    {
        return URL::asset("images/post/".$this->image);
    }
}
