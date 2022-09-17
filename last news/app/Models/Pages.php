<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'page_name',
        'page_description',
        'page_tags',
        'page_content',
        'page_image',
        'page_status',
        'created_at',
        'updated_at',
    ];
}