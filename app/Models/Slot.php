<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'section_id'];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
