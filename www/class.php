<?php
class AClass {
    Public $prop1;
    Public $prop2;
    Protected $prop3;
    Private $prop4;
}

$ins = new AClass();
$ins->$prop1 = "111";
$ins->$prop2 = "222";
$ins->$prop3 = "333";
$ins->$prop4 = "444";
?>


<?php
    echo $ins->$prop1;
    echo $ins->$prop2;
    echo $ins->$prop3;
    echo $ins->$prop4;
?>


