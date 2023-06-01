<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Category extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['name', 'status'];
    public function Product()
    {
        return $this->hasMany(product::class, 'category_id', 'id');
    }
    public function scopeSearch($query)
    {
        $fill = request('orderBy','ASC');
        $key = request('key');
        $query = $query->orderBy('name',$fill)->where('name','LIKE','%'.$key.'%');
        return $query;
    }
}
