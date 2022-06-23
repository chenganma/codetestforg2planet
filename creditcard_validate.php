<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
//$_GET['CC_number'] = '';
if (!isset($_GET['CC_number'])) {
  $_GET['CC_number'] = '';
}

echo '<h2>Credit Card Validation</h2>';
echo '<p>Type credit card number in the input field for Validation:</p>';
echo '<form action="/dashboard/creditcard_validate.php" method="get">';
echo '<input id="ccn" type="text" name="CC_number" inputmode="numeric" autocomplete="cc-number" value="'.$_GET['CC_number'].'">
';
echo '<button type="submit">Validate</button>';
echo '</form>';
echo '<br><br>';

$first_array = $_GET['CC_number'];

$number_array = str_split($first_array);

$total = 0;

for($i=0;$i< count($number_array)-1;$i++){

  if($i % 2 != 0){
    $total = $number_array[$i] + $total;  //1
  }else{
    if(($number_array[$i] * 2) > 9){ //2
      $total = ($number_array[$i] * 2) - 9 + $total;
    }else{
      $total = ($number_array[$i] * 2) + $total;
    }
  }
  //echo '<br><br>'.$number_array[$i].'--'.$total.'<br><br>';
}

$calculate_result = 10 - ($total % 10);
// switch ($number_array[0]) { //check fo the card Issuers
//   case "3":
//     echo "Amex";
//     break;
//   case "4":
//     echo "Visa";
//     break;
//   case "5":
//     echo "Master";
//     break;
//   default:
//     echo "";
// }

echo '<br>';
if($calculate_result == $number_array[$i++]){
  echo 'This is a valid credit card number.';
}else{
  echo 'Not a valid number!';
}

?>
</body>
</html>