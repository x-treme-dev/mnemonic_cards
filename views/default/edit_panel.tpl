<div id="edit">
     
    <div id="group_left">
       
      
    </div>
    
     <div id="group_center">
         <input id="input_editCategory" type="text" value="{$oneCategory.category}">
     </div>
    
     
    <div id="group_right">
    <button class="edit_buttons_group" data-parameter="{$smarty.get.id}">save</button>
    <button class="edit_buttons_group" onclick="window.location.href='/cards/{$oneCategory.id}/';">cancel</button>
    {*$smarty.get.id - получение параметра get-запроса, где id-это параметр get-запроса
      Таким образом получаем id категории для удаления при клике на кнопку 'delete'
      data-parameter - данные передаваемые в функцию при клике на кнопку 'delete'
    *}
    <button class="edit_buttons_group" data-parameter="{$smarty.get.id}" >add</button>   
    
    </div>
   
</div>
