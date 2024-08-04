<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'content'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFilters($query, $fields)
    {
        $query->orderBy(
            $fields['sort_field'] ?? 'created_at', 
            $fields['sort_order'] ?? 'desc'
        ); 
    }
}
