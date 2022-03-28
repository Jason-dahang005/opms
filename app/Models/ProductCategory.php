<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    public static function search($search){
        return empty($search) ? static::query()
        : static::query()->where('name', 'like', '%'.$search.'%')
        ->orWhere('description', 'like', '%'.$search.'%')
        ->orWhere('status', 'like', '%'.$search.'%')
        ->orWhere('created_at', 'like', '%'.$search.'%');
    }
}
