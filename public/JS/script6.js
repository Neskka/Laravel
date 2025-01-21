document.addEventListener('DOMContentLoaded', function() {
    // Obsługuje kliknięcie na przycisk 'Zmień hasło'
    const changePasswordButton = document.getElementById('change-password-btn');
    const changePasswordForm = document.getElementById('change-password-form');

    if (changePasswordButton && changePasswordForm) {
        changePasswordButton.addEventListener('click', function() {
            // Wyświetlenie formularza zmiany hasła
            changePasswordForm.style.display = (changePasswordForm.style.display === 'none' || changePasswordForm.style.display === '') ? 'block' : 'none';
        });
    }
});