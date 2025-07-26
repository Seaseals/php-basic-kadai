<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
       <?php
       // クラスを定義する
       class Food{
           // プロパティを定義する
          private $name;
          private $price;
          // メソッドを定義する
            public function __construct(string $name, int $price) {
                // 初期化の内容
                $this->name = $name;
                $this->price = $price;
            }
            // 「price」プロパティの値を出力する「show_price」メソッドを作成する
            public function show_price() {
             echo $this-> price . '<br>';
           
            }
        }

        
        // インスタンス化する
        // それぞれのクラスを元に任意の引数を渡してインスタンスを作成します。
        $food = new Food('potato', 250);

        // インスタンス$foodの各プロパティの値を出力する
        print_r($food);
       ?>
   </p>
   
  
   <p>
        <?php
        // クラスを定義する
        class Animal {
            // プロパティを定義する                        
            private $name;
            private $height;
            private $weight;

            // コンストラクタを定義する
            public function __construct(string $name, int $height, int $weight) {
                // 初期化の内容
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
           
            // 「height」プロパティの値を出力する「show_height」メソッドをそれぞれ作成します。
            public function show_height() {
             echo $this-> height . '<br>';
           }

          }
        // インスタンス化する
        // インスタンス化するときに引数として渡された値をそれぞれのプロパティに代入できます。
        $animal = new Animal('dog', 60, '5000');

        // インスタンス$animalの各プロパティの値を出力する
        print_r($animal);
      
       echo '<br>';

      // クラスに作成したメソッドにアクセスしてメソッドを実行する
      $food -> show_price();
      $animal -> show_height(); 
    
            
        ?>
    </p>

</body>

</html>