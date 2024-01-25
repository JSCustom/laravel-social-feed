<?php

namespace JSCustom\SocialFeed\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function __construct(
        \JSCustom\SocialFeed\Services\SocialFeedService $SocialFeedService,
        \JSCustom\SocialFeed\Services\CommentService $CommentService
    ) {
        $this->_socialFeedService = $SocialFeedService;
        $this->_commentService = $CommentService;
    }
}