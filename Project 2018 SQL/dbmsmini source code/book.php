<?php  ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=email], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=number], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}


input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}


.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

span.price {
  float: right;
  color: black;
}

.cont {
  background-color: yellow;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}
</style>
</head>
<body>


<h2 align="center" style="color:black;font-size:300%; font-family:Rockwell; background-color: white">Cash On Delivery form - CellClues</h2>

  <div class="col-25">

    <div class="cont">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b></b></span></h4>
      <p><a href="#"></a> <span class="price"></span></p>
      <p><a href="index.php">Apple iphone X</a> <span class="price">Rs.85499</span></p>
      <p><a href="index.php">OnePlus 6T</a> <span class="price">Rs.35124</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>Rs.120,623</b></span></p>
    </div>
  </div>

<div class="container">
  <form action="servercod.php" method="POST">
    <div class="input-group">
     <label for="fname">First Name</label>
    <input type="text"  name="firstname" autocomplete="off" required="" placeholder="Your First name.." >

    <label for="lname">Last Name</label>
    <input type="text" name="lastname" autocomplete="off" required="" placeholder="Your Last name..">

       <label for="email">Email ID</label>
    <input type="email" name="emailid" autocomplete="off" required="" placeholder="Your Email.id.." >

    <label for="pnumber">Phone Number</label>
    <input type="number" name="pnumber" autocomplete="off" required placeholder="Your Phone Number..">

    <label for="country">Arrival Time</label>
    <select id="country" name="country">
      <option value="o">Office Hours - 10am to 6pm</option>
      <option value="h">Home - 9am to 7pm</option>
    </select>

    <label for="subject">Address</label>
    <textarea name="address" style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>