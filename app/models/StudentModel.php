<?php

class StudentModel
{

    private $pdo;


    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }


    public function fetchStudents()
    {

        $students = [
            [
                'studentID' => 45678,
                'firstName' => "Amanda",
                'middleName' => "Suazon",
                'lastName' => "Tan",
                'courseID' => 2,
            ]
        ];

        return $students;
    }
}
