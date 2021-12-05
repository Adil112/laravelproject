<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
    use HasFactory;
    public function requests(): \Illuminate\Database\Eloquent\Relations\hasMany
    {
        return $this->hasMany(Requests::class, 'IdPay', 'IdPay');
    }
}
