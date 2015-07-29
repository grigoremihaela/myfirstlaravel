<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	/**
	 * Fillable fields for a tag.
	 *
	 * @var array
	 */
	protected $fillable = ['name'];

    /**
	 * Get the posts associated with the given tag.
	 *
	 * @return Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function posts() 
	{
		return $this->belongsToMany('App\Post');
	}
}
