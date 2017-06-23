 
<!DOCTYPE html>
<html>
<head>
    <title>Mero Mobile</title>
    <link rel="stylesheet" type="text/css" href="css/newindexcss.css">
    <link rel="stylesheet" type="text/css" href="css/user_home.css">
    <link rel="stylesheet" type="text/css" href="css/mobilecontacts1.css">
       <link rel="stylesheet" type="text/css" href="css/inbox_sms.css">
       <link rel="stylesheet" type="text/css" href="css/sms_reply.css">
</head>
<body>
<div class="main">
<div class="banner">
<img src="images/header.png">
<div class="welcome_message">
<?php 

$mobileno = $_POST['mobileno'];

require 'connect_mysql.php';
require 'core.inc.php';
require 'connect_mysql.php';
//echo $current_file;
if (loggedin()) {
    echo 'Welcome   '.getuserfield('phone').'<br>'.'<a href="logout.php">Log out</a>';
    }else{
         header('Location: index.php');
        
    } //getuserfield('firstname');
    # code...
?>
</div>
</div>
<div class="menu">
<ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">About Us</a></li>
    <li><a href="show_gpslocation.php">Location</a></li>
    <li><a href="mobcontacts.php">Contact</a></li>
    <li><a href="sent_sms.php">Sent-Sms</li>
   <a href="inbox_sms.php">Inbox-Sms</a></li>

</ul>

</div>

<div class="contact_container">
  <?php

  if (loggedin()) {
    $result = mysql_query("SELECT * FROM outbox");
    
    }else{
        echo "Please log in first";
        die();
        
    } //getu
    //execute the SQL query and return records
    ?>

<form action="firebase/send_notification.php" method="POST">
  Mobile No:<input type="text" name="title" value=<?php echo $mobileno ?> > <br><br>
  Message:<textarea name="message" rows="10" cols="30"></textarea>
  <input type="submit" name="submit" value="Send">


</form>

   
</div>
<div class="footer">
<img src="images/footer.png">
</div>
</div>
</body>
</html>








