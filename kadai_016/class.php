<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    // クラスの定義
    class Food
    {
      // プロパティの定義
      private $name;
      private $price;

      // コンストラクタ
      public function __construct($name, $price)
      {
        $this->name = $name;
        $this->price = $price;
      }
      // メソッドを作成
      public function show_price()
      {
        echo $this->price. "<br>";
      }
    }

    // クラスの定義
    class Animal
    {
      // プロパティの定義
      private $name;
      private $height;
      private $weight;
      // コンストラクタ
      public function __construct($name, $height, $weight)
      {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }

      // メソッドの定義
      public function show_height()
      {
        echo $this->height. "<br>";
      }
    }

    // インスタンスの作成
    $food = new Food("potato", 250);
    $animal = new Animal("dog", 60, 5000);

    // インスタンスを出力
    print_r($food);
    echo "<br>";
    print_r($animal);
    echo "<br>";

    // メソッドにアクセス
    $food->show_price();
    $animal->show_height();
    ?>
  </p>
</body>

</html>