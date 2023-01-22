<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CopyTrader extends Model
{
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function trader()
    {
        return $this->belongsTo(Traders::class);
    }
}
