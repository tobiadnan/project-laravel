<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = ['id']; 
    protected $with=['user','category'];

    public function category(){
        return $this -> belongsTo(Category::class);
    }

    public function user(){
        return $this -> belongsTo(User::class);
    }

    public function scopeFilter($query, array $filters){
        $query->when($filters['search']??false,function($query,$search){
            return $query->where('title','like','%'.$search.'%' )
            ->orwhere('body','like','%'.$search.'%');
        });

        $query->when($filters['category']??false,function($query,$category){
            return $query->wherehas('category',function($query) use ($category){
                $query ->where('slug', $category);
            });
        });

        $query->when($filters['user']??false,fn($query,$user)=>
            $query->wherehas('user',fn($query)=>$query ->where('id', $user)
            )
        );
    }
}
