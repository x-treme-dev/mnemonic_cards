{*cardscolumn*}
   

<div id='cardsColumn'>
  {foreach $rsCards as $item}
      <div class='card'>
         <div class="front">
             <span>{$item['front_card']}</span>
         </div>
         
         <div class="back">
             <span>{$item['back_card']}</span>
         </div>
     </div>
     {/foreach} 
</div>

  
 </body>

</html>