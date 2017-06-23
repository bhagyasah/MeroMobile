 
<!DOCTYPE html>
<html>
<head>
    <title>Mero Mobile</title>
    <link rel="stylesheet" type="text/css" href="css/newindexcss.css">
    <link rel="stylesheet" type="text/css" href="css/user_home.css">
    <link rel="stylesheet" type="text/css" href="css/mobilecontacts1.css">
    <link rel="stylesheet" type="text/css" href="css/inbox_sms.css">
</head>
<body>
<div class="main">
<div class="banner">
<img src="images/header.png">
<div class="welcome_message">
<?php 
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
    <li><a href="inbox_sms.php">Inbox-Sms</a></li>
     <li><a href="call_log_show.php">Call-Logs</a></li>
</ul>

</div>

<div class="contact_container">
 <?php
    //execute the SQL query and return records
  if (loggedin()) {
    $result = mysql_query("SELECT * FROM inboxsms");
    
    }else{
        echo "Please log in first";
        die();
        
    } //getu

    
    ?>
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>Phone No</th>
                <th>Messege</th>
                <th>Reply</th>

            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysql_fetch_assoc($result)) {


                echo
                

                "<tr>

          <td>{$row['id']}</td>
          <td>{$row['phoneno']}</td>
          <td>{$row['sms']}</td>
          <td>
      <form  action='sms_reply.php' method='POST'>
       <input id='submit' type='submit' value='Reply' />
        <input id='data1' type='hidden' name='mobileno' value='{$row['phoneno']}' />
      </form>
    </td>
        </tr>";

            }
            ?>
        </tbody>
    </table>
 
</div>
<div class="footer">
<img src="images/footer.png">
</div>
</div>
</body>
</html>








