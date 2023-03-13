<?php

namespace App\Models;

use App\Models\Signature;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Plan extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'short_description',
        'price',
        'cod',
    ];

    public function signatures()
    {
        return $this->hasMany(Signature::class);
    }
}
