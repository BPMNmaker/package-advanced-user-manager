<?php

use ProcessMaker\Package\AdvancedUserManager\Http\Controllers\AdvancedUserManagerController;

Route::group(['middleware' => ['auth:api', 'bindings']], function () {
    Route::get('admin/advanced-user-manager/fetch', [AdvancedUserManagerController::class, 'fetch'])->name('package.skeleton.fetch');
    Route::apiResource('admin/advanced-user-manager', AdvancedUserManagerController::class);
});
