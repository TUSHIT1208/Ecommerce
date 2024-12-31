<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productimage extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $timestamps = false;

    public function product(){
        return $this->belongsTo(product::class,'pid');   
    }
}
