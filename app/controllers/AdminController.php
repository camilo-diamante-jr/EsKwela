<?php

require_once '../core/Controller.php';


class AdminController extends Controller
{

    private $notificationModel;
    private $transactionModel;
    private $sectionModel;
    private $studentModel;


    public function __construct($pdo)
    {
        parent::__construct($pdo);
        $this->notificationModel = $this->loadModel("NotificationModel");
        $this->studentModel = $this->loadModel("StudentModel");
        $this->sectionModel = $this->loadModel('SectionModel');
    }

    public function viewAdminDashboard()
    {
        $this->renderView('/portals/admin/admin-dashboard');
    }

    /* 

    METHODS FOR TO VIEW STUDENT PAGE 
    
    */

    public function viewStudents()
    {

        $students = $this->studentModel->fetchStudents();
        $data = [
            'contentHeaderTitle' => 'Students',
            'breadcrumbActiveItem' => 'Students',
            'students' => $students,
        ];
        $this->renderView('/portals/admin/management/students/student-directory', $data);
    }

    /* 

    METHODS FOR TO VIEW COURSE PAGE 
    
    */
    public function viewSections()
    {
        $sections = $this->sectionModel->fetchAllSections();

        $data = [
            'contentHeaderTitle' => 'Sections',
            'breadcrumbActiveItem' => 'Sections',
            'sections' => $sections,
        ];
        $this->renderView("/portals/admin/management/sections/sections", $data);
    }

    public function caseAllPage()
    {
        $data = [
            'contentHeaderTitle' => 'Cases',
            'breadcrumbActiveItem' => 'All Case',
        ];

        $this->renderView("/portals/admin/management/cases/all-case/all-case", $data);
    }
}
