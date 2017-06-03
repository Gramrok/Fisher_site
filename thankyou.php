<?require 'head.php';?>
   <body>
      <div class="main-block">
         <div class="container paper">
            <?require 'header.php';?>
            <div id="main">
               <div id="catalog">
                  <h2><a class="post_ttl" title="ОФОРМЛЕНИЕ ЗАКАЗА">ОФОРМЛЕНИЕ ЗАКАЗА</a></h2>
                  <div id="str_basket">
                     <? if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) 
                        {
                        echo header('Location:index.php');
                        }
                        else
                        {?>
                     <p><b>Спасибо за заказ!</b></p>
                     <p><b>Мы свяжемся с вами в ближайшее время для окончательного подтверждения заказа.</b></p>
                     <?}?>
                  </div>
               </div>
            </div>
            <div class="clear-both"></div>
         </div>
      </div>
      <?require 'footer.php';?>
      </div>
   </body>
</html>
