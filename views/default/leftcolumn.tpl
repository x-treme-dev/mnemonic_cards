  <div id="leftColumn">
      
      
     {foreach $rsCategories as $item}
         <a class="link" href="/cards/{$item['id']}/">
             <span>{$item['category']}</span>
          </a>
     {/foreach} 
         
         
  </div>
