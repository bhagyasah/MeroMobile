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
if (loggedin()) {
    $result = mysql_query("SELECT * FROM contactdata ORDER BY contactname ASC");
    
    }else{
        echo "Please log in first";
        die();
        
    } //getu
    //execute the SQL query and return records
    
    ?>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Contact Name</th>
                <th> Contact No</th>
                <th>Call</th>
                <th>Send Sms</th>
               

            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysql_fetch_assoc($result)) {
                echo
                "<tr>
          <td>{$row['id']}</td>
          <td>{$row['contactname']}</td>
          <td>{$row['contactno']}</td>
           <td>
      <form  action='firebase/send_notification.php' method='POST'>
       <input id='submit' type='submit' value='Call' />
        <input id='data1' type='hidden' name='message' value='call@123#call' />
        <input type=hidden name='title' value='{$row['contactno']}'/>
       
      </form>
      </td>
            <td>
      <form  action='sms_reply.php' method='POST'>
       <input id='submit' type='submit' value='Send' />
        <input id='data1' type='hidden' name='' value='sms' />
          <input type=hidden name='mobileno' value='{$row['contactno']}'/>
       
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








