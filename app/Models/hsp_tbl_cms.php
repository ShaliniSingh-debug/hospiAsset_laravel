<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hsp_tbl_cms extends Model
{
    use HasFactory;
    protected $dateFormat = 'Y-m-d';
    public $timestamps=false;
    protected $table="hsp_tbl_cms";
}
