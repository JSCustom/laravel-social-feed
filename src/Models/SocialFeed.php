<?php

namespace JSCustom\LaravelSocialFeed\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class SocialFeed extends Model
{
    use HasFactory;

    protected $table = 'social_feeds';

    protected $fillable = [
        'user_id',
        'title',
        'content',
        'attachment'
    ];

    protected $casts = [
        'user_id' => 'integer',
        'title' => 'string',
        'content' => 'string',
        'attachment' => 'string'
    ];

    protected $guarded = [];


}
