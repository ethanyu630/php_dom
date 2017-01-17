<?PHP
    
	header("content-type:text/html;charset=utf8");
	
	$dsn = "mysql:host=localhost;dbname=dom";
	$dbh = new PDO($dsn,"root","");
	$dbh->query("SET NAMES UTF8");
	function select($dbh,$sql){
		$query = $dbh->query($sql);
		$query->setFetchMode(PDO::FETCH_ASSOC);
		$select=$query->fetchAll();
		if(isset($select)){
			return $select;
		}else{
		return false;		
		}
	}
	function insert($dbh,$sql){
		$resulte = $dbh->query($sql);  	     
	}
	
	require_once("simple_html_dom.php");  
	
	$html=file_get_contents("http://www.appledaily.com.tw/realtimenews/section/animal/");
	$html = str_get_html($html);
	$list=$html->find('.rlby',0)->find("ul",0)->find("li");

	foreach($list as $val){
		
		$tmp=$val->find('h1', 0);  //在從li開始抓取
		if($tmp){
			$title=$tmp->plaintext;			
		}
		$href1=$val->find('a', 0)->href;
		$href="http://www.appledaily.com.tw"."$href1";
		$htm= file_get_contents($href);		
		$htm = str_get_html($htm);
		$check =explode("/",$href,-1);
		$sql="SELECT `check` FROM `simpledom` WHERE check='$check'";
		$select=select($dbh,$sql);
		if(isset($select)){
			$content=$htm->find('#summary',0)->plaintext;   //存文字抓取
			
			$pic=$htm->find('.imgmid2',0);
			if($pic){
				$picture=$pic->find('a',0)->href;
				$data=file_get_contents("$picture");
				$path='C:\xampp\htdocs\php_simple\img\\'.$check[7].'.jpg';
				$data=file_put_contents($path,$data);
				$picture=$check[7].".jpg";
			}else{
				$picture="無";
			}
			$sql="INSERT INTO `simpledom`(`id`,`check`,`title`, `href`, `content`,`picture`) VALUES ('','$check[7]','$title','$href','$content','$picture')";
			$resulte=insert($dbh,$sql);
		}
	}
	
	
?>

	


	




