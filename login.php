<?require 'head.php';?>
   <body>
      <div class="main-block">
         <div class="container paper">
            <?require 'header.php';?>
            <div id="main">
               <div id="catalog">
                  <h2 class="post_ttl2">АВТОРИЗАЦИЯ</h2>
                  <div id="basket" style="background:none;">
                     <?php
						 if (isset($_SESSION['login'])) {
								echo '<script>location.href="index.php"</script>';
							}
						else {
							$login     = htmlspecialchars($_POST['login']);
							$password  = htmlspecialchars($_POST['password']);
							$logins    = file('files/logins_oP1lq2b3Nqh5XyqT2.txt', FILE_IGNORE_NEW_LINES);
							$passwords = file('files/passwords_u9Io1jA2Nk2q3h6vB.txt', FILE_IGNORE_NEW_LINES);
							for ($i = 0; $i < count($logins); $i++) {
								if ($login == $logins[$i] && $password == $passwords[$i]) {
								$_SESSION['login'] = $login;
								if ($_SESSION['login'] == 'alya' && $password == 'qwerty') {
									$_SESSION['adminmode'] = 'activated';
								}
								echo '<script>location.href="', $_SERVER['HTTP_REFERER'], '"</script>';
								exit;
								}
							}
							echo '<p align="center" style="font-size:28px;color:#6dc302;"><b>Ошибка ввода, Попробуйте снова</b></p>';
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
