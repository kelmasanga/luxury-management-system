const logregBox = document.querySelector(' .logreg-box');
const loginLink = document.querySelector(' .loginLink');
const registerLink = document.querySelector(' .register-link'); 

registerLink.addEventListener('click', () => {
    logregBox.classList.add('active');
});
    loginLink.addEventListener('click', () => {
        logregBox.classList.remove('active');
});

