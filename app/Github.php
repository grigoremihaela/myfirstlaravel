<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Github extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'github';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * A user has many posts.
     *
     * @return Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function users() 
    {
      return $this->hasMany('App\User');
    }
}