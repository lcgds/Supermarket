<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supermarket extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = ['name', 'address', 'cnpj'];

    public function Products() {
        return $this
            ->belongsToMany(Product::class)
            ->withPivot('price')
            ->withTimeStamps();
    }
}
