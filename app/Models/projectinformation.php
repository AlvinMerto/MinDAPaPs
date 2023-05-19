<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projectinformation extends Model
{
    use HasFactory;

    protected $table        = "projectinformation";
    protected $primaryKey   = "projectinfoid";
    protected $fillable     = [
        "projectid","amount","currency",
        "typeofamount","proposedprojectcost",
        "recentupdate","websitelink",
        "websitedatabase","created_at","updated_at"
    ];
}
