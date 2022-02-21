<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PracticeTask extends Model
{
    use HasFactory;

    public function user() {
        $this -> belongsTo(User::class);
    }

    public function section() {
        $this -> belongsTo(PracticeSection::class);
    }
}
