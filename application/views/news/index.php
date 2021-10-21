
<?php
    echo "<pre>";
 //   print_r($all_news);
    echo "</pre>";

?>


<h2>This is news title :  
<?php 
echo $all_news[1]->title;   
?> 
</h2>


<table border=1>
<tr>
    <th>sr no</th>
    <th>title</th>
</tr>

<?php
    $i=1;
    foreach($all_news as $news) {
?>    
<tr>
    <th><?= $i++ ?></th>
    <th><?= $news->title; ?></th>
</tr>
<?php
    } 
?>

    
</tbody>    
</table>
