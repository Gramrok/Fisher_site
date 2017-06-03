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
	  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	  <script type="text/javascript">
		$(document).ready(function(){
		$('.spoiler-body').hide();
		$('.spoiler-title').click(function(){
			$(this).toggleClass('opened').toggleClass('closed').next().slideToggle();
			if($(this).hasClass('opened')) {
				$(this).html('Скрыть добавление товаров');
			}
			else {
				$(this).html('Добавить товар');
			}
		});
		});
		</script>
   </head>