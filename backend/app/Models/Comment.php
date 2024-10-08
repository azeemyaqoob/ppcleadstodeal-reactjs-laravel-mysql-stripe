<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    
    protected $fillable= ['is_approved', 'order'];
    public function post()
{
    return $this->belongsTo(Post::class);
}

public function replies()
{
    return $this->hasMany(Reply::class, 'parent_id');
}

public function user()
{
    return $this->belongsTo(User::class);
}
}


