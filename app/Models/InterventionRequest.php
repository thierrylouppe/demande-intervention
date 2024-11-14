<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InterventionRequest extends Model
{
    //
    protected $fillable = [
        'user_id',
        'technician_id',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function technician()
    {
        return $this->belongsTo(User::class, 'technician_id');
    }

    public function reports()
    {
        return $this->hasMany(Report::class, 'intervention_request_id');
    }
}
