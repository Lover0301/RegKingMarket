let offset = 0; 
let sliderLine = document.querySelector('.slider-line'); 
let btnNext = document.getElementById('next'); 
let btnprev = document.getElementById('prev'); 

//функция для нажатия на кнопку "вперед"
function SliderNext(){ 
    offset = offset +1300; 
    if( offset > 2600){ 
        offset = 0; 
    }
    sliderLine.style.left = -offset + 'px'; 
}
//функция для нажатия на кнопку "Назад"
function SliderPrev(){ 
    offset = offset -=1300; 
    if( offset < 0){ 
        offset = 2600; 
    }
    sliderLine.style.left = -offset + 'px'; 
}
//Автоматическое переключение слайдера вперед через 5 секунд
(function AutoMathic(){setInterval(SliderNext, 6000)})()

//активация функций при нажатии на нужные кнопки
btnNext.addEventListener('click', SliderNext); 
btnprev.addEventListener('click', SliderPrev);

let input = document.getElementById('phone');

// Создаём маску для ввода телефона 
input.addEventListener('input', function() {
let phone = this.value.replace(/\D/g, ''); // Удаляем все символы, кроме цифр
phone = phone.substring(0, 11); // Ограничиваем длину номера телефона до 11 символов

let formattedPhone = ''; // Переменная для форматированного номера телефона
if (phone.length > 0) { //  Проверка, что поле ввода телефона не пустое.
formattedPhone = '+7(' + phone.substring(1, 1); 
}
if (phone.length > 1) { 
formattedPhone += '' + phone.substring(1, 4); 
}
if (phone.length > 4) { 
formattedPhone += ') ' + phone.substring(4, 7);
}
if (phone.length > 6) {
formattedPhone += '-' + phone.substring(7, 9);
}
if (phone.length > 8) {
formattedPhone += '-' + phone.substring(9, 11);
}
this.value = formattedPhone;
});

let element = document.getElementById('phone'); //Обращение к элементу через id
let maskOptions = {
  mask: '+{7}(000)000-00-00', //Использование "Маски" под номер телефона
  lazy: false //Показывает и заполняет поле с "Маской", только после ввода символов
};
let mask = IMask(element, maskOptions);

function noDigits(event) {
  if ("1234567890".indexOf(event.key) != -1)
  event.preventDefault();
  };