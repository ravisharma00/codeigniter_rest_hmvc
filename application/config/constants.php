<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');


/* End of file constants.php */
/* Location: ./application/config/constants.php */

define('TABLE_PREFIX', 'tbl_');
define('CATEGORY_TABLE',TABLE_PREFIX.'cat');
define('STORY_TABLE',TABLE_PREFIX.'story');
define('IMAGE_TABLE',TABLE_PREFIX.'image');
define('USER_TABLE',TABLE_PREFIX.'user');
define('RELATION_TABLE',TABLE_PREFIX.'relation');
define('EMAIL_TABLE',TABLE_PREFIX.'email');
define('COUNTER_TABLE',TABLE_PREFIX.'counter');
define('POLL_QUESTION_TABLE','polls_question');
define('POLL_OPTION_TABLE','polls_option');
define('QUIZ_QUESTION_TABLE','polls_question');
define('QUIZ_OPTION_TABLE','polls_option');
define('QUIZ_RESULT_TABLE','quiz_results');
define('USER_ROLES_TABLE','auth_user_roles');
define('ROLES_TABLE','auth_roles');
define('GEO_TABLE','geo_location');
define('NEWS_LETTER_TABLE',TABLE_PREFIX.'newsletter');
define('STORY_VERSION_TABLE',TABLE_PREFIX.'story_version');
define('STORY_MAIN_TABLE',TABLE_PREFIX.'story_bkp');
define('IMAGE_VERSION_TABLE',TABLE_PREFIX.'image_version');
define('STORY_LOCATION_VERSION','story_location_version');
define('STORY_LOCATION','story_location');