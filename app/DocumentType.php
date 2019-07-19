<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DocumentType extends Model
{
	use SoftDeletes;

	public function holders()
	{
		return $this->hasMany(Holder::class);
	}
}
