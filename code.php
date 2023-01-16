flush();
ob_start();
ob_implicit_flush(1);
 ini_set( "expose_php","Off" );
ini_set( "max_execution_time","25" );
ini_set( "max_input_time","25" );
ini_set( "memory_limit","15M" );
ini_set( "file_uploads","Off" );
ini_set( "post_max_size","10k" );
ignore_user_abort(true);
date_default_timezone_set('Asia/Tehran')
