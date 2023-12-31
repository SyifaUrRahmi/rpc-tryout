<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $guarded = ['id'];
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function subtest() {
        return $this->belongsTo(SubTest::class, 'id_subtest');
    }

    public function tryout() {
        return $this->belongsTo(Tryout::class);
    }

}
