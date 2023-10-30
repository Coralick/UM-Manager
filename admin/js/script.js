// использование в качестве обработчика анонимной функции
jQuery(document).ready(function($) {
  // Ваш код для слушателя событий
  // $('.sorted-column').on('click', myFunction);

  $('.inp').on('click', function(){
    console.log('Работает')
    $('.inp').on('change', myFunction)
  });
  
  
  // Создаем объект с данными, которые нужно отправить на сервер
  var dataToSend = {
    action : 'my_ajax_handler',
    data : {
      name: "John",
      age: 30,
      email: "john@example.com"
    }
  };

// Отправляем данные на сервер с помощью AJAX-запроса
  $.ajax({
    url: my_ajax.ajaxurl, // Указываем URL сервера, куда будем отправлять данные
    type: "POST", // Определяем метод запроса (POST - для отправки данных)
    data: dataToSend, // Указываем данные для отправки
    
    success: function(response) {
      // Обработка успешного ответа от сервера
      console.log("Данные успешно отправлены на сервер");
      console.log(response); // Выводим ответ от сервера в консоль
    },
    
    error: function(xhr) {
      // Обработка ошибки при отправке данных
      console.log("Ошибка при отправке данных на сервер");
      console.log(xhr.statusText); // Выводим текст ошибки в консоль
    }
  });

});

var SearchData = function() {
  let value = this.value
  console.log(value)
}

  var FilterData = function() {
    let value = this.value
    console.log(value)
  }
  const myFunction = () => {
    console.log('Даааааа, работает ')
  }