<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';

    public $timestamps = false;

    protected $fillable = ['user_id'];

    protected $casts = ['clp_usd'];

    public function client()
    {
        return $this->belongsTo('App\Client', 'user_id');
    }
}
