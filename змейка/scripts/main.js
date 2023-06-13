let scoreBlock;
let score = 0;

const config = {
  step: 0,
  maxStep: 32,
  sizeCell: 32,
  sizeBerry: 12 
}

const snake = {
  x: 64,
  y: 64,
  dx: config.sizeCell,
  dy: 0,
  tails: [],
  maxTails: 3,
  speed: config.sizeCell // Сохраняем скорость змеи
};

let berry = {
  x: 0,
  y: 0
} 

let paused = false;
let gameStarted = false;

let canvas = document.querySelector("#game-canvas");
canvas.height = config.sizeCell * Math.floor(canvas.clientHeight / config.sizeCell);
let context = canvas.getContext("2d");
scoreBlock = document.querySelector(".game-score .score-count");
drawScore();

function gameLoop() {
  requestAnimationFrame(gameLoop);
  if (!gameStarted || paused) {
    return;
  }
  
  // Теперь, если скорость змеи была изменена при паузе, мы не увеличиваем config.step
  if (!snake.speed || ++config.step < config.maxStep) {
    return;
  }
  config.step = 0;

  context.clearRect(0, 0, canvas.width, canvas.height);

  drawBerry();
  drawSnake();
}

function startGame() {
  gameStarted = true;
  snake.speed = config.sizeCell; // Начальная скорость змеи
  requestAnimationFrame(gameLoop);
}

function drawSnake() {
  snake.x += snake.dx;
  snake.y += snake.dy;

  collisionBorder();

  snake.tails.unshift({ x: snake.x, y: snake.y });

  if (snake.tails.length > snake.maxTails) {
    snake.tails.pop();
  }

  snake.tails.forEach(function (tail, index) {
    let x = Math.floor(tail.x / config.sizeCell) * config.sizeCell;
    let y = Math.floor(tail.y / config.sizeCell) * config.sizeCell;

    if (index == 0) {
      context.fillStyle = "#146907";
    } else {
      context.fillStyle = "#2ac712";
    }

    context.fillRect(x, y, config.sizeCell, config.sizeCell);

    if (x === berry.x && y === berry.y) {
      snake.maxTails++;
      incScore();
      randomPositionBerry();
    }

    for (let i = index + 1; i < snake.tails.length; i++) {
      if (
        x == Math.floor(snake.tails[i].x / config.sizeCell) * config.sizeCell &&
        y == Math.floor(snake.tails[i].y / config.sizeCell) * config.sizeCell
      ) {
        refreshGame();
      }
    }
  });
}

function collisionBorder() {
  if (snake.x < 0) {
    refreshGame();
  }
  if (snake.x >= canvas.width) {
    refreshGame();
  }
  if (snake.y < 0) {
    refreshGame();
  }
  if (snake.y >= canvas.height) {
    refreshGame();
  }
}

function refreshGame() {
  score = 0;
  drawScore();

  snake.x = 160;
  snake.y = 160;
  snake.tails = [];
  snake.maxTails = 3;
  snake.dx = config.sizeCell;
  snake.dy = 0;
  snake.speed = config.sizeCell; // Устанавливаем скорость змеи после перезагрузки игры

  randomPositionBerry();
}

function drawBerry() {
  context.beginPath();
  context.fillStyle = "#e60b1e";
  context.arc(
    berry.x + config.sizeCell / 2,
    berry.y + config.sizeCell / 2,
    config.sizeBerry,
    0,
    2 * Math.PI
  );
  context.fill();
}

function randomPositionBerry() {
	berry.x = getRandomInt(0, canvas.width / config.sizeCell) * config.sizeCell;
  berry.y = getRandomInt(0, canvas.height / config.sizeCell) * config.sizeCell;

  berry.x = Math.floor(berry.x / config.sizeCell) * config.sizeCell;
  berry.y = Math.floor(berry.y / config.sizeCell) * config.sizeCell;
}

function incScore() {
  score++;
  drawScore();
}

function drawScore() {
  scoreBlock.innerHTML = score;
}

function getRandomInt(min, max) {
  return Math.floor(Math.random() * (max - min) + min);
}

document.addEventListener("keydown", function (e) {
  if ( e.code == "KeyW" && snake.dy !== config.sizeCell ) {
    snake.dy = -config.sizeCell;
    snake.dx = 0;
  } else if ( e.code == "KeyA" && snake.dx !== config.sizeCell ) {
    snake.dx = -config.sizeCell;
    snake.dy = 0;
  } else if ( e.code == "KeyS" && snake.dy !== -config.sizeCell ) {
    snake.dy = config.sizeCell;
    snake.dx = 0;
  } else if ( e.code == "KeyD" && snake.dx !== -config.sizeCell ) {
    snake.dx = config.sizeCell;
    snake.dy = 0;
  } else if ( e.code == "Space" ) {
    // Задержка передвижения змеи будет равна продолжительности паузы
    if (!paused) {
      let now = new Date().getTime();
      snake.speed = 0;
      paused = true;
      pausedTime = now;
    } else {
      let now = new Date().getTime();
      snake.speed = config.sizeCell / ((now - pausedTime) / 1000);
      paused = false;
    }
  }
});

startGame();