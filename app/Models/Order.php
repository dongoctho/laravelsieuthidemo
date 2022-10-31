<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Client;
use App\Models\Staff;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [

        'name',
        'surname',
        'country',
        'city',
        'district',
        'address',
        'phone',
        'email',
        'description',
        'voucher',
        'product_name',
        'payment',
        'amount',
        'price',
        'total'

    ];

    // public function product(){
    //     return $this->belongsTo(Product::class, 'product_id');
    // }
    // public function staff(){
    //     return $this->belongsTo(Client::class, 'client_id');
    // }
    // public function client(){
    //     return $this->belongsTo(Staff::class, 'staff_id');
    // }
}
