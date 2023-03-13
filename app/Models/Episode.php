<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;
    protected $fillable = ['title','description', 'duration', 'rating', 'date','number_of_episodes', 'updated_at', 'created_at'];

    public function shows()
    {
        return $this->belongsTo(Shows::class);
    }

}
