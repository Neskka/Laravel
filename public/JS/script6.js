document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('edit-data-btn').addEventListener('click', function() {
        const form = document.getElementById('edit-data-form');
        if (form) {
            form.style.display = form.style.display === 'none' ? 'block' : 'none';
        }
    });

    document.getElementById('change-password-btn').addEventListener('click', function() {
        const form = document.getElementById('change-password-form');
        form.style.display = form.style.display === 'none' ? 'block' : 'none';
    });
});