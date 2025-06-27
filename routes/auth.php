<?php

$this->router->addRoute('/login', ['AuthController', 'viewLogin']);
$this->router->addRoute('/auth/login', ['AuthController', 'loginAuthentication']);
