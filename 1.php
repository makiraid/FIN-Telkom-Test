<!DOCTYPE html>
<html>
<head>
	<title>t-money login</title>
</head>
<body>
<form action="" method="POST">
	<input type="text" name="username" placeholder="username"><br>
	<input type="password" name="password" placeholder="password"><br>
	<input type="submit" name="login" value="login"><br>
</form>

<?php
function curl($url, $data = null){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:65.0) Gecko/20100101 Firefox/65.0");
    //curl_setopt($ch, CURLOPT_HEADER, 1);
    if($data !== null):
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    endif;
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    $result = curl_exec($ch);
    return $result;
}
$url = "https://prodapi.app.tmoney.co.id/api/sign-in";
echo curl($url, ["terminal" => "WEB-TMONEY", "userName" => $_POST['username'], "password" => $_POST['password']]);
?>
</body>
</html>