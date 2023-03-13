<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shows extends Model
{
    use HasFactory;
    protected $fillable = ['age_group', 'title','description', 'duration', 'rating', 'date','updated_at', 'created_at'];

    public function episodes()
    {
        return $this->belongsTo(Episode::class);
    }

}
