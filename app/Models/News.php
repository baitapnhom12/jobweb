<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public $timestamps = false;
    protected $fillable = ['name_news','img_news','slug_news','desc_news'];
    protected $table = 'tbl_news';
    protected $primaryKey = 'id_news';
}
