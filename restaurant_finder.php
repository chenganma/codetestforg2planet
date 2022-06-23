<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val();
    //console.log(value);
    console.log($("#myTable td").text())
    $("#myTable > tr").filter(function() {
        let item = $(this).text().indexOf(value) > -1;
        $(this).toggle(item);        
    });
  });
});
</script>
</head>
<body>

<?php
echo '<h2>Restaurant Finder</h2>';
echo '<p>Type something in the input field to search the list for specific items:</p>';
echo '<input id="myInput" type="text" placeholder="Search..">';
echo '<br><br>';

echo '<table border="1">';
  echo '<thead>';
  echo '<tr>';
    echo '<th>Restaurant_name</th>';
    echo '<th>Cuisine_type</th>';
  echo '</tr>';
  echo '</thead>';
  echo '<tbody id="myTable">';
  echo '<tr>';
    echo '<td>Fogo de Chao</td>';
    echo '<td>Brazilian</td>';
  echo '</tr>';
  echo '<tr>';
    echo '<td>Chipotle</td>';
    echo '<td>Mexican</td>';
  echo '</tr>';
  echo '<tr>';
    echo '<td>Jimmy John s</td>';
    echo '<td>Sandwiches</td>';
  echo '</tr>';
  echo '<tr>';
    echo '<td>Broadway Pizza</td>';
    echo '<td>Pizza</td>';
  echo '</tr>';
  echo '<tr>';
    echo '<td>Smashburger</td>';
    echo '<td>Burgers</td>';
  echo '</tr>';
  echo '<tr>';
    echo '<td>Leeann Chin</td>';
    echo '<td>Chinese</td>';
  echo '</tr>';
  echo '<tr>';
    echo '<td>Hoban</td>';
    echo '<td>Korean</td>';
  echo '</tr>';
  echo '<tr>';
    echo '<td>Red s Savoy Pizza</td>';
    echo '<td>Pizza</td>';
  echo '</tr>';
  echo '<tr>';
    echo '<td>Holy Land</td>';
    echo '<td>Middle Eastern</td>';
  echo '</tr>';
  echo '<tr>';
    echo '<td>Manny s Steakhouse</td>';
    echo '<td>Steakhouse</td>';
  echo '</tr>';
  echo '<tr>';
    echo '<td>Latuff s Pizzeria</td>';
    echo '<td>Pizza</td>';
  echo '</tr>';
  echo '<tr>';
    echo '<td>Lindey s Steakhouse</td>';
    echo '<td>Steakhouse</td>';
  echo '</tr>';
  echo '<tr>';
    echo '<td>Dong Yang</td>';
    echo '<td>Korean</td>';
  echo '</tr>';
  echo '<tr>';
    echo '<td>White Castle</td>';
    echo '<td>Burgers</td>';
  echo '</tr>';
  echo '<tr>';
    echo '<td>Famous Dave s</td>';
    echo '<td>Barbeque</td>';
  echo '</tr>';
  echo '<tr>';
    echo '<td>Vincent s</td>';
    echo '<td>French</td>';
  echo '</tr>';
  echo '</tbody>';
echo '</table>';
?>
</body>
</html>