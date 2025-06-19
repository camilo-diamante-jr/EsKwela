<?php

require_once '../core/Controller.php';

class APIController extends Controller
{
    private $sectionModel;

    public function __construct($pdo)
    {
        define("MODEL", "Model");

        parent::__construct($pdo);
        $this->sectionModel = $this->loadModel("Section" . MODEL);
    }

    public function getSectionById()
    {
        require_once 'API/api-section.php';
    }
}
