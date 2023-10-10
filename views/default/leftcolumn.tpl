  <div id="leftColumn">
      
      
     {foreach $rsCategories as $item}
         <a class="link" href="/?controller=cards&id={$item['id']}">
             <span>{$item['category']}</span>
          </a>
     {/foreach} 
         
         
  </div>
