<?php
    include 'functions.php';
Route::group(['prefix' => 'install', 'as' => 'LaravelInstaller::', 'namespace' => 'Magh25\LaravelInstaller\Controllers', 'middleware' => ['web', 'install']], function()
{
    Route::get('/', [
            'as' => 'welcome',
            'uses' => 'WelcomeController@welcome'
        ]);

        Route::get('environment', [
            'as' => 'environment',
            'uses' => 'EnvironmentController@environment'
        ]);

        Route::get('environment/save', [
            'as' => 'environmentSave',
            'uses' => 'EnvironmentController@save'
        ]);

        Route::get('requirements', [
            'as' => 'requirements',
            'uses' => 'RequirementsController@requirements'
        ]);

        Route::get('permissions', [
            'as' => 'permissions',
            'uses' => 'PermissionsController@permissions'
        ]);

        Route::get('database', [
            'as' => 'database',
            'uses' => 'DatabaseController@database'
        ]);

        Route::get('final', [
            'as' => 'final',
            'uses' => 'FinalController@finish'
        ]);

});
