<?PHP

require_once("simple_html_dom.php");  

// $html=file_get_html("http://www.appledaily.com.tw/realtimenews/section/new/");
// $html = str_get_html($html);

// $list=$html->find('.rtddd.slvl>li');
// foreach($list as $val){
  // var_dump($val->find('hi', 0)->innertext);
// }

$html=file_get_contents("http://www.appledaily.com.tw/realtimenews/article/sports/20170107/1029619/%E8%89%BE%E4%BD%9B%E6%A3%AE%E5%85%AC%E9%96%8B%E7%82%BA%E9%80%99%E5%90%8D%E7%90%83%E5%93%A1%E6%8B%89%E7%A5%A8%E3%80%80%E8%A6%81%E9%80%81%E4%BB%96%E9%80%B2%E6%98%8E%E6%98%9F%E8%B3%BD");

$html = str_get_html($html);

$list=$html->find('#summary',0);
echo $list->plaintext;
// foreach($list as $val){
	// $tmp=$val->find('h1', 0);
	// if($tmp){
		// var_dump($tmp->plaintext);
	// }

// }