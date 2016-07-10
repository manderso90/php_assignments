

<?php
	$A = array(2,3,'hello');
    function print_lists($A){
    	$result="";
     foreach ($A as $value){

     
  			$result.="<li>".$value. "</li>";
		}
		
			return $result;
	}
		echo"<ul>".print_lists($A). "</ul>";
?>


