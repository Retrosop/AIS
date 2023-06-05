// выбираем элемент пузыря
var bubble = document.querySelector('.bubble');

// создаем функцию, которая будет изменять положение пузыря
function moveBubble() {
  // получаем ширину и высоту окна браузера
  var width = window.innerWidth - bubble.offsetWidth;
  var height = window.innerHeight - bubble.offsetHeight;

  // генерируем случайные координаты для пузыря
  var x = Math.floor(Math.random() * width);
  var y = Math.floor(Math.random() * height);

  // устанавливаем новое положение пузыря
  bubble.style.left = x + 'px';
  bubble.style.top = y + 'px';
}

// вызываем функцию для первоначального размещения пузыря
moveBubble();

// устанавливаем интервал, чтобы пузырь перемещался каждые 5 секунд
setInterval(moveBubble, 1000);

