<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class tepdinhkem extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='tepdinhkem';
    public function baiGiang()
    {
        return $this->belongsTo('App\Models\baigiang');
    }
}
