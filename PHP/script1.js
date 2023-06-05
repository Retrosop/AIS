// выбираем элемент пузыря
var bubble1 = document.querySelector('.bubble1');

// создаем функцию, которая будет изменять положение пузыря
function moveBubble1() {
  // получаем ширину и высоту окна браузера
  var width = window.innerWidth - bubble1.offsetWidth;
  var height = window.innerHeight - bubble1.offsetHeight;

  // генерируем случайные координаты для пузыря
  var x = Math.floor(Math.random() * width);
  var y = Math.floor(Math.random() * height);

  // устанавливаем новое положение пузыря
  bubble1.style.left = x + 'px';
  bubble1.style.top = y + 'px';
}

// вызываем функцию для первоначального размещения пузыря
moveBubble();

// устанавливаем интервал, чтобы пузырь перемещался каждые 5 секунд
setInterval(moveBubble1, 1200);

