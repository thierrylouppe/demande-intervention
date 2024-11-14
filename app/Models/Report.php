<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'manager_id',
        'intervention_request_id',
        'content',
    ];

    public function manager()
    {
        return $this->belongsTo(User::class, 'manager_id');
    }
}
