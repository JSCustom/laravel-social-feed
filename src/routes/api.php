<?php
use Illuminate\Support\Facades\Route;
use JSCustom\SocialFeed\Http\Controllers\SocialFeed\SocialFeedController;

Route::group(['prefix' => 'feed'], function() {
    Route::post('', [SocialFeedController::class, 'create']);
    Route::put('{id}', [SocialFeedController::class, 'update']);
    Route::delete('{id}', [SocialFeedController::class, 'delete']);
    Route::get('list[/{params}]', [SocialFeedController::class, 'list']);
    Route::group(['prefix' => 'details'], function() {
        Route::group(['prefix' => '{id}'], function() {
            Route::get('', [SocialFeedController::class, 'details']);
            Route::group(['prefix' => 'comment'], function() {
                Route::get('list[/{params}]', [SocialFeedController::class, 'list']);

            });
        });
        
        Route::get('{id}/comments[/{params}]', [SocialFeedController::class, 'comments']);
    });
});
?>