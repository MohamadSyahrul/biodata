<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = "biodata";
    protected $guarded = [];
    public $timestamps = true;
}
