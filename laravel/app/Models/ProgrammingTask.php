<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgrammingTask extends Model
{
    use HasFactory;

    public function user() {
        $this -> belongsTo(User::class);
    }

    public function section() {
        $this -> belongsTo(ProgrammingSection::class);
    }
}
