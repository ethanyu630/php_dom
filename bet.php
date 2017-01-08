<?php
require_once("simple_html_dom.php");
$html=file_get_contents("http://tb5688.com/");
$html=str_get_html($html);

 echo   $html
?>