<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class federal_entity extends Model
{
    use HasFactory;
    protected $table = 'federal_entity';
    protected $fillable = [
        'key',
        'name',
        'code'
    ];
     public function postal()
    {
        return $this->hasMany(postal::class);
    }
}
