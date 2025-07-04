<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты | Gourmeta Beverage Systems</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contacts.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Шапка -->
    <header>
        <div class="container">
            <div class="header-top">
                <div class="logo">Gourmeta Beverage Systems</div>
                <nav>
                    <ul>
                        <li><a href="index.php">Главная</a></li>
                        <li class="dropdown">
                            <a href="equipment.php">Оборудование <i class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="coffee-machines.php">Кофемашины</a></li>
                                <li><a href="refrigerators.php">Холодильники</a></li>
                            </ul>
                        </li>
                        <li><a href="products.php">Продукты</a></li>
                        <li><a href="partners.php">Партнеры</a></li>
                        <li><a href="contacts.php" class="active">Контакты</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Контент страницы -->
    <main>
        <section id="contacts-main">
            <div class="container">
                <div class="section-title">
                    <h2>Контакты</h2>
                    <p>Свяжитесь с нами для получения дополнительной информации</p>
                </div>
                
                <div class="contact-container">
                    <div class="contact-info">
                        <h3>Наши контакты</h3>
                        <div class="contact-details">
                            <div class="contact-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="contact-item-content">
                                    <h4>Адрес</h4>
                                    <p>г. Москва,Ул. Вольная 35с8</p>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <i class="fas fa-phone"></i>
                                <div class="contact-item-content">
                                    <h4>Телефон</h4>
                                    <p>+7 (495) 123-45-67</p>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <i class="fas fa-envelope"></i>
                                <div class="contact-item-content">
                                    <h4>Email</h4>
                                    <p>info@gourmeta-systems.ru</p>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <i class="fas fa-clock"></i>
                                <div class="contact-item-content">
                                    <h4>Часы работы</h4>
                                    <p>Пн-Пт: 9:00 - 18:00</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="contact-departments">
                            <h3>Отделы компании</h3>
                            <div class="contact-item">
                                <i class="fas fa-user"></i>
                                <div class="contact-item-content">
                                    <h4>Отдел продаж</h4>
                                    <p>sales@gourmeta-systems.ru<br>+7 (495) 765-43-21</p>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <i class="fas fa-headset"></i>
                                <div class="contact-item-content">
                                    <h4>Техническая поддержка</h4>
                                    <p>support@gourmeta-systems.ru<br>+7 (495) 987-65-43</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="contact-form">
                        <h3>Напишите нам</h3>
                        <form>
                            <div class="form-group">
                                <label for="name">Ваше имя *</label>
                                <input type="text" id="name" required>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="phone">Телефон *</label>
                                    <input type="tel" id="phone" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="email">Email *</label>
                                    <input type="email" id="email" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="subject">Тема сообщения</label>
                                <select id="subject">
                                    <option value="sales">Отдел продаж</option>
                                    <option value="support">Техническая поддержка</option>
                                    <option value="partnership">Партнерство</option>
                                    <option value="other">Другое</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="message">Сообщение *</label>
                                <textarea id="message" rows="5" required></textarea>
                            </div>
                            
                            <button type="submit" class="btn">Отправить сообщение</button>
                        </form>
                    </div>
                </div>
                
                <div class="map-container">
                    <iframe 
                        src="https://yandex.ru/map-widget/v1/?um=constructor%3A6d1d8b1c8b6f8b8b8b8b8b8b8b8b8b8b8&amp;source=constructor" 
                        width="100%" 
                        height="100%"
                        title="Карта расположения офиса Gourmeta Beverage Systems"
                        aria-label="Карта расположения офиса"
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </section>
    </main>

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
                        <li>info@gourmeta-systems.ru</li>
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