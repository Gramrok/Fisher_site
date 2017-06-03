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
                  <h2><a class="post_ttl" title="НОВЫЕ ЗАКАЗЫ">НОВЫЕ ЗАКАЗЫ</a></h2>
                  <? 
                     if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) 
                     {?>
                  <div id="str_basket">
                     <form action="cleanorders.php" align="right" style="margin:5px;">
                        <input type="submit" value="Очистить заказы" >
                     </form>
                     <?php $logins=file('files/orderslogins.txt', FILE_IGNORE_NEW_LINES);
                        $fullnames=file('files/ordersfullnames.txt', FILE_IGNORE_NEW_LINES);
                        $phonenumbers=file('files/ordersphonenumbers.txt', FILE_IGNORE_NEW_LINES);
                        $emails=file('files/ordersemails.txt', FILE_IGNORE_NEW_LINES);
                        $addresses=file('files/ordersaddresses.txt', FILE_IGNORE_NEW_LINES);
                        $dates=file('files/ordersdates.txt', FILE_IGNORE_NEW_LINES);
                        $items=file('files/ordersitems.txt', FILE_IGNORE_NEW_LINES);
                        for ($i=0; $i<count($items); $i++)
                        {
                        	echo '
                        	Логин: ', $logins[$i], '<br>
                        	Ф.И.О.: ', $fullnames[$i], '<br>
                        	Тел. номер: ', $phonenumbers[$i], '<br>
                        	E-mail: ', $emails[$i], '<br>
                        	Адрес: ', $addresses[$i], '<br>
                        	Дата желаемого получения: ', $dates[$i], '<br>
                        	<br>
                        	
                        	<br>
                        	', $items[$i], '
                        	<br>
                        	-------------------------------------------------------------------------------
                        	<br>
                        	<br>
                        	';
                        }
                        ?>
                  </div>
                  <?	
                     }
                     else 
                     {
                     echo header('Location:index.php');
                     }
                     ?>
               </div>
            </div>
            <div class="clear-both"></div>
         </div>
      </div>
      <?require 'footer.php';?>
      </div>
   </body>
</html>