<?php

namespace App\Models\Froala;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
	use SoftDeletes;

	protected $table = 'articles';

	protected $fillable = [
		'title',
		'body',
		'excerpt'
	];

	protected $dates = [
		'deleted_at'
	];
}
