<?php
/**
 * Created by PhpStorm.
 * User: moof
 * Date: 7/9/17
 * Time: 1:22 AM
 */


$time = time();

$timeOnBirth = mktime(23, 25, 0, 8, 15, 1995);

$secondsPassed = $time - $timeOnBirth;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Time</title>
</head>
<body>

<p><?= $secondsPassed ?> </p>
</body>
</html>
