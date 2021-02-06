<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hsp_tbl_cmslog extends Model
{
    use HasFactory;
    protected $dateFormat = 'Y-m-d';
    protected $timeFormat=('hh.mm.ss');
    public $timestamps=false;
}
