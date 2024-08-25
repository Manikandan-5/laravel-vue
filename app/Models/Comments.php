<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model // Changed to singular form
{
    use HasFactory;

    protected $table = 'comments'; // Table names are typically in lowercase and plural
    protected $primaryKey = 'id'; // Corrected the property name to `primaryKey`
    protected $fillable = ['comment', 'fullname', 'like']; // Added a missing semicolon
}
