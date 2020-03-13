<?php
$db = new SQLite3('Images.db');
$sql = "SELECT * FROM $my_table";  
$result = $db->query($sql);
while ($row = $result->fetchArray(SQLITE3_ASSOC)){
echo "<tr>";
            echo "<td>" <h5 style="color: green;"> .$row['name'].'</h5></td>
            echo "<td>" <h5 style="color: green;"> .$row['start_time'].'</h5></td>
            echo "<td>" <h5 style="color: red;"> .$row['end_time'].'</h5></td>
            echo "<td>" <img src="data:image/jpeg;base64,'.base64_encode($row['img'] ).'" height="100" width="100"/> "</td>";
            echo "<td>" <h5 style="background-color: #FFFF00;position:static;">Person detection </h5></td>
            echo "</tr>";
}
unset($db); 
