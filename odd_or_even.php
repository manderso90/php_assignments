<?php
 $a="Number is";

for($i=1; $i<2000; $i++ ){
    if($i% 2!==0) {
        echo "$a"."$i"." This is an odd number";
    }
    else {
        echo "$a"."$i". "This is an even number"; 
    }
}

?>