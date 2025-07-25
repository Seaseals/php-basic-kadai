<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php

         $nums = array(15, 4, 18, 23, 10 );

        function sort_2way($nums,$order){
        
        if($order=== true){
        
        // sort_2way($nums ,TRUE);
        
        echo "昇順にソートします。<br>";

        sort($nums); 
        foreach($nums as $key => $val){
        echo "{$val} <br>";
        }

        }else{
          
          // sort_2way($nums,FALSE);      
          
          echo "降順にソートします。<br>";
          rsort($nums);
      foreach ($nums as $key => $val) {
          echo "{$val} <br>";
        }
      }
    }

      sort_2way($nums ,TRUE);
      sort_2way($nums ,FALSE);
    
        
  
        ?>
    </p>
</body>

</html>