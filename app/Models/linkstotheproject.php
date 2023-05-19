<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class linkstotheproject extends Model
{
    use HasFactory;

    protected $table        = "linkstotheproject";
    protected $primaryKey   = "linkid";
    protected $fillable     = [
        "odaid","thelink"
    ];
}
