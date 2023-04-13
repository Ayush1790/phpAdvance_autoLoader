<?php
// task 3
require_once './Library/php-activerecord/ActiveRecord.php';
error_reporting(0);
ActiveRecord\Config::initialize(function ($cfg) {
    $cfg->set_model_directory('Models');
    $cfg->set_connections(array(
        'development' => 'mysql://root:secret@mysql-server/testDb'
    ));
});
$user=User::find(2);
echo $user->name;
