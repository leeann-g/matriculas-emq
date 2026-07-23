<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rip extends Model
{
    protected $fillable = [
        'tuition_id',
        'payment',
        'amount',
        'payment_date'
    ];
    public function tution(){
        $this->belongsTo(Tuition::class);
    }
}
