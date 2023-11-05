<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name_customer','email_customer','phone_customer','file_customer','id_job'];
    protected $table = 'tbl_customer';
    protected $primaryKey = 'id_customer';
    function job(){
        return $this->belongsTo('App\Models\Job','id_job');
    }
}
