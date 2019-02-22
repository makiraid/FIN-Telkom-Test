<form action="" method="POST">
	<input type="text" name="username" placeholder="username"><br>
	<input type="password" name="password" placeholder="password"><br>
	<input type="submit" name="login" value="login"><br>
</form>

<?php 
function input($txt) {
	return strip_tags(stripcslashes(htmlentities($_POST[$txt], ENT_QUOTES)));
}
if (isset($_POST['login'])):
	$url = 'https://prodapi-app.tmoney.co.id/api/sign-in';
	$username = input('username');
	$password = input('password');
	$data = array(
		'userName' => $username, 
		'password' => $password, 
		'terminal' => 'WEB-TMONEY');

	$options = array(
	    'http' => array(
	        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
	        'method'  => 'POST',
	        'content' => http_build_query($data)
	    )
	);

	$context  = stream_context_create($options);
	$result = file_get_contents($url, false, $context);
	if ($result === FALSE) {
		echo "error";
	}
	print_r($result);
?>
<?php endif ?>
