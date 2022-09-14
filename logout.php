<?php
session_start();
session_destroy();
header("location:index.php?tours=".sha1('GoVegan'));
?>