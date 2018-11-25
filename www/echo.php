<h1>PRINT</h1>
<?= htmlspecialchars("<?= 'SIMPLE PRINT1' ?><br>")."  :  " ?><br>
<?= 'SIMPLE PRINT1' ?><br>
<br>
<?= htmlspecialchars('<?php echo "SIMPLE PRINT2 (by echo)"; ?><br>')."  :  " ?><br>
<?php echo "SIMPLE PRINT2 (by echo)"; ?><br>
<br>
<?= htmlspecialchars('<?= 3+3*4*10**2 ?><br>')."  :  " ?><br>
<?= 3+3*4*10**2 ?><br>
<br>


<h1>CONDITION</h1>
<?php $cond1 = "aaa"; ?>
<?php if($cond1 == "aaa"){ ?>
    <b><?= $cond1 ?></b>
<?php } else { ?>
    else route
<?php } ?><br>

<?php $int = 0; ?>
<?php do { ?>
    <?= $int ?> for 
    <?php switch($int){ 
        case 1: ?>
        a1a 
        <?php break;
        case 2: ?>
        b2b
        <?php break;
        case "3": ?>
        c3c
        <?php break;
        case true: ?>
        ttt
        <?php break;
        default: ?>
        def
    <?php } ?>
    <?php $int++; ?>
    <br>
<?php  } while ($int < 5); ?>


<h1>ARRAY</h1>
<?php
$arr1[3] = 3;
$arr2 = array("a", "","c");
echo "after ini : count1 = ".count($arr1).", count2 = ".count($arr2)."<br>";
for($i=0; $i<=3; $i++){
    echo "index$i=$arr1[$i], $arr2[$i]<br>";
}
echo "after print: count1 = ".count($arr1).", count2 = ".count($arr2)."<br>";
?>

<?php
$map1["key1"] = "val1";
$map2 = array("k1" => "v1", "k2" => "v2");
foreach ($map1 as $i){
    print ('$i = '."$i"."<br>");
}
foreach ($map2 as $i => $j){
    print ('key $i, val $j = '."[$i] = $j"."<br>");
}

?>

