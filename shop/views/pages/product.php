
<html>
<head>
<link href="style/css.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Магазин</title>
</head>
<body>
<table align="center" cellpadding="0" cellspacing="0" class="product" border="0">
            <tr>
                <td valign="top">
                    <div><a href="#"><img src="userfiles/<?=$product['image']?>" alt="" /></a></div>
                    <div class="description">
                        <div class="product-name"><a href="#"><?=$product['title']?></a></div>
                        <div class="product-price">Цена: <?=$product['price']?></div>
                    </div>
                </td>

                <td valign="top" width="100">
                    <div style = "width: 500px; height: 50px; text-indent: 25px; margin: 0 100px 110px 0;"><?=$product['description']?></div>
                    <div style = "width: 400px; height: 15px;"><p style = "text-indent: 20px;"><a href="index.php?view=add_to_cart&id=<?=$product['id']?>">Добавить в корзину</a></p></div>
                    </div>
                </td>

            </tr>
    </table>

</body>