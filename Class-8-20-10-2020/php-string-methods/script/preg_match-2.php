
<?php
$pswd = "abcdefdddddd";
if (!preg_match("/^[a-zA-Z]{8,10}$/", $pswd))
{
    echo "Invalid password!";
}
else{
    echo "Valid password!";
}
?>


<hr>
<?php
// The "i" after the pattern delimiter indicates a case-insensitive search
$text ="PHP is the web scripting language of choice.";
if (preg_match("/php/i",$text)) {
    echo "A match was found.";
} else {
    echo "A match was not found.";
}
?>

