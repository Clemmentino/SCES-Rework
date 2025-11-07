document.addEventListener('DOMContentLoaded', function () {
  'use strict';

  const forms = document.querySelectorAll('.needs-validation');

  forms.forEach(form => {
    form.addEventListener('submit', function (event) {
      // Custom validation messages
      const username = form.querySelector('input[placeholder="Username"]');
      const password = form.querySelector('input[placeholder="Password"]');

      let valid = true;

      // Username check
      if (username && username.value.trim() === '') {
        showError(username, 'Please input username');
        valid = false;
        event.preventDefault();
        event.stopPropagation();
      } else if (username) {
        clearError(username);
      }

      // Password check
      if (password && password.value.trim() === '') {
        showError(password, 'Please input password');
        valid = false;
        event.preventDefault();
        event.stopPropagation();
      } else if (password) {
        clearError(password);
      }

      form.classList.add('was-validated');

      if (!valid) {
        event.preventDefault();
        event.stopPropagation();
      }

    }, false);
  });

  // Helper functions
  function showError(input, message) {
    let feedback = input.parentElement.querySelector('.invalid-feedback');
    if (!feedback) {
      feedback = document.createElement('div');
      feedback.className = 'invalid-feedback';
      feedback.style.display = 'block';
      input.parentElement.appendChild(feedback);
    }
    feedback.textContent = message;
    input.classList.add('is-invalid');
  }

  function clearError(input) {
    input.classList.remove('is-invalid');
    const feedback = input.parentElement.querySelector('.invalid-feedback');
    if (feedback) feedback.remove();
  }
});
