document.addEventListener('DOMContentLoaded', function() {
    const currentPage = location.pathname.split('/').pop();
    const navLinks = document.querySelectorAll('nav a');
    
    // Сбросим активные классы
    navLinks.forEach(link => link.classList.remove('active'));
    document.querySelectorAll('nav > ul > li').forEach(li => li.classList.remove('active'));
    
    // Активируем текущую страницу
    navLinks.forEach(link => {
        if (link.getAttribute('href') === currentPage) {
            link.classList.add('active');
            
            // Активируем родительский пункт для выпадающего меню
            const parentLi = link.closest('li');
            if (parentLi && parentLi.parentElement.classList.contains('dropdown-menu')) {
                const dropdownParent = parentLi.closest('.dropdown');
                if (dropdownParent) {
                    dropdownParent.classList.add('active');
                }
            }
        }
    });
    
    // Дополнительная активация для страниц оборудования
    if (currentPage === 'coffee-machines.html' || currentPage === 'refrigerators.html') {
        const equipmentLink = document.querySelector('nav a[href="equipment.html"]');
        if (equipmentLink) {
            equipmentLink.classList.add('active');
            const parentLi = equipmentLink.closest('li');
            if (parentLi) {
                parentLi.classList.add('active');
            }
        }
    }
    
    // Плавная прокрутка
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                window.scrollTo({
                    top: target.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Обработка выпадающего меню для мобильных
    const dropdowns = document.querySelectorAll('.dropdown');
    dropdowns.forEach(dropdown => {
        dropdown.addEventListener('click', function(e) {
            if (window.innerWidth <= 576) {
                e.preventDefault();
                const menu = this.querySelector('.dropdown-menu');
                menu.style.maxHeight = menu.style.maxHeight === '300px' ? '0' : '300px';
            }
        });
    });
});
// Функционал табов на странице продуктов
document.addEventListener('DOMContentLoaded', function() {
    // Табы
    const tabBtns = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');
    
    tabBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const tabId = this.getAttribute('data-tab');
            
            // Убираем активный класс у всех кнопок
            tabBtns.forEach(b => b.classList.remove('active'));
            // Добавляем активный класс текущей кнопке
            this.classList.add('active');
            
            // Скрываем все табы
            tabContents.forEach(content => {
                content.classList.remove('active');
            });
            
            // Показываем выбранный таб
            document.getElementById(tabId).classList.add('active');
        });
    });
    
    // Валидация форм
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            // Здесь можно добавить AJAX-отправку формы
            alert('Форма отправлена! Мы свяжемся с вами в ближайшее время.');
            form.reset();
        });
    });
});