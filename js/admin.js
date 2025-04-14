document.addEventListener('DOMContentLoaded', () => {
    const signupNav = document.getElementById('signupNav');
    const loginNav = document.getElementById('loginNav');
    const mainForm = document.querySelector('.main');
    const signupBtn = document.getElementById('signupBtn');
    const loginBtn = document.getElementById('loginBtn');
    const signupForm = document.querySelector('.signup-form');
    const loginForm = document.querySelector('.login-form');

    // Function to show the main form
    const showMainForm = () => {
        mainForm.style.display = 'flex';
    };

    signupNav.addEventListener('click', () => {
        showMainForm();
        signupBtn.click(); // Show signup form by default
    });

    loginNav.addEventListener('click', () => {
        showMainForm();
        loginBtn.click(); // Show login form
    });

    signupBtn.addEventListener('click', () => {
        signupBtn.classList.add('active');
        loginBtn.classList.remove('active');
        signupForm.style.display = 'flex';
        loginForm.style.display = 'none';
    });

    loginBtn.addEventListener('click', () => {
        loginBtn.classList.add('active');
        signupBtn.classList.remove('active');
        signupForm.style.display = 'none';
        loginForm.style.display = 'flex';
    });
});
