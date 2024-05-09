<?php
//Here, we are not setting the page GET parameter deliberately, so that the user gets a bad_request error
header("Location:../../../../index.php", true, 301);
exit;
