<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Presenters\DatePresenter;

class Post extends Model  {

	use DatePresenter;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'posts';

	protected $fillable = ['id', 'title', 'slug', 'summary', 'content', 'user_id'];

	

	/**
	 * A post is owened by a user.
	 *
	 * @return Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user() 
	{
		return $this->belongsTo('App\User');
	}

	/**
	 * Get the tags associated with the given post.
	 *
	 * @return Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function tags() 
	{
		return $this->belongsToMany('App\Tag')->withTimestamps();
	}

    /**
	 * Get a list of tag ids associated with the current post.
	 *
	 * @return array
	 */
	public function getTagListAttribute()
	{
		return $this->tags->lists('id')->all();
	}
	
}	
