<?php



$this->router->addRoute('/admin/dashboard', ['AdminController', 'viewAdminDashboard']);
$this->router->addRoute('/admin/students', ['AdminController', 'viewStudents']);
$this->router->addRoute('/admin/sections', ['AdminController', 'viewSections']);
$this->router->addRoute('/admin/cases/all', ['AdminController', 'caseAllPage']);
