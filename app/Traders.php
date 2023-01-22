<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traders extends Model
{
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function copytrader()
    {
        return $this->hasMany(CopyTrader::class, 'trader_id');
    }
}
