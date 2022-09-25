<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable =['title','excerpt','body'];
    protected $guarded =['id'];
    protected $with = ['category', 'authors',];


    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function authors(){
        return $this->belongsTo(User::class,'user_id');
    }
    
    //search function
    public function scopeFilter($query, array $filters){
        $query->when($filters['search'] ?? false, function($query,$search){
        return  $query->where('title','like', '%'.$search.'%')
                ->orWhere('body','like','%'.$search.'%')
                ->orWhere('excerpt','like','%'.$search.'%');      
            });

        $query->when($filters['category'] ?? false, function($query,$category){
            return $query->whereHas('category',function($query) use($category){
                $query->where('slug',$category);
            });
        });//versi callback function

        $query->when($filters['authors'] ?? false, fn($query, $author) =>
            $query->whereHas('authors',fn($query) =>
            $query->where('username', $author))
    );//versi arrow function
    }
    
}