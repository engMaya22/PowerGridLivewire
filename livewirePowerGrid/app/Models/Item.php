<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    const NOT_COMPLETED = 0;
    const COMPLETED = 1;
    protected $fillable = [
        'status',
        'title',
        'description',
    ];
    public  function getTitle(){
        return $this->title;
    }
}
