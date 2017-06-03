<? session_start();
   if (isset($_SESSION['basketcounter'])==false)
   {
   	$_SESSION['basketcounter']=0;
   }
   ?>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link rel="shortcut icon" href="images/logotip.png" type="image/png">
      <title>РыбоМания - Интернет-магазин рыболовных принадлежностей</title>
      <link rel="stylesheet" type="text/css" href="style.css" />
   </head>
   <body>
      <div class="main-block">
         <div class="container paper">
            <?require 'header.php';?>
            <div id="main">
               <div id="catalog">
                  <h2><a class="post_ttl" title="КОРЗИНА">КОРЗИНА</a></h2>
                  <div id="str_basket">
                     <? 
                        if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) 
                        					{
                        					echo header('Location:index.php');
                        					}
                        					else
                        					{
                        					$sum=0;
                        					for ($i=0; $i<$_SESSION['basketcounter']; $i++)
                        {
                        	$sum=$sum+$_SESSION['price'.$i]*$_SESSION['quantity'.$i];
                        	echo '
                        	<table>
                        	<tr><th>Наименование</th><th>Цена</th><th>Количество</th><th>Сумма</th><th rowspan="2"><form action="delfrombasket.php">
                        	<input type="submit" value="Удалить из корзины" name="item', $i, '">
                        	</form></th></tr>
                        	<tr>
                        	<td id="basket_naim">
                        	<b>', $_SESSION['item'.$i], '</b>
                        	</td>
                        	<td id="basket_price">', $_SESSION['price'.$i], ' руб.
                        	</td>
                        	<td id="basket_q">
                        	<form action="changequantity.php">
                        	<input type="submit" value="-" name="changequantity', $i, '">
                        	 ', $_SESSION['quantity'.$i], ' 
                        	<input type="submit" value="+" name="changequantity', $i, '">
                        	</form>
                        	</td>
                        	<td id="sum">
                        	<p align="right">', $_SESSION['price'.$i]*$_SESSION['quantity'.$i], ' руб.</b></p>
                        	</td>
                        	
                        	</tr>
                        	</table>
                        	';
                        }
                        if ($_SESSION['basketcounter']==0)
                        {
                        	echo '
                        	<table>
                        	<tr>
                        	<td colspan="3">
                        	<br>
                        	Корзина пуста
                        	<br>
                        	<br>
                        	</td>
                        	</tr>
                        	</table>
                        	<p style="margin-bottom:150px;">Пожалуйста, вернитесь на главную и добавьте товары в корзину.</p>
                        	';
                        }
                        else
                        {
                        	echo '
                        	</table>
                        	<table width="100%" align="center" border="4">
                        	<tr>
                        	<td align="right" colspan="3">
                        	<b>Итого к оплате: ', $sum, ' руб.</b>
                        	<form action="ordering.php">
                        	<br>
                        	<input type="submit" value="Оформить заказ">
                        	</form>
                        	</td>
                        	</tr>
                        	</table>
                        	<p style="margin-bottom:150px;"></p>
                        	';
                        }
                        
                        				;}?>
                  </div>
               </div>
            </div>
            <div class="clear-both"></div>
         </div>
      </div>
      <?require 'footer.php';?>
   </body>
</html>