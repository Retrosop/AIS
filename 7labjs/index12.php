<html>
<head>
 <script>
      function addition() {
        var a = parseInt(document.getElementById("a").value);
        var b = parseInt(document.getElementById("b").value);

        if (isNaN(a) == true) a = 10;
        if (isNaN(b) == true) b = 5;

        var c = a + b;

        document.getElementById("result").innerHTML = a + " + " + b + " = " + c;
      }
    </script>

</head>
<body>
    <form>
      <input id="a" type="text" value="1" /><br />
      <input id="b" type="text" value="1" /><br />
      <input type="button" value="Сложить 2 два числа" onclick="addition();" /><br />
    </form>
    <div id="result"></div>
  </body>
</html>