<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    
    use HasFactory;
    public function User(){
        return $this->BelongsTo(User::class);
    }
    public function posts(){
        return $this->BelongsTo(posts::class);
    }
}
