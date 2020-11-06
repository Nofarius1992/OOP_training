<?php

	class Student {
		public $name;
		public $course;

		public function transferToNextCourse($course)
		{
			
		}

		private function isCourseCorrect($course) {
			if($course < 5) {
				return $this->course = $course +1;
			}
		}
	}

	$student = new Student();
	$student->transferToNextCourse(2);
	echo $student->course;


