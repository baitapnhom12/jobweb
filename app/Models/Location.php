<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name_location','slug_location'];
    protected $table = 'tbl_location';
    protected $primaryKey = 'id_location';
    function job(){
        return $this->hasMany('App\Models\Job');
    }
}
