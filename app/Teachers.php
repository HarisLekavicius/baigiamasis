<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    protected $table = 'teachers';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillabel = ['identity_code', 'role', 'name', 'last_name'];
}