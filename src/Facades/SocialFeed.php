<?php

namespace JSCustom\SocialFeed\Facades;

use Illuminate\Support\Facades\Facade;

class SocialFeed extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-social-feed';
    }
}
?>