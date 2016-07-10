<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="stylesChecker.css">
</head>
<body>

<div id="checkerboard">

<?php

    for($i=1;$i<=4;$i++){
?>
    <div>
    <?php

        for($j=1;$j<=4;$j++){
    ?>
            <div class="white_square"></div>
            <div class="black_square"></div>
    <?php
        }
    ?>
    </div>
    <div>
    <?php

        for($g=1;$g<=4;$g++){
    ?>
       <div class="black_square"></div>
       <div class="white_square"></div>
    <?php
        }
    ?>
   </div>
<?php
    }
?>

</div>


</body>
</html>