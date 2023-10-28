  <div id="leftColumn">
      
      
     {foreach $rsCategories as $item}
         <a  href="/cards/{$item['id']}/">
             <span>{$item['category']}</span>
        </a>
     {/foreach} 
         
         
  </div>
