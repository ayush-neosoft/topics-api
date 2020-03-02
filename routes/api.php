<?php

Route::group(['middleware' => 'auth:api', 'namespace' => 'Api'], function () {
    Route::apiResource('/posts', 'PostsController');
});
