<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
         class Food{
            //プロパティを定義する
            private $name;
            private $price;
    
            //コンストラクタを定義する
            public function __construct(string $name, int $price){
                $this->name = $name;
                $this->price = $price;
            }
            
            //メソッドを定義する
            public function show_price(int $price){
                $this->price = $price;
            }
        }
    
        //インスタンス化する
        $food = new Food('potato',250);
    
        //インスタンス$foodの各プロパティの値を出力する
        print_r($food);
    
    
        //Animalのクラスを作成する
        class Animal{
            //プロパティを定義する
            private $name;
            private $height;
            private $weight;
    
            //コンストラクタを定義する
            public function __construct(string $name, int $height, int $weight){
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
    
             //メソッドを定義する
             public function show_height(int $height){
                $this->height = $height;
            }
    
        }
    
        //インスタンス化する
        $animal = new Animal('dog',60,5000);
    
        //インスタンス$animalの各プロパティの値を出力する
        print_r($animal);
    
        //メソッドにアクセスして実行する
        $food->show_price();
        echo '<br>';
        $animal->show_height();
       
        ?>
        </p>
</body>
</html>