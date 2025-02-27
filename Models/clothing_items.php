<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class clothing_items extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'name', 'category', 'description', 'image_url'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
