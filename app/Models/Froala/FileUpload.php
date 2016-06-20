<?php

namespace App\Models\Froala;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FileUpload extends Model
{
	use SoftDeletes;

	protected $table = 'fileUploads';

	protected $fillable = [
		'title',
		'path'
	];

	protected $dates = [
		'deleted_at'
	];
}
