<?php

//TODO: Routing
//Route::get('/test2/', array('use' => 'Main@tests', 'auth'=>false));

$routes = array(
    '/login/'  		 => array('use' => 'User@login', 'auth'=>true),
    '/logout/'  	 => array('use' => 'User@logout', 'auth'=>true),
    '/'		   		 => array('use' => 'RemoteControl@displayIndex', 'auth'=>true),
    '/vol_plus/'     => array('use' => 'RemoteControl@doControlVolPlus', 'auth'=>true),
    '/vol_minus/'    => array('use' => 'RemoteControl@doControlVolMinus', 'auth'=>true),
    '/gibernation/'  => array('use' => 'RemoteControl@doControlGibernation', 'auth'=>true),
    '/shutdown/'     => array('use' => 'RemoteControl@doControlShutdown', 'auth'=>true),
    '/mute/'         => array('use' => 'RemoteControl@doControlMute', 'auth'=>true),
    '/api/login/'    => array('use' => 'Main@apiLogin', 'auth'=>false),
    '/send/command/' => array('use' => 'RemoteControl@doSendCommand', 'auth'=>true)
);

return $routes;