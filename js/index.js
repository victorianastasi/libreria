document.addEventListener("DOMContentLoaded", function() { 
    
    //Boton que lleva al top de la pagina, y aparece al hacer scroll
    btnTop = document.getElementById("btnTop");
    
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            btnTop.style.display = "block";
        } else {
            btnTop.style.display = "none";
        }
    };

    btnTop.addEventListener('click', (e) => {
        e.preventDefault();
        topScroll();
    });

    function topScroll() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0; 
    };
});
 