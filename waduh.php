<form action="" method="POST">
	<input type="text" name="username" placeholder="username"><br>
	<input type="password" name="password" placeholder="password"><br>
	<input type="submit" name="login" value="login"><br>
</form>
<?php
error_reporting(0);
$url = 'https://prodapi-app.tmoney.co.id/api/sign-in';
$username = input('username');
$password = input('password');


function input($txt) {
	return strip_tags(stripcslashes(htmlentities($_POST[$txt], ENT_QUOTES)));
}
$context = stream_context_create(array(
    'http' => array(
        'method' => 'POST',
        'header' => 'Content-type: application/x-www-form-urlencoded',
        'content' => http_build_query(
            array(
                'terminal' => 'WEB-TMONEY',
                'username' => $username,
                'password' => $password,
            )
        ),
        'timeout' => 60
    )
));

$resp = file_get_contents($url, FALSE, $context);
print_r($resp); 
?>