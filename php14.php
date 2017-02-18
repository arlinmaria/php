<?php
$age = array("arlin"=> 24,"anu"=>23,"ammu"=>22);
$mark = array("arlin"=> 70,"anu"=>50,"ammu"=>60);
asort($mark);	
foreach ($mark as $key => $val)
 {

echo "mark[".$key."]=".$val."\n";

}
?>
