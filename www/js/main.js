/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/javascript.js to edit this template
 */

  $(document).ready(function(){
      
       // взять значение текстового поля и отправить post-запрос
        $(".buttons_group:first-child").click(function(){
        var newCategory = $("#textfield_NewCategory").val();
        if(newCategory !==''){
      
        console.log(newCategory);
        toChangeSequenceElements(1);
          
        // получили данные от пользователя и передали в контроллер CardsController.php
        $.ajax({
            type: 'POST',
            asinc: false,
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
      
         //при нажатии на кнопку 'new category' медленно появляется текстовое поле и кнопка 'save'
        $("#button_NewCategory").click(function(){
         toChangeSequenceElements(3);
          
        });
      
       // убрать сообщение по клику
          $('#message').click(function(){
              $('#message').fadeOut(0);
          });
      
       // убрать текстовое поле по клику на кнопку 'cancel', если поле ввода не требуется
          $('.buttons_group:nth-child(2)').click(function(){
              toChangeSequenceElements(1);
          });
          
          
          
      
       
   });
   
    // изменяем последовательность появления/исчезания элементов
      function toChangeSequenceElements(view){
          if(view === 1){
            $('#message').fadeOut(0);
            $("#textfield_NewCategory").val("");
            $('#textfield_NewCategory').fadeOut(0); // скрыть текстовое поле 'new category'
            $('#button_NewCategory').fadeIn(2000); // показать кнопку 'new category'
            $('.buttons_group:first-child').fadeOut(1000); // скрыть кнопку 'save' 
          }
          else if(view === 2){
            $('#message').html("new category is not created!").fadeIn(1000);
            $('#textfield_NewCategory').fadeOut(0); // скрыть текстовое поле 'new category'
            $('#button_NewCategory').fadeIn(2000); // показать кнопку 'new category'
            $('.buttons_group:first-child').fadeOut(1000); // скрыть кнопку 'save'
          }
          else if(view === 3){
            $('#button_NewCategory').fadeOut(0);// скрыть кнопку 'new category'
            $('#textfield_NewCategory').fadeIn(1000); // показать текстовое поле 'new category'
            $('.buttons_group:first-child').fadeIn(2000); // показать кнопку 'save'
          }
        }
 
         
    
  
  
 
  

            
   
   
 

 

