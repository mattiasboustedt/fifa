<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stats extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     *
     * Get the user that owns the stats
     *
     */
    public function user()
    {
        return $this->belongsTo('App\Models\Access\User\Users');
    }
}
