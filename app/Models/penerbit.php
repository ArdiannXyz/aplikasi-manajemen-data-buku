<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class penerbit extends Model
{
    //
    protected $quarded = [];

    public function bukus(): HasMany{
        return $this->hasMany(Buku::class);
    }
}
