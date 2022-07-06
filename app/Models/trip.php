<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trip extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'age',
        'type',
        'price',
        'start_date',
        'expiry_date',
        'start_trip',
        'end_trip',
        'rest',
        'total',
        'image',
        'reiteration',
        'provinces',
        'coutinent',
    ];

public function user()
{
  return $this->belongsTo(User::class);
  
}




}