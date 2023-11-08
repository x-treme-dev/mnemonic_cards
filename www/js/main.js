/* 
 * Обработчики для кнопок и полей ввода
 * Ajax - запросы к контроллеру
 * 
 */


  $(document).ready(function(){
      
 //---------------Действия в CardsController.php---------------------------------------------------
 // 1. Удалить категорию
 // 2. Редактировать категорию (ссылка на EditController.php)
 
       // Кнопка 'delete'
       // т.к. функция без имени, то получим id-категории посредством get-запроса записанным прямо в кнопку 'delete'
       // через атрибут data-parameter
       
         $('.buttons_group:nth-child(2)').click(function(){
            if( confirm('Вы действительно хотите  удалить категорию?')){
                
                 $('#message').html("category is deleted!").fadeIn(1000);
                var categoryID = this.getAttribute('data-parameter');
             
             $.ajax({
                 url:'/cards/deletecategory/',
                 type: "POST",
                 data: {categoryID:categoryID},
                 success: function(data){
                    if(data === 'success'){
                    console.log('success');    
                    location.reload(); return false;   
                  
                     }else if(data === 'unsuccess'){
                     console.log('unsuccess');
                   }
                 
                }
                 
             });
             
              console.log(this.getAttribute('data-parameter'));
                
            }else {
                 $('#message').html("operation is canceled").fadeIn(1000);
            }
             
          });
          
          
    //------------------Действия в EditController.php ---------------------------------------
    // 1. Редактировать категорию
    
    
       // Редактируем название категории и нажимаем кнопку 'save' в edit_panel.tpl
          $('.edit_buttons_group:nth-child(1)').click(function(){
              var updateCategory = $('#input_editCategory').val();
              console.log(updateCategory);
              
              if(updateCategory !== ''){
              var categoryID = this.getAttribute('data-parameter');
              
               $.ajax({
                 url:'/edit/updatecategory/',
                 type: "POST",
                 data: {updateCategory:updateCategory, categoryID:categoryID},
                 success: function(data){
                    if(data === 'success'){
                    console.log('success');
                      
                    }else if(data === 'unsuccess'){
                     console.log('unsuccess');
                      
                   }
                 
                }
                 
             });
         }else {
             $('#message').html('new category is not created!').fadeIn(1000);
             
         }
           
          });
          
          
           // -------------------- Действия в NewController.php ---------------------
   // 1. Создать новую категорию
   
         // создать новую категорию      
        // Поле ввода input "new category"для ввода нового значения категории
       // взять значение текстового поля и отправить post-запрос
        $(".new_buttons_group:nth-child(1)").click(function(){
        var newCategory = $('#input_NewCategory').val();
        
        if(newCategory !==''){
        console.log(newCategory);
        //Ajax-запрос: получили данные от пользователя и передали в контроллер CardsController.php
        $.ajax({
            type: 'POST',
            //обращение к функции addnewcategoryAction() контроллера CardsController.php
            url: "/new/addnewcategory/",
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
             $('#message').html("is empty").fadeIn(1000);
        }
        
     });
      
    
    
          // div с сообщением об ошибке
         // убрать сообщение по клику
          $('#message').click(function(){
              $('#message').fadeOut(0);
          });
   
          
   });
   
   
   
   
   
  
         
   
  
  
 
  

            
   
   
 

 

