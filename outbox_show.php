<?php
 $username = "root";
 $password = "";
 $host = "localhost";
 $connector = mysql_connect($host, $username, $password)
    or die("Unable to connect");
 $selected = mysql_select_db("mobiledata", $connector)
    or die("Unable to connect");
 ?>
 <!DOCTYPE html>
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
    <title>Home</title>
    <link href="style/index-layout.css" rel="stylesheet" type="text/css" />
    <link href="style/homepage-layout.css" rel="stylesheet" type="text/css"/>
 </head>
 <body>
    <!--right-->
    <div id="body">
        <div id="left">
        </div></div>
    <?php
    //execute the SQL query and return records
    $result = mysql_query("SELECT * FROM outbox");
    ?>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Phone No</th>
                <th>Messege</th>

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
        </tr>";
            }
            ?>
        </tbody>
    </table>
 </body>
 </html>
<?php mysql_close($connector); ?>
