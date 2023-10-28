{*панель поиска c кнопками*}

<div id="search">
     
    <div id="group_left">
        <button id="button_NewCategory">New category</button>
        <input id="input_NewCategory" type="text" placeholder="new category..." >
       
    </div>
    
     <div id="message"></div>
      
  
      
         
    <div id="group_right">
    <button class="buttons_group">save</button>
    <button class="buttons_group">cancel</button>
    <button class="buttons_group">edit</button>
    <button class="buttons_group">add</button>
    {*$smarty.get.id - получение параметра get-запроса, где id-это параметр get-запроса
      Таким образом получаем id категории для удаления при клике на кнопку 'delete'
      data-parameter - данные передаваемые в функцию при клике на кнопку 'delete'
    *}
    <button class="buttons_group" data-parameter="{$smarty.get.id}">delete</button>        
    </div>
   
</div>
