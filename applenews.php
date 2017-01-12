<?PHP
    
	header("content-type:text/html;charset=utf8");
	$img=0;
	$dsn = "mysql:host=localhost;dbname=dom";
	$dbh = new PDO($dsn,"root","");
	$dbh->query("SET NAMES UTF8");
	function insert($dbh,$sql){
		$resulte = $dbh->query($sql);  	     
	}
	
	require_once("simple_html_dom.php");  
	
	$html=file_get_contents("http://www.appledaily.com.tw/realtimenews/section/animal/");
	$html = str_get_html($html);
	$list=$html->find('.rlby',0)->find("ul",0)->find("li");
	
	foreach($list as $val){
		
		$tmp=$val->find('h1', 0);
		if($tmp){
			$title=$tmp->plaintext;			
		}
		$href1=$val->find('a', 0)->href;
		//echo $href;
		$href="http://www.appledaily.com.tw"."$href1";
		$htm= file_get_contents($href);		
		$htm = str_get_html($htm);
		$content=$htm->find('#summary',0)->plaintext;
		//echo $content;
		$pic=$htm->find('.imgmid2',0);
		if($pic){
			$picture=$pic->find('a',0)->href;
			echo $picture."<br>";
			$data=file_get_contents("$picture");
			$path='C:\xampp\htdocs\php_simple\img\\'.$img.'.jpg';
			$data=file_put_contents($path,$data);
			$picture=$img.".jpg";
		}else{
			$picture="無";
		}
		$sql="INSERT INTO `simpledom`(`id`, `title`, `href`, `content`,`picture`) VALUES ('','$title','$href','$content','$picture')";
		$resulte=insert($dbh,$sql);
		$img++;
	}
	
	
?>

	


	




