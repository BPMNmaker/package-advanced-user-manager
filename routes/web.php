<?php

use ProcessMaker\Package\AdvancedUserManager\Http\Controllers\AdvancedUserManagerController;

Route::group(['middleware' => ['auth']], function () {
    Route::get('admin/advanced-user-manager', [AdvancedUserManagerController::class, 'index'])->name('package.skeleton.index');
    Route::get('advanced-user-manager', [AdvancedUserManagerController::class, 'index'])->name('package.skeleton.tab.index');
});
