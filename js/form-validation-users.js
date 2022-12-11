document.addEventListener("DOMContentLoaded", function() { 
    
    const user = document.getElementById('newUser');
    const pass = document.getElementById('newPass');
    const userMsg = document.getElementById('msgEmail');
    const passMsg = document.getElementById('msgPass');

    let correctIcon = '<i class="fas fa-check success-icon input-icon"></i>';
    let incorrectIcon = '<span><i class="fas fa-times error-icon input-icon"></i></span>';
    let textEmpty = '<span><small class="text-input-warning text-input-warning-user">Complete este campo</small></span>';
    let warningText= `<div>${textEmpty} ${incorrectIcon} </div> `;
    let warningCaracter = '<small class="text-input-warning text-input-warning-user">Incluye el simbolo @ en tu correo electrónico</small>';
    let warningEmail = '<small class="text-input-warning text-input-warning-user">Ingresa un correo electrónico válido</small>';
    
    const validateEmail = (user, length) => {
        user.addEventListener('focus', (e) => {
            user.classList.remove('success-input');
            user.classList.remove('error-input');
            userMsg.innerHTML = "";
        })
        
        user.addEventListener('blur', (e) => {
            e.preventDefault();
            const regex = new RegExp(/^[\w\.]+@([\w]+\.)+[\w]{2,4}/);
            const regexTest = regex.test(user.value);
            if (user.value.length === 0 || user.value.length < length){
                user.classList.add('error-input');
                userMsg.innerHTML = warningText;
            }else if (!user.value.includes("@")){
                user.classList.add('error-input');
                userMsg.innerHTML = `<div>${warningCaracter} ${incorrectIcon} </div> `;
            }else if (!regexTest){
                user.classList.add('error-input');
                userMsg.innerHTML = `<div>${warningEmail} ${incorrectIcon} </div> `;
            }else {
                user.classList.remove('error-input');
                user.classList.add('success-input');
                userMsg.innerHTML = correctIcon;                
            }
        })
    }

    const validatePassword = (pass, length) => {
        pass.addEventListener('focus', (e) => {
            pass.classList.remove('success-input');
            pass.classList.remove('error-input');
            passMsg.innerHTML = "";
        })
        
        pass.addEventListener('blur', (e) => {
            if (pass.value.length === 0 || pass.value.length < length){
                pass.classList.add('error-input');
                passMsg.innerHTML = warningText;
            }else {
                pass.classList.remove('error-input');
                pass.classList.add('success-input');
                passMsg.innerHTML = correctIcon;                
            }
        })
    }

    validateEmail(user, 8);
    validatePassword(pass, 4);

});