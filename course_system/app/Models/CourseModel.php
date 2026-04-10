<?php
    namespace App\Models;

    use CodeIgniter\Model;

class CourseModel extends Model{
    protected $table = 'courses';
    protected $primaryKey = 'id';
    protected $allowedFields = ['course_name', 'course_code', 'units','instructor', 'credits'];
    protected $useTimestamps = true;

    protected $createdField = 'created_at';
    protected $updatedField = '';
    protected $deletedField = '';

    public function searchCourses($keyword){
        return $this->like('course_name', $keyword)
                    ->orLike('course_code', $keyword)
                    ->orLike('instructor', $keyword)
                    ->findAll();
    }
}