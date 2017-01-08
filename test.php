<?php  
// 示範如何讀取HTML元素  
require_once("simple_html_dom.php");  
  
// 產生DOM物件  
$dom = file_get_html('http://www.appledaily.com.tw/realtimenews/section/new/');  
  
// 找出所有網頁連結  
$result = $dom->find('a');  
foreach($result as $v) {  
   echo $v->href;  
}  
  
// 找出所有網頁圖片  
$result = $dom->find('img');  
foreach($result as $v) {  
   echo $v->src;  
}  
  
// 找出所有網頁中所有id=gbar的div標籤  
$result = $dom->find('div#gbar');  
foreach($result as $v) {  
   echo $v->innertext;  
}  
  
// 找出所有網頁中所有calss=gb1的span 標籤  
$result = $dom->find('span.gb1');  
foreach($result as $v) {  
   echo $v->outertext;  
}  
  
// 找出所有網頁中所有align=center的'td標籤  
$result = $dom->find('td[align=center]');  
foreach($result as $v) {  
   echo $v->outertext;  
}  
