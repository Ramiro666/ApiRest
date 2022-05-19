<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class municipality extends Model
{
    use HasFactory;
    protected $table = 'municipality';
    protected $fillable = [
        'key',
        'name',
        'postal_id'
    ];
     public function postal()
    {
        return $this->belongsTo(postal::class);
    }
}
