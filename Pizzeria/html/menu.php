<!DOCTYPE html>
<html lang="uk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Смачна Піца</title>
  <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="../assets/styles/styles.css">
  <script>
    window.onload = function() {
      switchLanguage('en');
    };
  </script>
</head>
<script src="../assets/scripts/main.js"></script>
<body>

  <header>
    <div class="logo-container">
      <img src="../assets/images/logo.png" alt="Логотип Смачної Піци">
    </div>
    <nav>
      <a href="../index.html" class="nav-link" data-uk="Головна" data-en="Home">Головна</a>
      <a href="./menu.html" class="nav-link" data-uk="Меню" data-en="Menu">Меню</a>
      <a href="./promotions.html" class="nav-link" data-uk="Акції" data-en="Promotions">Акції</a>
      <a href="./delivery-payment.html" class="nav-link" data-uk="Доставка" data-en="Delivery">Доставка</a>
      <a href="./feedback.html" class="nav-link" data-uk="Підтримка" data-en="Support">Підтримка</a>
      <a href="./about.html" class="nav-link" data-uk="Про нас" data-en="About Us">Про нас</a>
      <div class="language-switcher">
        <button onclick="switchLanguage('uk')" class="active">UA</button>
        <button onclick="switchLanguage('en')">EN</button>
      </div>
    </nav><br>
    <nav class="menu-nav">
      <a href="#pizza" data-uk="Піца" data-en="Pizza">Піца</a>
      <a href="#snacks" data-uk="Закуски" data-en="Snacks">Закуски</a>
      <a href="#drinks" data-uk="Напої" data-en="Drinks">Напої</a>
    </nav>
  </header>

  <div style="padding-top: -40px; margin-top: 250px">
  <main id="menu-content">
    <!-- Контент меню, що змінюється -->
    <section id="pizza"></section>
    <h2 class="section-title" data-uk="Піца" data-en="Pizza">Піца</h2>

    <div class="exhibitions-grid">
      <div class="exhibition-card">
        <img src="../assets/images/4cheese.jpg" alt="4 сири">
        <div class="card-content">
          <div class="text-content">
            <h3 data-uk="4 сири" data-en="4 cheeses">4 сири</h3>
            <p class="price">299 грн</p>
          </div>
          <a href="#" class="btn">
            <img src="../assets/images/shopping-cart.png" alt="Замовити" class="btn-icon">
          </a>
        </div>
      </div>

      <div class="exhibition-card">
        <img src="../assets/images/4meats.jpg" alt="4 м'яса">
        <div class="card-content">
          <div class="text-content">
            <h3 data-uk="4 м'яса" data-en="4 meat">4 м'яса</h3>
            <p class="price">349 грн</p>
          </div>
          <a href="#" class="btn">
            <img src="../assets/images/shopping-cart.png" alt="Замовити" class="btn-icon">
          </a>
        </div>
      </div>
      
      <div class="exhibition-card">
        <img src="../assets/images/bbq-min.jpg" alt="BBQ">
        <div class="card-content">
          <div class="text-content">
            <h3 data-uk="BBQ" data-en="BBQ">BBQ</h3>
            <p class="price">299 грн</p>
          </div>
          <a href="#" class="btn">
            <img src="../assets/images/shopping-cart.png" alt="Замовити" class="btn-icon">
          </a>
        </div>
      </div>
      
      <div class="exhibition-card">
        <img src="../assets/images/gav.jpg" alt="Гавайська">
        <div class="card-content">
          <div class="text-content">
            <h3 data-uk="Гавайська" data-en="Hawaiian">Гавайська</h3>
            <p class="price">319 грн</p>
          </div>
          <a href="#" class="btn">
            <img src="../assets/images/shopping-cart.png" alt="Замовити" class="btn-icon">
          </a>
        </div>
      </div>
      
      <div class="exhibition-card">
        <img src="../assets/images/gretska.jpg" alt="Грецька">
        <div class="card-content">
          <div class="text-content">
            <h3 data-uk="Грецька" data-en="Greek">Грецька</h3>
            <p class="price">279 грн</p>
          </div>
          <a href="#" class="btn">
            <img src="../assets/images/shopping-cart.png" alt="Замовити" class="btn-icon">
          </a>
        </div>
      </div>
      
      <div class="exhibition-card">
        <img src="../assets/images/home.jpg" alt="Домашня">
        <div class="card-content">
          <div class="text-content">
            <h3 data-uk="Домашня" data-en="Homemade">Домашня</h3>
            <p class="price">299 грн</p>
          </div>
          <a href="#" class="btn">
            <img src="../assets/images/shopping-cart.png" alt="Замовити" class="btn-icon">
          </a>
        </div>
      </div>
      
      <div class="exhibition-card">
        <img src="../assets/images/marharyta.jpg" alt="Маргарита">
        <div class="card-content">
          <div class="text-content">
            <h3 data-uk="Маргарита" data-en="Margherita">Маргарита</h3>
            <p class="price">259 грн</p>
          </div>
          <a href="#" class="btn">
            <img src="../assets/images/shopping-cart.png" alt="Замовити" class="btn-icon">
          </a>
        </div>
      </div>
      
      <div class="exhibition-card">
        <img src="../assets/images/milani.jpg" alt="Мілані">
        <div class="card-content">
          <div class="text-content">
            <h3 data-uk="Мілані" data-en="Milani">Мілані</h3>
            <p class="price">369 грн</p>
          </div>
          <a href="#" class="btn">
            <img src="../assets/images/shopping-cart.png" alt="Замовити" class="btn-icon">
          </a>
        </div>
      </div>          
    </div>

    <section id="snacks"></section>
    <h2 class="section-title" data-uk="Закуски" data-en="Snacks">Закуски</h2>

    <div class="exhibitions-grid">
      <div class="exhibition-card">
        <img src="../assets/images/snack1.png" alt="snack1">
        <div class="card-content">
          <div class="text-content">
            <h3 data-uk="М'ясо і картопля" data-en="Meat and potatoes">М'ясо і картопля</h3>
            <p class="price">149 грн</p>
          </div>
          <a href="#" class="btn">
            <img src="../assets/images/shopping-cart.png" alt="Замовити" class="btn-icon">
          </a>
        </div>
      </div>
      
      <div class="exhibition-card">
        <img src="../assets/images/snack2.png" alt="snack2">
        <div class="card-content">
          <div class="text-content">
            <h3 data-uk="Попкорн з курки" data-en="Chicken popcorn">Попкорн з курки</h3>
            <p class="price">129 грн</p>
          </div>
          <a href="#" class="btn">
            <img src="../assets/images/shopping-cart.png" alt="Замовити" class="btn-icon">
          </a>
        </div>
      </div>
      
      <div class="exhibition-card">
        <img src="../assets/images/snack3.png" alt="snack3">
        <div class="card-content">
          <div class="text-content">
            <h3 data-uk="Попкорн з окуня" data-en="Perch popcorn">Попкорн з окуня</h3>
            <p class="price">159 грн</p>
          </div>
          <a href="#" class="btn">
            <img src="../assets/images/shopping-cart.png" alt="Замовити" class="btn-icon">
          </a>
        </div>
      </div>
      
      <div class="exhibition-card">
        <img src="../assets/images/snack4.png" alt="snack4">
        <div class="card-content">
          <div class="text-content">
            <h3 data-uk="КорнДог Сосиска" data-en="CornDog Sausage">КорнДог Сосиска</h3>
            <p class="price">99 грн</p>
          </div>
          <a href="#" class="btn">
            <img src="../assets/images/shopping-cart.png" alt="Замовити" class="btn-icon">
          </a>
        </div>
      </div>
      
      <div class="exhibition-card">
        <img src="../assets/images/snack5.png" alt="snack5">
        <div class="card-content">
          <div class="text-content">
            <h3 data-uk="КорнДог Чізі" data-en="Cheesy CornDog">КорнДог Чізі</h3>
            <p class="price">109 грн</p>
          </div>
          <a href="#" class="btn">
            <img src="../assets/images/shopping-cart.png" alt="Замовити" class="btn-icon">
          </a>
        </div>
      </div>
      
      <div class="exhibition-card">
        <img src="../assets/images/snack6.png" alt="snack6">
        <div class="card-content">
          <div class="text-content">
            <h3 data-uk="Крила хот" data-en="Wings of hot">Крила хот</h3>
            <p class="price">189 грн</p>
          </div>
          <a href="#" class="btn">
            <img src="../assets/images/shopping-cart.png" alt="Замовити" class="btn-icon">
          </a>
        </div>
      </div>
      
      <div class="exhibition-card">
        <img src="../assets/images/snack7.png" alt="snack7">
        <div class="card-content">
          <div class="text-content">
            <h3 data-uk="Крила дейлі" data-en="Dailey wings">Крила дейлі</h3>
            <p class="price">179 грн</p>
          </div>
          <a href="#" class="btn">
            <img src="../assets/images/shopping-cart.png" alt="Замовити" class="btn-icon">
          </a>
        </div>
      </div>
      
      <div class="exhibition-card">
        <img src="../assets/images/snack8.png" alt="snack8">
        <div class="card-content">
          <div class="text-content">
            <h3 data-uk="Фрі" data-en="French fries">Фрі</h3>
            <p class="price">59 грн</p>
          </div>
          <a href="#" class="btn">
            <img src="../assets/images/shopping-cart.png" alt="Замовити" class="btn-icon">
          </a>
        </div>
      </div>    
    </div>
    
    <section id="drinks"></section>
    <h2 class="section-title" data-uk="Напої" data-en="Drinks">Напої</h2>
    <div class="exhibitions-grid">
        
        <?php

        // Зчитуємо вміст файлу в масив
        $cocktails = file('../assets/cocktails', FILE_IGNORE_NEW_LINES);

        // Перевірка, чи є дані в файлі
        if ($cocktails !== false) {
            for ($i = 0; $i < 8; $i++) {
                // Розділяємо кожен рядок на українську, англійську версію і ціну
                list($ukr_name, $eng_name, $price) = explode(';', $cocktails[$i]);

                // Виведення картки для кожного коктейлю
                echo '
                    <div class="exhibition-card">
                        <img src="../assets/images/Drink' . ($i + 1) . '.png" alt="' . $ukr_name . '">
                        <div class="card-content">
                            <div class="text-content">
                                <h3 data-uk="' . $ukr_name . '" data-en="' . $eng_name . '">' . $ukr_name . '</h3>
                                <p class="price">' . $price . '</p>
                            </div>
                            <a href="#" class="btn">
                                <img src="../assets/images/shopping-cart.png" alt="Замовити" class="btn-icon">
                            </a>
                        </div>
                    </div>
                ';
            }
        } else {
            echo 'Не вдалося завантажити список коктейлів.';
        }

        ?>



      
      
    </div>
  </main>

  <footer class="footer">
    <p>
      <span data-uk="Контактна інформація" data-en="Contact Information">Контактна інформація</span>: 
      (123) 456-7890 | 
      <a href="mailto:smachnapizza@gmail.com">info@smachnapizza.com</a>
    </p>
    
    <p>
      <span data-uk="Слідкуйте за нами" data-en="Follow us">Слідкуйте за нами</span>: 
      <a href="https://www.facebook.com/">Facebook</a> | 
      <a href="https://www.instagram.com/">Instagram</a>
    </p>
    
    <p>
      <span data-uk="© 2024 Смачна Піца. Всі права захищені." data-en="© 2024 Smachna Pizza. All rights reserved.">
        &copy; 2024 Смачна Піца. Всі права захищені.
      </span>
    </p>    
  </footer>

</body>
</html>