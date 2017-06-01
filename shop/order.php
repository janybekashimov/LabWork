
<html>
<head>
<link href="style/css.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Магазин</title>
</head>

<body>

<table align="center" width="900" cellpadding="0" cellspacing="0" border="0" id="main-table">
<tr>
    <td>
        <div id="header"></div>
        <div id="menu">
            <div><a href="index.php">Главная</a></div>

    </td>

</tr>

<tr>

    <td id="main-block" valign="top" style="padding-left: 60px; padding-top: 40px; line-height: 1.2; color:#fff;">
    <p style="padding-left: 25px; font-weight:bold;">Заказанные товары!</p>
                    <?php

include('db_fns.php');
db_connection();
$query = mysql_query("SELECT * FROM orders ORDER BY Id DESC");
$row = mysql_fetch_array($query);

do{
    
    echo $row['name'];
    echo " ";
    echo $row['s_name'];
    echo " ";
    echo $row['address'];
    echo " ";
    echo $row['product'];
    echo " ";
    echo $row['email'];
    echo " ";
    echo $row['date'];
    echo "<br/ >";
    
}while($row=mysql_fetch_array($query));

?>
    
    
        
        <div style="clear: both;"></div>
        
        
        
    </td>
</tr>
<tr>
    <td id="footer-td">
        <div align="center">
            <div class="footer">&copy; bird.kg 2017</div>
        </div>
    </td>
</tr>
</table>

</body>
</html>