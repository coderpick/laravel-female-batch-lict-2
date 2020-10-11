
<h1>Welcome to <?php echo "PeopleNtech"; ?> </h1>
<hr>
<?php
$x = 20;
$y = 30;
$z = $x+$y;
echo $z;
echo "<br/>";
$firstName = "hafizur";
$lastName  = "Rahman";
echo "User name is $firstName.$lastName";
echo "<br/>";
//single line comment;
/*
    multiline comments
    multiline comments
    multiline comments
*/
?>
<hr>
<?php 
    $color ="blue";
    echo "The sky color is $color <br/>";
    echo "The sky color is $Color <br/>";
    echo "The sky color is $COLOR <br/>";
?>
<h3>php constant</h3>
<?php 
  define('SITE_URL','www.peoplentech.com');
  echo "Thanks for visting to <a href=''>".SITE_URL."</a>";
  define("SERVER_NAME",'localhost');
  define("USERNAME",'root');
  define("PASSWORD",'');
  define("DB_NAME",'');
?>
<h3>PHP Superglobal variable</h3>
<?php
echo $_SERVER['SERVER_NAME'];
?>
<?php
$indicesServer = array('PHP_SELF',
'argv',
'argc',
'GATEWAY_INTERFACE',
'SERVER_ADDR',
'SERVER_NAME',
'SERVER_SOFTWARE',
'SERVER_PROTOCOL',
'REQUEST_METHOD',
'REQUEST_TIME',
'REQUEST_TIME_FLOAT',
'QUERY_STRING',
'DOCUMENT_ROOT',
'HTTP_ACCEPT',
'HTTP_ACCEPT_CHARSET',
'HTTP_ACCEPT_ENCODING',
'HTTP_ACCEPT_LANGUAGE',
'HTTP_CONNECTION',
'HTTP_HOST',
'HTTP_REFERER',
'HTTP_USER_AGENT',
'HTTPS',
'REMOTE_ADDR',
'REMOTE_HOST',
'REMOTE_PORT',
'REMOTE_USER',
'REDIRECT_REMOTE_USER',
'SCRIPT_FILENAME',
'SERVER_ADMIN',
'SERVER_PORT',
'SERVER_SIGNATURE',
'PATH_TRANSLATED',
'SCRIPT_NAME',
'REQUEST_URI',
'PHP_AUTH_DIGEST',
'PHP_AUTH_USER',
'PHP_AUTH_PW',
'AUTH_TYPE',
'PATH_INFO',
'ORIG_PATH_INFO') ;

echo '<table cellpadding="10">' ;
foreach ($indicesServer as $arg) {
    if (isset($_SERVER[$arg])) {
        echo '<tr><td>'.$arg.'</td><td>' . $_SERVER[$arg] . '</td></tr>' ;
    }
    else {
        echo '<tr><td>'.$arg.'</td><td>-</td></tr>' ;
    }
}
echo '</table>' ;
?>
