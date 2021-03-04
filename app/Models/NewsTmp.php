<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NewsTmp extends Model
{
    use HasFactory;

    protected $table = "news_tmp";
    protected $guarded = ['id'];

    public function category(): BelongsTo
	{
		return $this->belongsTo(Category::class, 'category_id', 'id');
	}

}
