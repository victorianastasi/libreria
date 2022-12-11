
document.addEventListener("DOMContentLoaded", function() { 
    
    const title = document.getElementById('newTitle');
    const author = document.getElementById('newAuthor');
    const year = document.getElementById('newYear');
    const country = document.getElementById('newCountry');
    const language = document.getElementById('newLanguage');
    const stock = document.getElementById('newStock');

    const inputElements = [title, author, year, country,language, stock];

    const msgError = document.getElementsByClassName('msg');

    let correctIcon = '<i class="fas fa-check success-icon input-icon"></i>';
    let incorrectIcon = '<span><i class="fas fa-times error-icon input-icon"></i></span>';
    let textEmpty = '<span><small class="text-input-warning">Complete este campo</small></span>';
    let warningText= `<div>${textEmpty} ${incorrectIcon} </div> `;
    const submitTextError = document.getElementById('submit-text-error');

    const styleFocusInput = (input, index) => {
        input.addEventListener('focus', (e) => {
            input.classList.remove('success-input');
            input.classList.remove('error-input');
            msgError[index].innerHTML = "";
        })
    }
    const validateInputText = (input, index) => {
        styleFocusInput(input, index);
        input.addEventListener('blur', (e) => {
            if (input.value.length === 0){
                input.classList.add('error-input');
                msgError[index].innerHTML = warningText;
                submitTextError.classList.add('d-none');
                submitTextError.classList.remove('d-block');                
            } else {
                input.classList.remove('error-input');
                input.classList.add('success-input');
                msgError[index].innerHTML = correctIcon;                
            }
        })
    }

    const validateInputTextOnSubmit = (input, index) => {
        styleFocusInput(input, index);
        if (input.value.length === 0){
            input.classList.add('error-input');
            msgError[index].innerHTML = warningText;
            submitTextError.classList.add('d-none');
            submitTextError.classList.remove('d-block');
        } else {
            input.classList.remove('error-input');
            input.classList.add('success-input');
            msgError[index].innerHTML = correctIcon;    
        }
    }

    inputElements.forEach((element, i) => {
        validateInputText(element, i);
    });

    document.getElementById('form-submit').addEventListener('click', function (event) {
    
        if(!validateInputTextOnSubmit(title, 0) && !validateInputTextOnSubmit(author, 1) && !validateInputTextOnSubmit(year, 2) && !validateInputTextOnSubmit(country, 3) && !validateInputTextOnSubmit(language, 4) && !validateInputTextOnSubmit(stock, 5)) {
        
        validateInputTextOnSubmit(title, 0);
        validateInputTextOnSubmit(author, 1);
        validateInputTextOnSubmit(year, 2);
        validateInputTextOnSubmit(country, 3);
        validateInputTextOnSubmit(language, 4);
        validateInputTextOnSubmit(stock, 5);
        swal("Debes completar todos los campos!", "Vuelve a intentarlo", "error");
        
        }
    });

});