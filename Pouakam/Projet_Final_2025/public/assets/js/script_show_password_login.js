    const passwordInputLogin = document.getElementById('passwordInputLogin');
    const togglePasswordLogin = document.getElementById('togglePasswordLogin');

    // Bascule du confirm password sign in
    togglePasswordLogin.addEventListener('click', () => {
        const type = passwordInputLogin.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInputLogin.setAttribute('type', type);
    });