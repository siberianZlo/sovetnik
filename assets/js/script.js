if(window.location.pathname=='/') {
        /* Индекс слайда по умолчанию */
    let slideIndex = 1;
    showSlides(slideIndex);

    /* Функция увеличивает индекс на 1, показывает следующй слайд*/
    function plusSlide() {
        showSlides(slideIndex += 1);
    }

    /* Функция уменьшяет индекс на 1, показывает предыдущий слайд*/
    function minusSlide() {
        showSlides(slideIndex -= 1);  
    }

    /* Устанавливает текущий слайд */
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    /* Основная функция сладера */
    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("item");
        if (n > slides.length) {
        slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex - 1].style.display = "block";
    }
}

// Форма обратной связи попап

let form = document.querySelector('.form');
let button = document.querySelectorAll('.click-form');
let zatimnenie = document.querySelector('.zatimnenie');

document.querySelector('.close').onclick = function() {
    zatimnenie.style.display = 'none'
    document.querySelector('body').style.overflowY = 'auto';
    document.querySelector('body').style.overflowX = 'hidden';
};

for (let i = 0; i < button.length; i++) {
    button[i].onclick = function() {
        zatimnenie.style.display = 'block'
        document.querySelector('body').style.overflow = 'hidden';

    }
}
