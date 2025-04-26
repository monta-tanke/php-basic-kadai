<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>課題016</title>
</head>

<body>
    <p>
        <?php
        // 食品のクラスを定義する
        class Food {
            // プロパティを定義する
            private $name;
            private $price;  
        
            // コンストラクタを定義する
                    // コンストラクタを定義する
         public function __construct(string $name, int $price) {
          $this->name = $name;
          $this->price = $price;
      }
      //メソッドを追加
      public function show_price() {
        echo $this->price;
      }
  }

  // インスタンス化する
  $Food = new Food('potato', 250);

  // インスタンス$userの各プロパティの値を出力する
  print_r($Food);
  echo '<br>';

   // Animalクラスを定義する
   class Animal {
       // プロパティを定義する                        
       private $name;
       private $height;
       private $weight;
 
       // コンストラクタを定義する
       public function __construct(string $name, int $height ,int $weight) {
           $this->name = $name;
           $this->height = $height;
           $this->weight = $weight;
           }
       //メソッドを追加
       public function show_height() {
        echo $this->height;
        }

   }
 
   // インスタンス化する
     $Animal = new Animal('dog', 60 ,5000);
 
   
     print_r($Animal);
     echo '<br>';
  
   echo $Food->show_price() . "<br>";     
   
   echo $Animal->show_height();
  
  ?>
</p>