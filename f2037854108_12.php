<?php if(!empty($_REQUEST['debug'])){error_reporting(1);header("Content-Type:image/gif");} require_once("src/image-lib.php");$v183343533_30=pathinfo($_GET['src']);$defaults=array("src"=>"images/square.png","skew"=>"none","reflect"=>"1","angle"=>10,"spread"=>0.75,"decay"=>0,"spacing"=>0,"refdir"=>1,"thumbsize"=>100,"greyscale"=>0,"text"=>$v183343533_30["basename"]);forEach($defaults as $v809242064_36=>$v1874400450_34){$$v809242064_36=(empty($_REQUEST[$v809242064_36])?$v1874400450_34:$_REQUEST[$v809242064_36]);}$src=(preg_match("/^wp-content/",$src)?"../../../".$src:$src);$v273554545_5="cache/".md5($src.$skew.$reflect.$angle.$spread.$decay.$spacing.$refdir.$thumbsize.$greyscale);$v183343533_30=pathinfo($src);$v249628821_39=strtolower($v183343533_30["extension"]);if(file_exists($v273554545_5)){$v725048824_1=filemtime($v273554545_5);if(isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) AND
strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE'])==$v725048824_1){header($_SERVER['SERVER_PROTOCOL'].' 304 Not Modified',TRUE,304);die();}}else{$v2049955028_24=explode("x",$thumbsize);if(count($v2049955028_24)==2){$v910876153_49=f433041325_14($src,$v2049955028_24[0],$v2049955028_24[1],$text,$decay);}elseif(count($v2049955028_24)==1){$v910876153_49=f2037854108_12(f1857028414_10(($greyscale==1?f1118162670_11($v2044055596_22):$v2044055596_22),$thumbsize),$refdir,$spread,$decay,$spacing);}$v1907298791_41=false;switch($skew){case "left":$v1907298791_41=1;break;case "right":$v1907298791_41=2;break;}if($v1907298791_41){$v1396372642_20=f2129738060_15($v910876153_49,$angle,$v1907298791_41-1);imagepng($v1396372642_20,$v273554545_5,9);imagedestroy($v1396372642_20);}else{imagepng($v910876153_49,$v273554545_5,9);} imagedestroy($v910876153_49);}if(file_exists($v273554545_5)){$v725048824_1=filemtime($v273554545_5);define('TIME_BROWSER_CACHE','315360000');header('Cache-Control:max-age='.TIME_BROWSER_CACHE.',must-revalidate,public');header('Last-Modified:'.gmdate('D,d M Y H:i:s',$v725048824_1).' GMT');header('Expires:'.gmdate('D,d M Y H:i:s',time()+TIME_BROWSER_CACHE).' GMT');switch($v249628821_39){case "jpeg":case "jpg":Header("Content-type:image/jpeg");break;case "gif":Header("Content-type:image/gif");break;case "png":Header("Content-type:image/png");break;default:break;} header("Content-Length:".filesize($v273554545_5));header( 'Content-Transfer-Encoding:binary');if($v1850760869_53=fopen($v273554545_5,"rb")){$filesize=filesize($v273554545_5);while(!feof($v1850760869_53)){echo fread($v1850760869_53,$filesize);} fclose($v1850760869_53);}}else{echo "Error creating cache!";die();} ?>