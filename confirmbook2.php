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
    border-collapse: collapse;
    background-color: white;
    width: 500;
}
</style>
<script>
    function Pay()
    {
        alert("Payment Successful");
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
  <li><a class="active" href="viewplace.html"><b>View Place</b></a></li>
  <li><a class="active" href="main.html"><b>Logout</b></a></li>
  </ul>
</div>
         <br><br>
<center>
  <h3>PAYMENT</h3>
<br>
    <form action="paydb.php" method="POST">
    <table border="1">
      <tr>
    <td><label>Card No: </label></td><td><input type="text" size="16" name="c"></td>
  </tr>
  <tr>
    <td><label>CVV No: </label></td><td><input type="text" size="4"></td>
  </tr>
  <tr>
    <td><label>Expiration: </label></td><td><input type="text" size="7" placeholder="MM/YYYY"></td>
  </tr>
  <tr>
    <td colspan="2"><center><input type="submit" value="Pay" onclick="Pay()"></center></td>
  </tr>
   </form>
</center>

</body>
</html>





