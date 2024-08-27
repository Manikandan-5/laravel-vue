<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // Specify the table associated with the model
    protected $table = 'comments';

    // Specify which attributes can be mass assigned
    protected $fillable = [ 'comment', 'fullname','like'];
}
