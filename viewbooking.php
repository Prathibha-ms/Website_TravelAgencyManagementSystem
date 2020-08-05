<!DOCTYPE html>
<html>
<head>
<style>
body{
         background-image: url(b1.jpg);
         /*background-repeat: no-repeat;sets how a bgimg is repeated either vertically/horizontally/not */
         background-size: cover; /*Resize background image to cover entire container i.e body here*/
     }
#st{
         font-size: 50pt;
         font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: darkblue;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 26px;
}

li a:hover {
  background-color: white;
  color: darkblue;
}

table{
    background-color: white;
    border-collapse: collapse;
}

</style>
<script>
  function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }       
    }
  }
  </script>
</head>
<body>
    <div id="st">
        <center><font color="white">ViACATION</font></center>
         </div>
         <center><em><strong><font color="white" size="5pt">....Your Tour Guide....</font></strong></em></center>
         <div>
            <ul>
              <li><a class="active" href="viewpackage.html"><b>View Package Details</b></a></li>
              <li><a class="active" href="viewbooking.php"><b>View Booking Details</b></a></li>
              <li><a class="active" href="viewuser.php"><b>View User Details</b></a></li>
              <li><a class="active" href="main.html"><b>Logout</b></a></li>
              </ul>
            </div>
            <br>
            <center>
            <br>
                <h3>View booking details</h3>
                <br>
              <br>
              <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by username" title="Type in a name">
              <br><br>
            <table border="1" id="myTable">
            <tr>
            <th>USERNAME</th>
            <th>PLACE</th>
            <th>STAY</th>
            <th>FOOD</th>
            <th>TRAVEL</th>
            <th>DATE</th>
            </tr>
            <?php
            $servername="localhost";
            $username="root";
            $db="travelagency";
            $pd="";
            $con=mysqli_connect($servername,$username,$pd,$db);
            $query = "SELECT * FROM userbook;";
            $sql=mysqli_query($con,$query);
            while($row=mysqli_fetch_array($sql)){
              echo "<tr><td>" . $row["username"] . "</td><td>" . $row["place"] . "</td><td>" . $row["stay"] . "</td><td>" . $row["food"] . "</td><td>" . $row["travel"] . "</td><td>" . $row["date"] . "</td></tr>";
            }
            ?>
            </table>
            </center>
            
</body>
</html>