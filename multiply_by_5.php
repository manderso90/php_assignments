

<?php
	$a = array(2,4,10,16);
	$factor = 5;
    function multiply($a, $factor){
    	foreach ($a as $value){
    		$new_arr[]=$value*$factor;
    	}
    	return $new_arr;
}    
    	$b = multiply($a, $factor);
    	var_dump($b);
	
	
?>


