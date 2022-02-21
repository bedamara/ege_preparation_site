<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TheorySection extends Model
{
    use HasFactory;

    public function user() {
        $this -> belongsTo(User::class);
    }

    public function article() {
        $this -> hasMany(TheoryArticle::class);
    }
}
