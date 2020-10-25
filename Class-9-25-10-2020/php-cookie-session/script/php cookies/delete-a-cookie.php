<?php
// Deleting a cookie
setcookie("username", "", time()-3600);
echo "Your cookie is deleted";
?>