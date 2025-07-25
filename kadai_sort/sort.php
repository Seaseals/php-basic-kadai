<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php

        function sort_2way(&$nums,$order){
        
          if($order== true){
        sort($nums);
        }else{
          rsort($nums);
        }
      }

         $nums = array(15, 4, 18, 23, 10 );

      
        // 昇順    
        sort_2way($nums ,TRUE);
        echo "昇順にソートします。<br>";

         
        foreach($nums as $key => $val){
        echo "{$val} <br>";
        }
        
         $nums = array(15, 4, 18, 23, 10 );

      // 降順
      sort_2way($nums,FALSE);      
      echo "降順にソートします。<br>";

      foreach ($nums as $key => $val) {
       echo "{$val} <br>";
      }
    
  
        ?>
    </p>
</body>

</html>