


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


            <?
                $categories = get_cat();

                foreach($categories as $item):
            ?>
                <div><a href="index.php?view=cat&id=<?=$item['cat_id']?>"><?=$item['name']?></a></div>
            <?endforeach;?>

            <div id="cart"><a href="index.php?view=cart">Товаров в корзине: (<?=$_SESSION['total_items'];?>)</a> <?='Общая цена: '.number_format($_SESSION['total_price'],2);?>-сомов</div>

            <div><a href="admin.html">Admin</a></div>
        </div>
    </td>
</tr>
<tr>
	<td id="main-block" valign="top">
    
    <?php 
        include($_SERVER['DOCUMENT_ROOT'].'/views/pages/'.$view.'.php');
     ?>
    

        <div style="clear: both;"></div>
        
        
        
    </td>
</tr>
<tr>
    <td id="footer-td">
        <div align="center">
            <div class="footer">   &copy; bird.kg 2017 </div>
        </div>
    </td>
</tr>
</table>

</body>
</html>

