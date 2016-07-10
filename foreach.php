<?php
//NUMBER 1
// 0-1
// 1-3
// 2-5
// 3-7
$x = array(1,3,5,7);
foreach($x as $key => $value)
{
  echo $key . " - " . $value ."<br />";
}

// NUMBER 2
// 1,3,5,7

$x = array(1,3,5,7);
foreach($x as $value)
{
  echo $value ."<br />";
}

// NUMBER 3
// 0-"Dojo"
// 1-"game"


$x = array("hi" => "Dojo", "awesome" => "game");
foreach($x as $key => $value)
{
  echo $key . " - " . $value ."<br />";
}

// NUMBER 4
// "Dojo"
// "game"

$x = array("hi" => "Dojo", "awesome" => "game");
foreach($x as $key => $value)
{
  echo $value ."<br />";
}

// NUMBER 5
// "hi"
// "awesome"


$x = array("hi" => "Dojo", "awesome" => "game");
foreach($x as $key => $value)
{
  echo $key ."<br />";
}

// NUMBER 6
// "Key is 0"
// "Key is 1"
// "Key is 2"
// "var_dumping value"
// "var_dump($x)"


$x = array( array(1,3,5), array(2,4,6), array(3,6,9) );
foreach($x as $key => $value)
{
  echo "Key is {$key}<br />";
  echo "var_dumping value";
  var_dump($value);
}

// NUMBER 7
// "var_dumping value"
// "1,3,5"
// "2,4,6"
// "3,6,9"


$x = array( array(1,3,5), array(2,4,6), array(3,6,9) );
foreach($x as $value)
{
  echo "var_dumping value";
  var_dump($value);
}


// NUMBER 8
// "Key is Dojo,awesome"
// "way confused?"

$x = array( array("hi"=>"Dojo", "game"=>"awesome"), array("dude"=>"fun", "play"=>"what?"), array("no"=>"way", "i am"=>"confused?") );
foreach($x as $key => $value)
{
  echo "key is {$key}<br />";
  foreach($value as $key2=>$value2)
  {
    echo $key2 ." - " . $value2."<br />";
  }
}

// NUMBER 9
// "hi-Dojo"
// "game-awesome"
// "dude-fun"
// "play what?"
// "no way"
// "i am confused "





$x = array( array("hi"=>"Dojo", "game"=>"awesome"), array("dude"=>"fun", "play"=>"what?"), array("no"=>"way", "i am"=>"confused?") );
foreach($x as $y)
{
  foreach($y as $key=>$value)
  {
    echo $key ." - " . $value."<br />";
  }
}



?>