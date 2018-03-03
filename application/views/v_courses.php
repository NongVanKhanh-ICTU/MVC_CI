<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class V_Courses
{
	public function index($query_poster, $paginator, $category, $fee)
	{
		include 'res/courses.php';
	}
}