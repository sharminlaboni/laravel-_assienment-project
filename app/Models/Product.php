<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Product extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable=['title', 'catagory_id', 'image', 'catagory','is_active','description','price'];

    public function catagory()
    {
        return $this->belongsTo(Catagory::class);
    }

    public function color()
    {
        return $this->belongsToMany(Color::class);
    }


}
