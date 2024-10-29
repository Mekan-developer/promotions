<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'phone', 'address','brands'];

    public function promotions()
    {
        return $this->hasMany(Promotion::class);
    }
}
