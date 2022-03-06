<?php
$text=<<< TEXT
WSB - Wyzsza Szkola Bankowa<br>
TEXT;
echo "$text<br>";
echo nl2br($text);
$Lorem ="ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

echo $lorem;
echo wordwrap($Lorem , 40, "<br>");
echo wordwrap($Lorem , 40, "<hr>");
ob_clean();
$name1="Anna";
$name2=" Anna ";
echo " ilosc znakow w zmiennej \$name1: ".strlen($name1)."<br>";
echo " ilosc znakow w zmiennej \$name2: ".strlen($name2)."<br>";
echo strlen(ltrim($name2)); //5
echo strlen(rtrim($name2)); //6
echo strlen(trim($name2))."<br>";//4
$name="janusz";
echo strtolower($name);
echo strtoupper($name);
$text="janUsZ koWAlski";
echo ucfirst($text);
echo ucwords($text);

echo ucwords (strtolower($text));



 ?>
