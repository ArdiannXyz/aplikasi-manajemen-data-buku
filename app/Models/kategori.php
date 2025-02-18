<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class kategori extends Model
{
    //
    // protected $table = 'kategori';
    protected $quarded = [];

    public function bukus(): HasMany{
        return $this->hasMany(Buku::class);
    }

}
