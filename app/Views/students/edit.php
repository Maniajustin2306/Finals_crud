<?php


$this->extend('layout/main');
$this->section('body');

?>


<h1>Add Student</h1>
<form action="/students/store" method="POST" enctype="multipart/form-data">
<div class="mb-3">
  <label for="studentName" class="form-label">Student Name</label>
  <input type="text" class="form-control" name="studentName" value="<?= $student['student_name']; ?>">
</div>
<div class="mb-3">
<label for="studentId" class="form-label">Student Number</label>
        <input type="text" class="form-control" name="studentId" value="<?= $student['student_id']; ?>" readonly>
</div>


<div class="mb-3">
  <label for="studentSection" class="form-label">Student Section</label>
  <input type="text" class="form-control" name="studentSection" value="<?= $student['student_section']; ?>">
</div>

<div class="mb-3">
  <label for="studentCourse" class="form-label">Student course</label>
  <input type="text" class="form-control" name="studentCourse" value="<?= $student['student_course']; ?>">
</div>
<div class="mb-3">
  <label for="studentBatch" class="form-label">Student Batch</label>
  <input type="text" class="form-control" name="studentBatch" value="<?= $student['Student_grade_level']; ?>">
</div>
<div class="mb-3">
  <label for="studentLevel" class="form-label">Student Grade Level</label>
  <input type="text" class="form-control" name="studentLevel" value="<?= $student['student_profile']; ?>">
</div>
<div class="mb-3">
  <label for="studentProfile" class="form-label">Student Profile</label>
  <input type="file" class="form-control" name="studentProfile"value="<?= $student['student_name']; ?>">
</div>
<button type="Submit"  class="btn btn-success"> Submit </button>
</form>









<?php $this->endSection(); ?>