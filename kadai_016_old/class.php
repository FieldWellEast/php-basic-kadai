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
         class Food {
        // プロパティを定義する
        private $name;
        private $price;

        //コンストラクタを定義する
        public function __construct(string $name, int $price) {
            $this->name = $name;
            $this->price = $price;
        }
        public function getPrice() {
            return $this->price;
        }
        }

        // クラスを定義する
        class Animal {
        // プロパティを定義する
        private $name;
        private $height;
        private $weight;

        //コンストラクタを定義する
        public function __construct(string $name, int $height, int $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
        }
        public function getHeight() {
            return $this->height;
        }
        }

         // インスタンス化する
         $Food = new Food('potato','250');
         $priceValue = $Food->getPrice();
         $Animal = new Animal('dog','60','5000');
         $heighValue = $Animal->getHeight();

        // インスタンス$userの各プロパティの値を出力する
        print_r($Food);

        //改行する
        echo '<br>';

        print_r($Animal);

         //改行する
         echo '<br>';

        print_r($priceValue);

          //改行する
        echo '<br>';

        print_r($heighValue);


         ?>
     </p>
 </body> 
 </html>