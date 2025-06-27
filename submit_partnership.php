<script>
document.getElementById('partnerForm').addEventListener('submit', async function(e) {
    e.preventDefault();
    
    const form = e.target;
    const formData = new FormData(form);
    const submitBtn = form.querySelector('button[type="submit"]');
    const messageDiv = document.getElementById('formMessage');
    
    // Валидация
    if (!formData.get('name') || !formData.get('email') || !formData.get('phone')) {
        messageDiv.innerHTML = '<p class="error-message">Заполните все обязательные поля</p>';
        messageDiv.style.display = 'block';
        return;
    }

    submitBtn.disabled = true;
    messageDiv.innerHTML = '<p class="form-loading">Отправка данных...</p>';
    messageDiv.style.display = 'block';

    try {
        const response = await fetch('https://script.google.com/macros/s/AKfycbw7eO7g0-NLyC1O6dqx5ZWQzS8SRSNCw1cGkd04OjRD1iWBHLZhXWBUIM7j8XFFFBGr/exec', {
            method: 'POST',
            body: JSON.stringify(Object.fromEntries(formData)),
            headers: {
                'Content-Type': 'application/json'
            }
        });
        
        const data = await response.json();
        
        if (data.success) {
            messageDiv.innerHTML = '<p class="success-message">Спасибо! Ваша заявка принята.</p>';
            form.reset();
        } else {
            throw new Error(data.error || 'Ошибка сервера');
        }
    } catch (error) {
        console.error('Ошибка:', error);
        messageDiv.innerHTML = `<p class="error-message">Ошибка отправки: ${error.message}</p>`;
    } finally {
        submitBtn.disabled = false;
        setTimeout(() => {
            messageDiv.style.display = 'none';
        }, 5000);
    }
});
</script>