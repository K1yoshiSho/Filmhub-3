var autocomplete = ['Avengers: Endgame', 'Hawkeye', 'Spider-Man: No Way Home', 'Black Widow', 'Dune', 'Free Guy', 'Zack Snyders Justice League', 'Platform', 'Raya', 'Scoob!'];
window.onload = function () { // Если страница прогрузилась до конца
  document.getElementById('inputName').onkeyup = keyUp; // Высчитываем символы и передаем в переменную keyUp
}

function keyUp(e) {
  var e = e || window.event; // Для совместимости
  switch (e.keyCode) { //keyCode переобразуем нажатую клавишу в строку (цифра)
  case 40: // ArrowDown
    var selected = -1;
    var spans = document.getElementById('autocomplete').getElementsByTagName('button');
    for (i = 0; i <= spans.length; i++)
      if (i in spans && spans[i].className == 'selected') {
        spans[i].className = '';
        selected = i;
      }
    selected++;
    for (i = 0; i <= spans.length; i++)
      if (i in spans && i == selected) {
        spans[i].className = 'selected';
      }
    break;
  case 38: // ArrowUp
    var spans = document.getElementById('autocomplete').getElementsByTagName('button');
    var selected = spans.length;
    for (i = 0; i <= spans.length; i++)
      if (i in spans && spans[i].className == 'selected') {
        spans[i].className = '';
        selected = i;
      }
    selected--;
    for (i = 0; i <= spans.length; i++)
      if (i in spans && i == selected) {
        spans[i].className = 'selected';
      }
    break;
  case 13: // Enter
    var spans = document.getElementById('autocomplete').getElementsByTagName('button');
    for (i = 0; i <= spans.length; i++)
      if (i in spans && spans[i].className == 'selected') {
        document.getElementById('inputName').value = spans[i].innerHTML;
        document.getElementById('autocomplete').innerHTML = '';
      }
    break;
  default:
    var div = document.getElementById('autocomplete');
    var value = document.getElementById('inputName').value;
    div.innerHTML = '';
    if (value.length > 0) {
      autocomplete.forEach(function (elem, index) { // Перебор массива с именами фильмов
        var regex = new RegExp("^" + value, "i"); // Создаём объект регулярного выражения
        if (elem.match(regex)) {
          var click_func = "choiseMovie('" + autocomplete[index] + "')";
          div.innerHTML += '<h4 id = "autocomplete" type="button" onclick="' + click_func + '">' + autocomplete[index] + '</h4>';
        }
      });
    }
  }
}
var choiseMovie = function (movieName) {
  document.getElementById('inputName').value = movieName;
  document.getElementById('autocomplete').innerHTML = '';
};

$(document).ready(function () {
      $('#searchMovie').click(function (e) {
        var inputvalue = $("#inputName").val();
        if (inputvalue == "Hawkeye")
          window.location.replace("singlePages/hawkeye");
        else if (inputvalue == "Avengers: Endgame")
          window.location.replace("singlePages/avengers");
        else if (inputvalue == "Spider-Man: No Way Home")
          window.location.replace("singlePages/spiderman");
        else if (inputvalue == "Black Widow")
          window.location.replace("singlePages/blackwidow");
        else if (inputvalue == "Dune")
          window.location.replace("singlePages/dune");
        else if (inputvalue == "Free Guy")
          window.location.replace("singlePages/freeguy");
        else if (inputvalue == "Zack Snyders Justice League")
          window.location.replace("singlePages/justiceleague");
        else if (inputvalue == "Platform")
          window.location.replace("singlePages/platform");
        else if (inputvalue == "Raya")
          window.location.replace("singlePages/raya");
        else if (inputvalue == "Scoob!")
          window.location.replace("singlePages/scoob");
      });
    });
