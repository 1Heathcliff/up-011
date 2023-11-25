
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/css/style2.css">
    
    <title>Document</title>
</head>
<body>
    <!-- шапка сайта -->
    <header>
     <div class="logo">
        <h1>Illuminos</h1>
        
        <p>онлайн-кинотеатр</p>
     </div>
       <!-- меню навигации -->
        <nav>
            <a href="account.php">Войти</a>
            <a href="main.html">Главная</a>
            <a href="films.html">Фильмы</a>
            <a href="serials.php">Сериалы</a>
            <button>Купить подписку</button>
        </nav>
       
    </header>
    <div class="main_advert">
        
        <div class="txt">
        <a href="">Оформи подписку всего за 2$ в месяц</a>
        </div>
         <!-- форма регистрации -->
    </div>
     <form action="register.php" method="post">
     <div class="input-box">
        <input type="text" placeholder="login" name="login">
        </div>
        <div class="input-box">
        <input type="text" placeholder="password" name="pass">
        </div>
        <div class="input-box">
        <input type="text" placeholder="repeat passord" name="repeatpass">
        </div>
        <div class="input-box">
        <input type="text" placeholder="email" name="email">
        </div>
       
        <button type="submit">Зарегестрироваться</button>
       
     </form>
     <br><br><br><br>
<!-- форма авторизации -->
     <form action="register.php" method="post">
     <div class="input-box">
        <input type="text" placeholder="login" name="login">
        </div>
        <div class="input-box">
        <input type="text" placeholder="password" name="pass">
        </div>
        
        <button type="submit">Войти</button>
     </form>
   
       
    <br><br>
    <div class="line"></div>
    <!-- футер -->
    <footer>
        <div class="line2">
            <p>Contacts</p>
            <p>About Us</p>
            <p>Donats</p>
            <p>More info</p>
        </div>
        <div class="line2">
            <p>Telegram</p>
            <p>Instagram</p>
            <p>Twitter</p>
            <p>Facebook</p>
        </div>
        <div class="line2">
            <p>Serials</p>
            <p>Tunes</p>
            <p>Films</p>
            <p>Category</p>
        </div>
    </footer>
   
</body>
</html>