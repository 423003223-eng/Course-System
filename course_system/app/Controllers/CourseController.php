<?php

namespace App\Controllers;
use App\Models\CourseModel;

class CourseController extends BaseController{
    private CourseModel $courses;

    public function __construct(){
        $this->courses = new CourseModel();
    }

    // Function for displaying view with course list
    public function index(){
        $searchKeyword = $this->request->getGet('keyword');
        $filteredCourses = $searchKeyword ? $this->courses->searchCourses($searchKeyword) : $this->courses->orderBy('id', 'ASC')->findAll();

        $data = [
            'searchKeyword'=> $searchKeyword,
            'courses' => $filteredCourses
        ];
        return view('courses/index', $data);
    }

    public function create(){
        return view('courses/create');
    }

    public function store(){
        $courseName = $this->request->getPost('course_name');
        $courseCode = $this->request->getPost('course_code');
        $units = $this->request->getPost('units');
        $instructor = $this->request->getPost('instructor');

        $validation = \Config\Services::validation();

        $rules = [
        'course_name' => 'required',
        'course_code' => 'required',
        'units' => 'required|numeric',
        'instructor' => 'required'
        ];

        if (!$this->validate($rules)) {
        return view('courses/create', [
            'errors' => $this->validator->getErrors()
        ]);
        }

        $this->courses->insert([
            'course_name' => $courseName,
            'course_code' => $courseCode,
            'units' => $units,
            'instructor' => $instructor,
        ]);

        return redirect()->to('/courses');
    }

    public function delete($id){
        $this->courses->delete($id);
        return redirect()->to('/courses');
    }

    public function edit($id){
        $data['course'] = $this->courses->find($id);

        if (!$data['course']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Course not found');
        }

        return view('courses/edit', $data);
    }
    public function update($id){  
        $courseName = $this->request->getPost('course_name');
        $courseCode = $this->request->getPost('course_code');
        $units = $this->request->getPost('units');
        $instructor = $this->request->getPost('instructor');

        $validation = \Config\Services::validation();

        $rules = [
            'course_name' => 'required',
            'course_code' => 'required',
            'units' => 'required|numeric',
            'instructor' => 'required'
        ];

        if (!$this->validate($rules)) {
            $data['course'] = $this->courses->find($id);
            $data['errors'] = $this->validator->getErrors();
            return view('courses/edit', $data);
        }

        $this->courses->update($id, [
            'course_name' => $courseName,
            'course_code' => $courseCode,
            'units' => $units,
            'instructor' => $instructor,
        ]);

        return redirect()->to('/courses');
    }
}