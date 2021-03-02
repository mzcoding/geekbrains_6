<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function getCategories()
	{
		return \DB::table('categories')
			//->select("id", "title", "slug", "description", "created_at")
			->get();

	}

	public function getCategory(int $id)
	{
		return \DB::table('categories')->find($id);
	}
}
