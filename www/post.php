<h1>POST DATA</h1>
<?php
    foreach($_POST as $key => $val){
        echo ("$key=");
        if(is_array($val)){
            foreach($val as $i){
                echo ("$i, ");
            }
        } else {
            echo ("$val");
        }
        echo ("<br>");
    }
?>

<!DOCTYPE html>
<html lang="ja">
<body>
<form method="post" action="./post.php">
<input type="input" name="in1">
<input type="checkbox" name="in2[]" value="CHK1">
<input type="checkbox" name="in2[]" value="CHK2">
<input type="radio" name="in3[]" value="RAD1">
<input type="radio" name="in3[]" value="RAD2">
<select name="in4[]" multiple>
    <option value="SEL1">1</option>
    <option value="SEL2">2</option>
    <option value="SEL3">3</option>
</select>
</form>
</body>
</html>
