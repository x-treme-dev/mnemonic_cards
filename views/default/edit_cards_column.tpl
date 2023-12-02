
<div id="editCardsColumn">
            
               {foreach $rsCards as $item}
      <div class='div_cardEdit' id="{$item['id']}">
             <textarea class="card_frontEdit">{$item['front_card']}</textarea>
             <textarea class="card_backEdit">{$item['back_card']}</textarea>
             <!--Кнопка на карточке "крестик"-->
             <div class="delete"></div>
      </div>
     {/foreach} 
            
        </div> 
 
</body>

</html>