<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projectstbl extends Model
{
    use HasFactory;

    protected $table        = "projectstbl";
    protected $primaryKey   = "projectid";
    protected $fillable     = [
        "projecttitle","projectdesc",
        "sector","projectstatus",
        "projectdonorid","projectdonortext",
        "projectlocationid","projectlocationtext",
        "created_at","updated_at"
    ];
}
