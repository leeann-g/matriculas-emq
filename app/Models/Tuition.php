<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tuition extends Model
{
    protected $fillable = [
        'date',
        'code',
        'nuid',
        'meter_number',
        'rip_status'
    ];
    public function rip(){
        return $this->hasOne(Rip::class);
    }
}
