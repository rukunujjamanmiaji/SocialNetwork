<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Article extends Model
{
   protected $fillable=[
       'users_id','content','live','posted_on'
       ];

   protected $dates = ['posted_on'];

   public function setLiveAttribute($value)
   {
       $this->attributes['live'] =(boolean)($value);
   }
    public function getShortContentAttribute()
    {
        return substr($this->content,0,random_int(60,150)).'...';
    }

    public function setPostedOnAttribute($value)
    {
        $this->attributes['posted_on'] = Carbon::parse($value);
    }
}
