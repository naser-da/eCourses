<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'n_weeks',
        'thumbnail',
        'activated'
    ];

    public function user()
    {
        return $this->belongsTo(User::Class);
    }
}
