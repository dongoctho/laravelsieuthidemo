<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Producer;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'code',
        'name',
        'description',
        'insurance',
        'amount',
        'producer_id',
        'unit',
        'price',
        'category_id',
        'file_upload'

    ];
    public function producer(){
        return $this->belongsTo(Producer::class, 'producer_id');
    }
    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

}
