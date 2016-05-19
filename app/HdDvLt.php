<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HdDvLt extends Model
{
    protected $table = 'hddvlt';
    protected $filltable = [
        'id',
        'mota',
        'thaotac',
        'hienthi',
        'stt',
        'plcn'
    ];
}
