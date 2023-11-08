{*панель поиска c кнопками*}

<div id="search">
     
    <div id="group_left">
        
      
      
    </div>
    
     <div id="group_center">
         <div id="oneCategory">{$oneCategory.category}</div>
    </div>
    
     
    <div id="group_right">
     <button class="buttons_group" onclick="window.location.href='/edit/{$oneCategory.id}/';">edit</button>
    {*$smarty.get.id - получение параметра get-запроса, где id-это параметр get-запроса
      Таким образом получаем id категории для удаления при клике на кнопку 'delete'
      data-parameter - данные передаваемые в функцию при клике на кнопку 'delete'
    *}
    <button class="buttons_group" data-parameter="{$smarty.get.id} ">delete</button>        
    </div>
   
</div>

 