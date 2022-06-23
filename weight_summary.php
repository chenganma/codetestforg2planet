<!DOCTYPE html>
<html>
<head>
<title>Weight Summary</title>
</head>
<body>

<?php

/* This is the HTML schema. generate from the xsd file
    <?xml version="1.0" encoding="utf-8"?>
    <device-list>
      <device name="str1234" quantity="745" serial_number="str1234">
        <weight units="ounces">123.45</weight>
      </device>
    </device-list>
*/

echo '<h2>Weight Summary</h2>';

$items = simplexml_load_file('./example.xml') or die("Error"); //get data from the file
$i = 0;
$count = 0;
$var = 0;
$number = 1;
$total_devices_weight = 0;
$one_device_weight = 0;

foreach($items as $item){ //run the array fetch from the XML file
  echo 'Item'.$number++.'- Weight (Pound): '.$item->weight.'  //  ';
  $pound = $item->weight;
  $ounces = $pound * 16;
  echo 'Pound to Ounces:'.$ounces.'  //  ';
  echo 'Quantity: '.$item['quantity'].'<br/>';
  $one_device_weight = $ounces * $item['quantity'];
  $weight_array[$i++] = $one_device_weight;
  echo '-------------------------------------------------------------------------------------------<br/>';
  $total_devices_weight = $one_device_weight + $total_devices_weight;
  $count = $item['quantity'] + $count;
}

echo 'Total Devices:'.$count.'<br>';
echo 'Min Weight:'.min($weight_array).'<br>';
echo 'Max Weight:'.max($weight_array).'<br>';
$average_weight = $total_devices_weight / $count;
echo 'Average:'.$average_weight.'<br>';

foreach($weight_array as $i)
{
  $var += pow(($i - $average_weight), 2);
}

echo 'Stddev:'.(float)sqrt($var/$count);

?>
</body>
</html>