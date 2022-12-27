<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $fillable = ['state', 'banner'];

    public function states()
    {
        return $this->hasMany(State::class, 'state_id');
    }
}
