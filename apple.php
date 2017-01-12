<?PHP

                
		function connect(){     //連結資料庫
			$link = mysql_connect("localhost", "root", "");
			if(!$link) die("建立資料連接失敗");
			mysql_query("SET NAMES UTF8");
			return $link;
		}
		function execute_sql($link,$database,$sql){   //尋找db和執行sql
			mysql_select_db($database,$link) or die("開啟資料庫失敗".mysql_error($link));			
			$resulte= mysql_query($sql,$link);			
			return $resulte;						
		}
			
		        

require_once("simple_html_dom.php");  

// $html=file_get_html("http://www.appledaily.com.tw/realtimenews/section/new/");
// $html = str_get_html($html);

// $list=$html->find('.rtddd.slvl>li');
// foreach($list as $val){
  // var_dump($val->find('hi', 0)->innertext);
// }

$html=file_get_contents("http://www.appledaily.com.tw/realtimenews/section/new/");

$html = str_get_html($html);
	/*將資料寫入資料庫
$list=$html->find('.rlby',0)->find("ul",0)->find("li");
$result=[];
$link=connect();
foreach($list as $val){
	$tmp=$val->find('h1', 0);
	

	if($tmp){
		$title=$tmp->plaintext;
	}
	$href=$val->find('a', 0)->href;
	$htm= file_get_contents("http://www.appledaily.com.tw"."$href");
	$htm = str_get_html($htm);
	$content=$htm->find('#summary',0)->plaintext;
    $sql="INSERT INTO `simpledom`(`id`, `title`, `href`, `content`) VALUES ('','$title','$href','$content')";
	$resulte=execute_sql($link,"dom",$sql);
	$result[]=compact(["title","href","content"]);
	}
	 var_dump($result);

	*/
	$result = $html->find('img');
    foreach($result as $v) {echo $v->src . '<br>';} 









