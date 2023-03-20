<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = ['age_group', 'title','description', 'duration', 'rating', 'date','new_releases','updated_at', 'created_at'];
    
    public function genres()
    {
        return $this->belongsTo(Genre::class);
    }
}
