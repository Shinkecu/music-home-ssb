<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Order;

class Product extends Model
{
    /**
    *
    *
    * @var array
    */
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(category::class);
    }
    public function Orders()
    {
        return $this->belongsToMany(Order::class)->withPrivot('qty');
    }
}
