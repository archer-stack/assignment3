<?php
class CourseModel extends Model {

public function makeConnection():void {
$dbConnection = new DatabaseConnection();
$this->databaseConnection = $dbConnection->createConnection();
}

public function findAll():array {
$stmt = $this->databaseConnection->prepare("SELECT * FROM courses");
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
return $stmt->fetchAll();
}

public function findRecord(string $id):array {

}

public function findPopular():array {
$sql = "SELECT courses.course_name, courses.course_description, courses.course_image, instructors.instructor_name
FROM courses
INNER JOIN course_instructor ON courses.course_id = course_instructor.course_id
INNER JOIN instructors ON course_instructor.instructor_id = instructors.instructor_id
ORDER BY courses.course_access_count DESC
LIMIT 8";
$stmt = $this->databaseConnection->prepare($sql);
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
return $stmt->fetchAll();
}

public function findRecommended():array {
$sql = "SELECT courses.course_name, courses.course_description, courses.course_image, instructors.instructor_name
FROM courses
INNER JOIN course_instructor ON courses.course_id = course_instructor.course_id
INNER JOIN instructors ON course_instructor.instructor_id = instructors.instructor_id
ORDER BY courses.course_recommendation_count DESC
LIMIT 8";
$stmt = $this->databaseConnection->prepare($sql);
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
return $stmt->fetchAll();
}
}
?>