<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class url_schema extends Model
{
    use HasFactory;
    protected $table = "url_schema";
    protected $fillable = ['source_link', 'end_link', 'redirects'];
}
