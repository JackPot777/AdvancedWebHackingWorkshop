<?php

function curl($target){
	$result=shell_exec('curl -vvv -L -sD - -o /dev/null '.$target);
	echo $result;
}

if (isset($_GET['curl']) && !empty($_GET['curl']) &&!preg_match('/\s+/',$_GET['curl'])){
	curl($_GET['curl']);
}
else{
	echo '
<!DOCTYPE html>
<html>
<body>
<form>
  Curl it:<br>
  <input type="text" name="curl"><br>
  <input type="submit" value="GO!">
</form> 
</body>
</html>';

}