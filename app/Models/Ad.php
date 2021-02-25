<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Helpers\helper;

class Ad extends Model
{
    protected $guarded=['id'];

    public function setSlugAttribute($value)
    {
        $slug=helper::slug($value);
        $uniqueslug=helper::uniqueSlug($slug, 'ads');
        $this->attributes['slug']=$uniqueslug;
    }

    public function images()
    {
        return $this->hasMany('App\Models\Image');
    }
    
    public function category()
    {
    return $this->belongsTo('App\Models\Category');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }

    public function scopeFilter($query, Request $request)
    {
        if($request->country){
            $query->whereCountry_id($request->country);
        }

        if($request->category){
            $query->whereCategory_id($request->category);
        }

        if($request->keyword){
            $query->where('title','LIKE','%'.$request->keyword.'%');
        }
        return $query->with('images')->get();

    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment')->where('parent_id',Null);
    }

}
