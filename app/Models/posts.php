<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class posts extends Model
{
    use HasFactory;
public function User(){
    return $this->BelongsTo(User::class);
}
public function comment(){
    return $this->hasMany(comments::class);
}
}
