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

        // if( $order ){
            
        echo '昇順にソートします。<br>';

        // 昇順
        sort($nums);
        foreach($nums as $key => $val){
          
        
        echo "{$val} <br>";
        }
        
      // }else{

      echo '降順にソートします。<br>';

      // 降順
      rsort($nums);
      foreach ($nums as $key => $val) {
       echo "{$val} <br>";
      }
    // }
  // }
        ?>
    </p>
</body>

</html>