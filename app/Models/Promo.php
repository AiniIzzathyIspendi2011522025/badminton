<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    protected $table = "promo";
    protected $guarded = ["id"];
    use HasFactory;

    public function Rent(){
        return $this->hasMany(Rent::class);
    }
}
