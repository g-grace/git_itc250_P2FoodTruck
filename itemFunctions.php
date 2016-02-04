<?php
//functions
//Function to create a new roll for new Item starts with Item Name > Description > Price
//Create a table (Order Form) with Item Name > Description > Price > Quantity drop-down #0-9
                                                                                
function generateItemRow(Item $tempItem)
{
echo '
<tr>
    <td>  '. $tempItem->name .'</td>
    <td>  '. $tempItem->description .'
    </td>
    <td>   $'.$tempItem->price.'
    </td>
    
    <td>  <form action = "' . $_SERVER['PHP_SELF'] .'"  method = "GET">     
    	<select name="'. $tempItem->name . 'Quantity">
        	<option value="0">0</option>
        	<option value="1">1</option>
        	<option value="2">2</option>
        	<option value="3">3</option>
        	<option value="4">4</option>
        	<option value="5">5</option>
        	<option value="6">6</option>
        	<option value="7">7</option>
        	<option value="8">8</option>
        	<option value="9">9</option>
        	</select> 
    	<br/>
    </td>
</tr>
';
}   

//Create a function calculating Item-Quantity selected in the Order Form... will use array here
function calculateTotal($itemsOrdered, $menuItems)
{
	$total=0;
    
    foreach($menuItems as $tempItem) //while the array has items left in it
            {
                
               if ($itemsOrdered[$tempItem->name.'Quantity'] > 0) //call create row function and pass in individual item
               {
                   $total = $total + ($itemsOrdered[$tempItem->name.'Quantity']*$tempItem->price);
                   
               }
            }
    echo 'Your order total is $' . $total . '.';
      
 
    
}