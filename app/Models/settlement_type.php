<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class settlement_type extends Model
{
    use HasFactory;
    protected $table = 'settlement_type';
    protected $fillable = [
        'name'
    ];
     public function settlements()
    {
        return $this->hasMany(settlements::class);
    }
}
