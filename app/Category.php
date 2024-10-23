<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Product;

class Category extends Model
{
    /**
     *
     *
     * @var array
     */
    protected $guarded = [];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
