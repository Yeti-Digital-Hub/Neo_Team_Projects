    const passwordInput = document.getElementById('passwordInput');
    const togglePassword = document.getElementById('togglePassword');

    const confirmPasswordInput = document.getElementById('confirmPasswordInput');
    const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');

    const passwordInputLogin = document.getElementById('passwordInputLogin');
    const togglePasswordLogin = document.getElementById('togglePasswordLogin');

    // Bascule du confirm password sign up
    togglePassword.addEventListener('click', () => {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
    });

    // Bascule du confirm password sign up
    toggleConfirmPassword.addEventListener('click', () => {
        const type = confirmPasswordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        confirmPasswordInput.setAttribute('type', type);
    });

    // Bascule du confirm password sign in
    togglePasswordLogin.addEventListener('click', () => {
        const type = passwordInputLogin.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInputLogin.setAttribute('type', type);
    });
