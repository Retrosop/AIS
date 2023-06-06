<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Поисковая система публикаций</title>

  <!-- Подключение стилей Bootstrap 5 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">

  <!-- Подключение стилей CSS -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Подключение скриптов Bootstrap 5 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>
</head>
<body>

  <!-- Верхняя панель навигации -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Поисковая система</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Главная</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">О сайте</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Контакты</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Основное содержимое страницы -->
  <div class="container mt-5">
    <h1 class="text-center mb-5">Поиск публикаций</h1>
    
    
    <!-- Форма поиска публикации -->
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form action="php/search.php" method="post">
          <div class="mb-3">
            <label for="inputTitle" class="form-label">Заголовок</label>
            <input name="title" type="text" class="form-control" id="inputTitle">
          </div>
          <div class="mb-3">
            <label for="inputAuthor" class="form-label">Автор</label>
            <input name="author" type="text" class="form-control" id="inputAuthor">
          </div>
          <div class="mb-3">
            <label for="inputDate" class="form-label">Дата</label>
            <input name="date" type="date" date-format="yyyy-mm-dd" class="form-control" id="inputDate">
          </div>
          <button type="submit" class="btn btn-primary">Найти</button>
        </form>
      </div>
    </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    

  </div>

  <!-- Подвал страницы -->
  <footer class="bg-light p-3">
    <div class="container">
      <p class="text-center">&copy; 2023 Поисковая система публикаций</p>
    </div>
  </footer>

</body>
</html>