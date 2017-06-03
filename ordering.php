<?require 'head.php';?>
   <body>
      <div class="main-block">
         <div class="container paper">
            <?require 'header.php';?>
            <div id="main">
               <div id="catalog">
                  <h2><a class="post_ttl" title="ОФОРМЛЕНИЕ ЗАКАЗА">ОФОРМЛЕНИЕ ЗАКАЗА</a></h2>
                  <div id="str_basket">
                     <?php
                        if (isset($_SESSION['login']) && isset($_SESSION['adminmode'])) {
                            echo header('Location:index.php');
                        } else {
                            echo '<table>
                                                   <tr><th>Наименование</th><th>Цена</th><th>Количество</th><th>Сумма к оплате</th></tr>';
                            $sum = 0;
                            for ($i = 0; $i < $_SESSION['basketcounter']; $i++) {
                                $sum = $sum + $_SESSION['price' . $i] * $_SESSION['quantity' . $i];
                                echo '<tr><td>', $_SESSION['item' . $i], '</td><td>', $_SESSION['price' . $i], '</td><td>', $_SESSION['quantity' . $i], ' шт. </td>
                                      <td> ', $_SESSION['price' . $i] * $_SESSION['quantity' . $i], ' руб.</td>
                                      <br>';
                            }
                            echo '
                              <tr>
                                 <td style="background:#e6e6fa;">
                                    <b>
                                       Итого к оплате: 
                                 </td>
                                 <td style="background:#e6e6fa;" colspan="3">', $sum, ' руб.</b></td>
                              </table>
                              <form action="confirmordering.php">
                                 <p>Ф.И.О.:</p>
                                 <input type="text" size="30" name="fullname" required>
                                 <p>Тел. номер:</p>
                                 <input type="text" size="30" name="phonenumber" required>
                                 <p>E-mail:</p>
                                 <input type="text" size="30" name="email" required>
                                 <p>Адрес доставки (оставьте поле пустым, если желаете забрать товар самостоятельно):</p>
                                 <input type="text" size="70" name="address">
                                 <p>Желаемая дата доставки (самовывоза) товара:</p>
                                 <input type="text" name="date" size="50" required>
                                 </td>
                                 </tr>
                                 <tr>
                                    <td align="right" colspan="3">
                                       <br>
                                       <input type="submit" value="Подтвердить заказ" style="margin-top:20px;">
                                       <br>
                                       <br>
                              </form>
                              </td>
                              </tr>
                              ';
                        }
                        ?>
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
