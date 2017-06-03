<?require 'head.php';?>
<body>
   <div class="main-block">
      <div class="container paper">
         <?require 'header.php';?>
         <div id="main">
            <div id="catalog">
               <h2><a class="post_ttl">Успешная регистрация</a></h2>
               <div id="basket" style="background:none;">
                  <?php
                     if (isset($_SESSION['login']))
                     {
                     	echo '<script>location.href="index.php"</script>';
                     }
                     else
                     {
                     $login     = htmlspecialchars($_POST['login']);
                     $password = htmlspecialchars($_POST['password']);
                     $logins    = file('files/logins7d3HFH28dsF3.txt', FILE_IGNORE_NEW_LINES);
                     file_put_contents('files/logins7d3HFH28dsF3.txt', $login . "\n", FILE_APPEND);
                     file_put_contents('files/passwords1dD8d34FSWQ23D.txt', $password . "\n", FILE_APPEND);
                     for ($i=0; $i<count($logins); $i++)
                     {
                     	if ($login==$logins[$i])
                     	{
                     		$_SESSION['login_already_exist']=true;
                     		echo '<script>location.href="registration.php"</script>';
                     		exit;
                     	}
                     }
                     echo '<p align="center" style="font-size:28px;color:#fff;"><b>Регистрация прошла успешно! Теперь вы можете авторизоваться(в шапке сайта)!</b></p>';
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
