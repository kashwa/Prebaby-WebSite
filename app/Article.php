<?php

namespace Prebaby;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // Make relation between Articles and Admins
    public function admin() {
        return $this->belongsTo('Prebaby\User');
    }
}
