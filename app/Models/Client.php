<?php

namespace App\Models;

use App\Models\User;
use App\Models\Signature;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'document',
        'birthdate'
    ];

    protected $casts = [
        'birthdate' => 'datetime'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function signatures()
    {
        return $this->hasMany(Signature::class);
    }
}
