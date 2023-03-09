<?php

namespace App\Models;

use App\Enums\SignatureStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Symfony\Component\Console\SignalRegistry\SignalRegistry;

class Signature extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'client_id',
        'plan_id',
        'status',
    ];

    protected $casts = [
        'status' => SignatureStatus::class
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function signaturehistories()
    {
        return $this->hasMany(SignalRegistry::class);
    }
}
