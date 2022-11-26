<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = ['city','state_id'];

    public function city(){
        return $this->hasMany(City::class, 'state_id');
    }
}
