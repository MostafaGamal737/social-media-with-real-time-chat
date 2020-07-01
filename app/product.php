<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{

  protected $fillable = [
      'name', 'price', 'discount','detail',
  ];
    public function reviews()
    {
      return $this->hasMany(Review::class);
    }
    public function user()
    {
      return $this->belongsTo(user::class);
    }
}
