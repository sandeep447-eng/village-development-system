
/* Navbar js */
const toggleButton = document.querySelector('.toggle-button');
const navLinks = document.querySelector('.nav-links');

toggleButton.addEventListener('click', () => {
  navLinks.classList.toggle('active');
});

/* Sign up form validation start*/
function signupValid() {
    var a=F.username.value;
    if(a.length < 1){
        alert("Name field cannot blank");
        return false;
    }
    var count=0;
    for(i=0;i<a.length;i++){
        ch=a.charCodeAt(i);
        if((ch>=65 && ch<=90) || (ch>=97 && ch<=122) || (ch==32))
            count++; 
    }
    if(count!=a.length){
        alert("Name field cannot contain digit or other symbol");
        return false;
    }
    var b=F.password.value;
    var c=F.re-password.value;
    if(b!=c){
        alert("password and repassword must be same");
        return false;
    }
    return true;
    
}
/* signup form validation end */

/* login/ signup form code */
document.addEventListener('DOMContentLoaded', () => {
    const signupBtn = document.getElementById('signupBtn');
    const loginBtn = document.getElementById('loginBtn');
    const signupForm = document.querySelector('.signup-form');
    const loginForm = document.querySelector('.login-form');

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


