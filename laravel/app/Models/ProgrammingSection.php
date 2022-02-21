<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgrammingSection extends Model
{
    use HasFactory;

    public function user() {
        $this -> belongsTo(User::class);
    }
}
