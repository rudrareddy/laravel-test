<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
   protected $fillable = ['name'];

   public function workshops(){
     return $this->hasMany(Workshop::class,'event_id');
   }
   public function workshops_future(){
     $date= date('Y-m-d');
     return $this->hasMany(Workshop::class,'event_id')->where('start','<=',$date)->where('end','>=',$date);
   }
}
