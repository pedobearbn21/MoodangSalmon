<?php
function Showcourse($a,$n) {
    echo "<table class='table'>";
    echo "<thead class='thead-dark'>
        <tr>
                <th scope='col'>#</th>
                <th scope='col'>Course Name</th>
                <th scope='col'>Cost</th>
                <th scope='col'>Num(STD)</th>
                <th scope='col'>Total</th>
                
        </tr>
        </thead>
        <tbody>";
        include_once('connect.php');
        $sum = 0;
        $sd= 0;
        foreach($a as $value) {
            $query = "SELECT cost FROM course WHERE  cname = '$value' ";
            $result = mysqli_query($conn, $query); 
            $row = mysqli_fetch_assoc($result);
            echo "<tr>";
            echo "<th scope = 'row'> </th>"; 
            echo "<td>" .$value.  "</td> ";
            echo "<td>" .$row["cost"].  "</td> ";  
            echo "<td>".$n."</td>";
            echo "<td>".$n * $row["cost"]."</td>";
            $sum = $sum + ($n * $row["cost"]);
            $sd = $sd+1;
            echo "</tr>";}
            echo "</tbody>
        </table>
            <p> 
              Total-Cost :";
            echo $sum; 
            echo "</p>";
}

?>