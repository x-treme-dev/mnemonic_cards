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
    // 2. Редактировать карточки, принадлежащие категории
    
    
       // Редактируем название категории и нажимаем кнопку 'save' в edit_panel.tpl
          $('.edit_buttons_group:nth-child(1)').click(function(){
              // получить значение input с отредактированной категорией
              var updateCategory = $('#input_editCategory').val();
              console.log(updateCategory);
             // получим значения всех карточек на странице
              var textarea = document.getElementsByTagName('textarea');
              //  id карточек для точного редактирования. эти id привязаны к div'ам
             var div_cardEdit = document.getElementsByClassName('div_cardEdit');
              
            if(updateCategory !== ''){
            var categoryID = this.getAttribute('data-parameter');
              
            var  cardsSet = [];
            // функция создаст объект, где будет 3 поля: front, back, id
            // для однозначной идентификации карточек
            cardsSet = toCreateArrayOfCards(textarea, div_cardEdit);
           
            // console.log(cardsSet);
          
       
            let cardsJSON = JSON.stringify(cardsSet);
     
              
             $.ajax({
                 url:'/edit/updatecategory/',
                 type: "POST",
                 dataType : 'application/json',
                 data: {updateCategory:updateCategory, categoryID:categoryID, cardsJSON:cardsJSON},
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
   // 2. Создать новую карту
   // 3. Удалить новую карту
   
        // создать новую категорию с хотя бы одной карточкой или серией карточек
        $(".new_buttons_group:nth-child(1)").click(function(){
         // взять значение из input  
        var newCategory = $('#input_NewCategory').val();
        // взять значение из карточки, сторона front
        var cardFront = $(".card_front").val();
       
        
        // взять значение из карточки, сторона back
        var cardBack = $(".card_back").val();
        
        // данные должны быть в input_NewCategory, а также в 
        // хотя бы в одной карточке (по умолчанию), иначе выводим сообщение о пустом значении   
        if(newCategory !=='' && cardFront !=='' && cardBack !==''){
        console.log(newCategory);
        
         // получим массив всех textarea (карточек) на странице (textarea с классами 'card_front' и 'card_back')
          var textarea = document.getElementsByTagName('textarea');
          // сформировать объект, где в одной ячейке будет 2 поля: front и back со значениями из карточек
          // в порядке из появления на странице
          var cardsSet = [];
           
          for(var i = 0; i < textarea.length; i++){
              if(i === 0 ||i % 2 === 0){
                 var front = textarea[i].value; 
                 
              }else if(i % 2 !== 0){
                  var back = textarea[i].value;
                   cardsSet.push({front, back});
              }
              
             
          }
          
          //console.log(cardsSet);
         let cardsJSON = JSON.stringify(cardsSet);
         // console.log(cardsJSON);
        
        
        //Ajax-запрос: получили данные от пользователя и передали в контроллер CardsController.php
       $.ajax({
            url: "/new/addnewcategory/",
            method: 'POST',
            //обращение к функции addnewcategoryAction() контроллера CardsController.php
            dataType : 'application/json',
            data: {cardsJSON: cardsJSON, newcategory:newCategory},
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
             $('#message').html("value is empty").fadeIn(1000);
        }
        
     }); 
     
     
     
      
     
     // кнопка 'add' добавит новую карточку в новую создаваемую категорию  
        $(".new_buttons_group:nth-child(2)").click(function(){
            // получить доступ к div'у newCaresColumn (окно для вывода карточек)
            var newCardsColumn = document.getElementById('newCardsColumn');
            // создать новую карточку
            var div_newcard = document.createElement('div');
            div_newcard.className = 'div_newcard';
            // создать фронтальную сторону карты 
            var card_front = document.createElement('textarea');
            card_front.className = 'card_front';
            card_front.setAttribute("placeholder", "front of card");
            // создать тыльную сторону карты
            var card_back = document.createElement('textarea');
            card_back.className = 'card_back';
            card_back.setAttribute("placeholder", "back of card");
            // собрать карточку, фронт и тыл карты
            div_newcard.prepend(card_front);
            div_newcard.append(card_back);
            
           
            // добавить собранную карту в div newCardsColumn
            newCardsColumn.appendChild(div_newcard);
            console.log(div_newcard);
            
        });
      
    
    // кнопка delete - уберем карточки со страницы, вплоть до последней
        $(".new_buttons_group:nth-child(3)").click(function(){
           // получить все дочерние элементы div'а newCardsColumn
           var divChilds = document.getElementById('newCardsColumn').children;
           // получить количество потомков 
           var lenght = divChilds.length-1;
           
           // удалить последнего потомка
           divChilds[lenght].remove();
            
        });
        
        
        
        
    
    
          // div с сообщением об ошибке
         // убрать сообщение по клику
          $('#message').click(function(){
              $('#message').fadeOut(0);
          });
   
          
   });
   
   
   function toCreateArrayOfCards(textarea, div_cardEdit){
       // сформировать объект, где в одной ячейке будет 3 поля: front, back  со значениями из карточек и id 
          // в порядке их появления на странице
          var cardsSet = [];
            
          for(var i = 0; i < textarea.length; i++){
            
              if(i === 0 ||i % 2 === 0){
                 var front = textarea[i].value; 
                 
              }else if(i % 2 !== 0){
                  var back = textarea[i].value;
             
                  cardsSet.push({front, back});
              }
           }
           
           // добавить ключ id со значением
           for(var i = 0; i < div_cardEdit.length; i++){
               cardsSet[i].id = div_cardEdit[i].id;
           }
          
          return cardsSet;
   }
   
  
   
   
   
   
  
         
   
  
  
 
  

            
   
   
 

 

