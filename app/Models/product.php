<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class product extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = ['name', 'EAN'];

    public function Supermarkets() {
        return $this
            ->belongsToMany(Supermarket::class)
            ->withPivot('price')
            ->withTimeStamps();
    }
}
