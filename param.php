<?php

$code = htmlspecialchars($_GET['code']);
if(empty($code)){
	die("no code");
}


?>

<!DOCTYPE HTML>
<head><title>by kzxed</title></head>
<body>
    <center>
        <h1> 
            <?php echo $code; ?> 
        </h1>
    </center>
</body>
