<?PHP
require_once("simple_html_dom.php");  

// $html=file_get_html("http://www.appledaily.com.tw/realtimenews/section/new/");
// $html = str_get_html($html);

// $list=$html->find('.rtddd.slvl>li');
// foreach($list as $val){
  // var_dump($val->find('hi', 0)->innertext);
// }

 $data=file_get_contents("http://twimg.edgesuite.net/appledaily/images/core/applelive.gif");
 $path='C:\xampp\htdocs\php_simple\1.gif';
 $data=file_put_contents($path,$data);

 // $result = $data->find('img');  
// foreach($result as $v) {  
   // echo $v->src;  
// }  


// Find all

// $dom = str_get_html($dom);
// foreach($dom->find('img') as $element)
// echo $element->src . "\n";
// foreach($dom->find('a') as $element)
// echo $element->href . " ".$element->innertext."\n"; //網址及結連名稱
// 運用curl主站目前已可抓文抓圖
// curl 範列
// $ch = curl_init ("http://twimg.edgesuite.net/appledaily/images/core/applelive.gif");
// curl_setopt($ch, CURLOPT_HEADER, 0);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_BINARYTRANSFER,1);
// $rawdata=curl_exec ($ch);
// curl_close ($ch);
// $fp = fopen("php.gif",'w');
// fwrite($fp, $rawdata);
// fclose($fp);








