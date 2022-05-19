<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class postal extends Model
{
    use HasFactory;
    protected $table = 'postal';
    protected $fillable = [
        'zip_code',
        'locality',
        'settlements_id',
        'federal_entity_id'
    ];
     public function municipality()
    {
        return $this->hasMany(municipality::class);
    }
    public function federal_entity()
    {
        return $this->belongsTo(federal_entity::class);
    }
    public function settlements()
    {
        return $this->belongsTo(settlements::class);
    }
}
