<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php

        //配列を定義する 
         $nums = array(15, 4, 18, 23, 10 );

        //  昇順・降順を選択して配列をソートする関数
        //  ( )内の引数には関数仕様のとおり、
        // $array（ソート対象の配列）と$order（ソート方向）を指定しなければなりません。
        function sort_2way($nums,$order){
        
        // TRUEなら昇順、TRUEでなければ降順にソートする
        
        // 引数$orderの値をチェックし、TRUEなら昇順、TRUEでないなら降準でソートする。
        if($order){
        // if($order=== true){でもOK。
        
        echo "昇順にソートします。<br>";
         // sort・・・配列を昇順にソートする
        sort($nums); 

        // foreach文を用いてソート結果を1行ずつ表示する処理
        // $numsからデータを$keyとして1つずつ取り出し、
        // echo文で順番に出力しています。
            foreach($nums as $key => $val){
            // foreach($nums as $key){でもOK
            echo "{$val} <br>";
            // echo "{$key}<br>";でもOK
        }

        }else{
                    
          echo "降順にソートします。<br>";
           // rsort・・・配列を昇順にソートする
          rsort($nums);
          // foreach文を用いてソート結果を1行ずつ表示する処理
          // $numsからデータを$keyとして1つずつ取り出し、
          // echo文で順番に出力しています。
              foreach ($nums as $key => $val) {
              //foreach($nums as $key){でもOK
              echo "{$val} <br>";
              // echo "{$key}<br>";でもOK

        }
      }
    }

    // 1度目の呼び出しはTRUE（昇順）、
    // 2度目はFALSE（降順）を指定するのが正解です。
    // 昇順にソート
      sort_2way($nums ,TRUE);
    // 降順にソート
      sort_2way($nums ,FALSE);
    
        
  
        ?>
    </p>
</body>

</html>