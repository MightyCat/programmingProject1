<?php

namespace ShareMarketGame;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
	public $incrementing=false;
    protected $fillable=['nickname','code','amount','value','dateTime','purchase'];

    public $timestamps = false;
}
