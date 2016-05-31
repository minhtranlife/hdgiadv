<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HdDvVtKhac extends Model
{
    public $timestamps = false;
    protected $table = 'hddvvtkhac';
    protected $fillable = [
        'id',
        'mota',
        'thaotac',
        'hienthi',
        'stt',
        'plcn'
    ];
}
