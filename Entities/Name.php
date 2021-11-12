<?php

namespace Modules\Name\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Name extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'given_name',
        'family_name',
        'nickname',
    ];

    protected static function newFactory()
    {
        return \Modules\Name\Database\factories\NameFactory::new();
    }
}
