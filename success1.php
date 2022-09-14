<h1> Customer Details</h1>
<?php
$con=mysqli_connect("localhost","id19561277_root","Cl$=9c_*7EOnCNOj","id19561277_helloindia_db");
if (mysqli_connect_errno())
{echo "Failed to connect to MySQL: " . mysqli_connect_error();}
$result = mysqli_query($con,"SELECT * FROM hello ORDER BY id DESC LIMIT 1");
echo "<table border='1'>
<tr>
<th>id</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Contact</th>
<th>Profession</th>
<th>State</th>
<th>Address</th>
<th>Duration</th>
<th>People</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['fname'] . "</td>";
echo "<td>" . $row['lname'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['contact'] . "</td>";
echo "<td>" . $row['profession'] . "</td>";
echo "<td>" . $row['state'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "<td>" . $row['duration'] . "</td>";
echo "<td>" . $row['people'] . "</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
<h1>Payment Details</h1>
<?php
$con=mysqli_connect("localhost","id19561277_root","Cl$=9c_*7EOnCNOj","id19561277_helloindia_db");
if (mysqli_connect_errno())
{echo "Failed to connect to MySQL: " . mysqli_connect_error();}
$result = mysqli_query($con,"SELECT * FROM payment ORDER BY id DESC LIMIT 1");
echo "<table border='1'>
<tr>
<th>id</th>
<th>First Name</th>
<th>Last Name</th>
<th>email</th>
<th>Date Of Birth</th>
<th>Gender</th>
<th>Card Number</th>
<th>CVC</th>
<th>Expiry Date of Card</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['fname'] . "</td>";
echo "<td>" . $row['lname'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['dob'] . "</td>";
echo "<td>" . $row['gender'] . "</td>";
echo "<td>" . $row['cardnumber'] . "</td>";
echo "<td>" . $row['cvc'] . "</td>";
echo "<td>" . $row['expdate'] . "</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
<!DOCTYPE html>
<html lan="en">
    <head>
    </head>
        <body>
            <br>
        <a href="index1.php" style="text-decoration: none">
            <input  type="button" value="Home">
            </a>
            <input  type="button" value="Print">
</body>
</html>