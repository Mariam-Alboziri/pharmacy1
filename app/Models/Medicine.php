<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Medicine extends Model
{


    // protected $casts = [

    //     'description' => CleanHtml::class,
    // ];

    use HasFactory;

    protected $fillable = [
        'name',
        'brand',
        'category_id',
        'price',
        'description',
        'featured_image',
    ];

    protected $guarded=[];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function orders() {
        return $this->belongsToMany(Order::class);
     }



}
