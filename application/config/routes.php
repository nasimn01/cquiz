<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'DashboardCtrl';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['dashboard'] = 'DashboardCtrl';
$route['stu_dashboard'] = 'DashboardCtrl/stu_index';
$route['congratspage'] = 'StuQuestionCtrl/congratspage';


/* user profile */
$route['profile']['get'] = 'Profile/index';
$route['profile']['post'] = 'Profile/store';

$route['change_password']['get'] = 'Profile/cp';
$route['change_password']['post'] = 'Profile/cp_store';

/* user route */
$route['users'] = 'UserCtrl/index';
$route['user'] = 'UserCtrl/auth_retrive';
$route['users/add']['get'] = 'UserCtrl/create';
$route['users/store']['post'] = 'UserCtrl/stu_create';
$route['users/edit/(:num)'] = 'UserCtrl/update/$1';
$route['users/delete/(:num)'] = 'UserCtrl/destroy/$1';

/*question route*/ 
$route['queslist'] = 'QuestionCtrl/question_retrive';
$route['ques'] = 'StuReadQuestion/question_retrive';
$route['ques/add'] = 'QuestionCtrl/ques_create';

/*result*/ 
$route['results'] = 'QuestionCtrl/result_retrive';
$route['results_details'] = 'QuestionCtrl/result_details_retrive';
$route['result'] = 'StuQuestionCtrl/result_retrive';
$route['result_details/(:num)'] = 'StuQuestionCtrl/result_details_retrive/$1';






/* Auth route */
$route['register']['get'] = 'AuthCtrl/register';
$route['register']['post'] = 'AuthCtrl/store';

$route['login']['get'] = 'AuthCtrl/login';
$route['login']['post'] = 'AuthCtrl/login_check';

$route['logout']['get'] = 'AuthCtrl/logout';



/* student route */ 
$route['stu_register']['get'] = 'AuthCtrl/stu_create';
$route['stu_register']['post'] = 'AuthCtrl/stu_create';
$route['studashboard'] = 'StudentDashboardCtrl';
$route['stu_change_password']['get'] = 'StuProfile/cp';
$route['stu_change_password']['post'] = 'StuProfile/cp_store';

/* user profile */
$route['sprofile']['get'] = 'StuProfile/index';
$route['sprofile']['post'] = 'StuProfile/store';

$route['change_password']['get'] = 'Profile/cp';
$route['change_password']['post'] = 'Profile/cp_store';

$route['qchoose'] = 'StuQuestionCtrl/subject_choose';
$route['exam_start'] = 'StuQuestionCtrl/exam_start';
$route['exam_submit'] = 'StuQuestionCtrl/exam_submit';










/* block magic route */
$route['(.+)']="Error_page/page_missing";