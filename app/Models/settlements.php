<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class settlements extends Model
{
    use HasFactory;
    protected $table = 'settlements';
    protected $fillable = [
        'key',
        'name',
        'zone_type',
        'settlement_type_id'
    ];
     public function settlement_type()
    {
        return $this->hasMany(settlement_type::class);
    }
}
