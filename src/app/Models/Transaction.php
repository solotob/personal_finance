<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = "transactions";

    protected $fillable = ['name', 'amount', 'category', 'category_id', 'description'];

    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }
}
