<?php

namespace App\Models;

use Database\Factories\ActorFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acteur extends Model
{
    use HasFactory;
    protected static function newFactory()
    {
        return ActorFactory::new();
    }
}
