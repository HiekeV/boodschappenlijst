<?php

require 'core/bootstrap.php';



require 'functions.php';


require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());