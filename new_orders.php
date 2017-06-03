<?require 'head.php';?>
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
                     <?php $logins=file('files/orderslogins8GE72dgr73D12.txt', FILE_IGNORE_NEW_LINES);
                        $fullnames=file('files/ordersfullnames8GE72dgr73D12.txt', FILE_IGNORE_NEW_LINES);
                        $phonenumbers=file('files/ordersphonenumbers8GE72dgr73D12.txt', FILE_IGNORE_NEW_LINES);
                        $emails=file('files/ordersemails8GE72dgr73D12.txt', FILE_IGNORE_NEW_LINES);
                        $addresses=file('files/ordersaddresses8GE72dgr73D12.txt', FILE_IGNORE_NEW_LINES);
                        $dates=file('files/ordersdates8GE72dgr73D12.txt', FILE_IGNORE_NEW_LINES);
                        $items=file('files/ordersitems8GE72dgr73D12.txt', FILE_IGNORE_NEW_LINES);
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