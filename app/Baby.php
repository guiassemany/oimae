<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Baby extends Model
{
    protected $fillable = ['name', 'gender', 'weeks'];

    public function responsible()
    {
        return $this->belongsTo(User::class);
    }
}
