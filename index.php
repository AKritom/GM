<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gourmeta Beverage Systems | Профессиональное оборудование</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Дополнительные стили для главной страницы */
        .hero-logo {
            max-width: 400px;
            margin: 0 auto 30px;
            display: block;
        }
        
        .hero-logo img {
            width: 100%;
            height: auto;
        }
        
        .hero h1 {
            margin-bottom: 15px;
        }
        
        .hero p {
            margin-bottom: 25px;
        }
        
        @media (max-width: 768px) {
            .hero-logo {
                max-width: 300px;
            }
            
            .hero h1 {
                font-size: 32px;
            }
        }
        
        @media (max-width: 480px) {
            .hero-logo {
                max-width: 250px;
            }
        }
    </style>
</head>
<body>
    <!-- Шапка -->
    <header>
        <div class="container">
            <div class="header-top">
                <div class="logo">Gourmeta Beverage Systems</div>
                <nav>
                    <ul>
                        <li><a href="index.php" class="active">Главная</a></li>
                        <li class="dropdown">
                            <a href="equipment.php">Оборудование <i class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="coffee-machines.php">Кофемашины</a></li>
                                <li><a href="refrigerators.php">Холодильники</a></li>
                            </ul>
                        </li>
                        <li><a href="products.php">Продукты</a></li>
                        <li><a href="partners.php">Партнеры</a></li>
                        <li><a href="contacts.php">Контакты</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

     <section class="hero" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.7)), url('img/hero-bg.jpg'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="hero-logo">
                <img src="img/gourmeta-logo.png" alt="Gourmeta Beverage Systems">
            </div>
            
            <h1>Профессиональное оборудование для HoReCa</h1>
            <p>Комплексные решения для ресторанов, баров, кофеен и отелей</p>
            <a href="#about" class="btn">Подробнее о нас</a>
        </div>
    </section>

    <!-- О компании -->
    <section id="about">
        <div class="container">
            <div class="section-title">
                <h2>О компании</h2>
            </div>
            <div class="about-content">
                <p><strong>Gourmeta Beverage Systems</strong> - ведущий поставщик профессионального оборудования для индустрии гостеприимства с 2010 года. Мы специализируемся на комплексном оснащении предприятий общественного питания и гостиничного бизнеса.</p>
                
                <h3>Наши преимущества:</h3>
                <ul>
                    <li>Прямые поставки от производителей</li>
                    <li>Сервисное обслуживание 24/7</li>
                    <li>Индивидуальные решения под ваш бизнес</li>
                    <li>Финансовые программы лизинга</li>
                    <li>Монтаж и обучение персонала</li>
                </ul>
                
                <p>За 12 лет работы мы оснастили более 500 объектов по всей России, от небольших кофеен до ресторанов премиум-класса и сетевых проектов.</p>
            </div>
        </div>
    </section>

    <!-- Оборудование -->
    <section id="equipment" style="background-color: #f0f0f0;">
        <div class="container">
            <div class="section-title">
                <h2>Категории оборудования</h2>
            </div>
            <div class="equipment-categories">
                <div class="category-card">
                    <div class="category-img" style="background-image: url('img/coffee-machines-banner.jpg');"></div>
                    <div class="category-content">
                        <h3>Профессиональные кофемашины</h3>
                        <p>Автоматические и полуавтоматические решения для приготовления идеального кофе</p>
                        <a href="coffee-machines.php" class="btn">Перейти в каталог</a>
                    </div>
                </div>
                
                <div class="category-card">
                    <div class="category-img" style="background-image: url('img/refrigerators-banner.jpg');"></div>
                    <div class="category-content">
                        <h3>Холодильное оборудование</h3>
                        <p>Холодильные камеры </p>
                        <a href="refrigerators.php" class="btn">Перейти в каталог</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Футер -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>Компания</h3>
                    <ul>
                        <li><a href="index.php">О нас</a></li>
                        <li><a href="#">Новости</a></li>
                        <li><a href="#">Вакансии</a></li>
                        <li><a href="#">Документы</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Оборудование</h3>
                    <ul>
                        <li><a href="coffee-machines.php">Кофемашины</a></li>
                        <li><a href="refrigerators.php">Холодильники</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Поддержка</h3>
                    <ul>
                        <li><a href="#">Техническая поддержка</a></li>
                        <li><a href="#">Сервисные центры</a></li>
                        <li><a href="#">Запчасти</a></li>
                        <li><a href="#">Гарантия</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Контакты</h3>
                    <ul>
                        <li>г. Москва,Ул. Вольная 35с8</li>
                        <li>+7 (495) 123-45-67</li>
                        <li>info@GourmetaBeverageSystems.ru</li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2025 Gourmeta Beverage Systems. Все права защищены.</p>
            </div>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>