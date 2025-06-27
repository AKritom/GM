<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Наши партнеры | Gourmeta Beverage Systems</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .partnership-form {
            max-width: 600px;
            margin: 40px auto;
            padding: 30px;
            background: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-family: 'Roboto', sans-serif;
        }
        
        .form-group textarea {
            min-height: 120px;
            resize: vertical;
        }
        
        .btn {
            background: #4CAF50;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s;
        }
        
        .btn:hover {
            background: #45a049;
        }
        
        .success-message {
            padding: 15px;
            background: #4CAF50;
            color: white;
            margin-bottom: 20px;
            border-radius: 4px;
            text-align: center;
        }
        
        .error-message {
            padding: 15px;
            background: #f44336;
            color: white;
            margin-bottom: 20px;
            border-radius: 4px;
            text-align: center;
        }
        
        .form-loading {
            color: #2196F3;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Шапка, баннер и другие секции остаются без изменений -->

    <!-- Форма для партнерства -->
    <div class="partnership-form">
        <h3>Заявка на партнерство</h3>
        <form id="partnerForm">
            <div class="form-group">
                <input type="text" name="name" placeholder="Ваше имя" required>
            </div>
            <div class="form-group">
                <input type="tel" name="phone" placeholder="Телефон" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <textarea name="business_info" placeholder="Расскажите о вашем бизнесе" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn">Отправить заявку</button>
        </form>
        <div id="formMessage"></div>
    </div>

    <!-- Футер и другие секции остаются без изменений -->

    <script>
        document.getElementById('partnerForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const form = e.target;
            const formData = new FormData(form);
            const submitBtn = form.querySelector('button[type="submit"]');
            const messageDiv = document.getElementById('formMessage');
            
            submitBtn.disabled = true;
            messageDiv.innerHTML = '<p class="form-loading">Отправка данных...</p>';
            messageDiv.style.display = 'block';

            fetch('https://script.google.com/macros/s/AKfycbw7eO7g0-NLyC1O6dqx5ZWQzS8SRSNCw1cGkd04OjRD1iWBHLZhXWBUIM7j8XFFFBGr/exec', {
                method: 'POST',
                body: JSON.stringify(Object.fromEntries(formData)),
                headers: {
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    messageDiv.innerHTML = '<p class="success-message">Заявка успешно отправлена!</p>';
                    form.reset();
                } else {
                    messageDiv.innerHTML = '<p class="error-message">Ошибка: ' + (data.error || 'Неизвестная ошибка') + '</p>';
                }
            })
            .catch(error => {
                messageDiv.innerHTML = '<p class="error-message">Ошибка соединения с сервером</p>';
            })
            .finally(() => {
                submitBtn.disabled = false;
                setTimeout(() => {
                    messageDiv.style.display = 'none';
                }, 5000);
            });
        });
    </script>
</body>
</html>