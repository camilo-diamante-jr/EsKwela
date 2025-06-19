<?php

$this->router->addRoute('/', ['AuthController', 'loginAuthentication']);
$this->router->addRoute('/auth/login', ['AuthController', 'loginAuthentication']);
