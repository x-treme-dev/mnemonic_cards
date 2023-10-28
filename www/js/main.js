/* 
 * Обработчики для кнопок и полей ввода
 * Ajax - запросы к контроллеру
 * 
 */

  $(document).ready(function(){
        // Поле ввода input "new category"для ввода нового значения категории
       // взять значение текстового поля и отправить post-запрос
        $(".buttons_group:first-child").click(function(){
        var newCategory = $("#input_NewCategory").val();
        if(newCategory !==''){
      
        console.log(newCategory);
        toChangeSequenceElements(1);
          
        //Ajax-запрос: получили данные от пользователя и передали в контроллер CardsController.php
        $.ajax({
            type: 'POST',
            asinc: false,
            //обращение к функции addnewcategoryAction() контроллера CardsController.php
            url: "/cards/addnewcategory/",
            data: {newcategory: newCategory},
            success: function(data){
                if(data === 'success'){
                    console.log('success');
                }else if(data === 'unsuccess'){
                    console.log('unsuccess');
                }
            }
        });
        // если ничего не введено пользователем, выводим сообщение на страницу
        } else{
           toChangeSequenceElements(2);
        }
        
      });
      
      
      
        //Кнопка "new category"
         //при нажатии на кнопку 'new category' медленно появляется текстовое поле и кнопка 'save'
        $("#button_NewCategory").click(function(){
         toChangeSequenceElements(3);
          
        });
      
        // div с сообщением об ошике
       // убрать сообщение по клику
          $('#message').click(function(){
              $('#message').fadeOut(0);
          });
      
        // Кнопка 'cancel'
       // убрать текстовое поле по клику на кнопку 'cancel', если поле ввода не требуется
          $('.buttons_group:nth-child(2)').click(function(){
              toChangeSequenceElements(1);
          });
          
        // Кнопка 'delete'
       // удалить ранее созданную категорию (следом перестают выводится, принадлежащие ей карточки)
       // т.к. функция без имени, то получим id-категории за get-запроса при клике на кнопку 'delete'
       // через атрибут data-parameter
       
         $('.buttons_group:nth-child(5)').click(function(){
             var categoryID = this.getAttribute('data-parameter');
             
             $.ajax({
                 url:'/cards/deletecategory/',
                 type: "POST",
                 data: {categoryID:categoryID},
                 success: function(data){
                    if(data === 'success'){
                    console.log('success');
 
                    }else if(data === 'unsuccess'){
                     console.log('unsuccess');
                   }
                 
                }
                 
             });
             
              console.log(this.getAttribute('data-parameter'));
          });
          
          
          
          
   });
   
   
   
   //------------------ Функция скрытия/появления элементов на странице -----------------------
    // изменяем последовательность появления/исчезания элементов
      function toChangeSequenceElements(view){
          if(view === 1){
            $('#message').fadeOut(0);
            $("#input_NewCategory").val("");
            $('#input_NewCategory').fadeOut(0); // скрыть текстовое поле 'new category'
            $('#button_NewCategory').fadeIn(2000); // показать кнопку 'new category'
            $('.buttons_group:first-child').fadeOut(1000); // скрыть кнопку 'save' 
          }
          else if(view === 2){
            $('#message').html("new category is not created!").fadeIn(1000);
            $('#input_NewCategory').fadeOut(0); // скрыть текстовое поле 'new category'
            $('#button_NewCategory').fadeIn(2000); // показать кнопку 'new category'
            $('.buttons_group:first-child').fadeOut(1000); // скрыть кнопку 'save'
          }
          else if(view === 3){
            $('#button_NewCategory').fadeOut(0);// скрыть кнопку 'new category'
            $('#input_NewCategory').fadeIn(1000); // показать текстовое поле 'new category'
            $('.buttons_group:first-child').fadeIn(2000); // показать кнопку 'save'
          }
        }
 
         
   
  
  
 
  

            
   
   
 

 

