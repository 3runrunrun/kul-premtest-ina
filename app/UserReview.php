<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;

class UserReview extends Model
{

    protected $table = 'user_reviews';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'order_id', 'product_id', 'user_id', 'rating', 'review', 
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
