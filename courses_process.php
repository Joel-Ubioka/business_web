<?php
$course_cost = $_GET['coursesCost'];
$course_cost_obj = json_decode($course_cost);

$course_str = json_encode($course_cost);

echo $course_str;