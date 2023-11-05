<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name_job','quality','price','date','desc','skill','id_location','id','slug_job'];
    protected $table = 'tbl_job';
    protected $primaryKey = 'id_job';
    function location(){
        return $this->belongsTo('App\Models\Location','id_location');
    }
    function user(){
        return $this->belongsTo('App\Models\User','id');
    }
    function customer(){
        return $this->hasMany('App\Models\Customer');
    }
}
