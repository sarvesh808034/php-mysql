<html>
    <body>
        <?php

      //Polymorphism
      class Shape{
        public function calculateArea(){
            return "Area not defined !";
        }
      }

      class Circle extends Shape {
        public $radius;
        public function calculateArea(){
            return 3.14 * ($this->radius * $this->radius);
        }
      }

      class Rectangle extends Shape{
        public $length;
        public $width;

        public function calculateArea(){
            return $this->length * $this->width;
        }
      }

      $circle = new Circle();
      $circle->radius = 5;
      echo "Circle Area :". $circle->calculateArea()."<br>";

      $rect = new Rectangle();
      $rect->length = 5;
      $rect->width = 10;
      echo "Rect Area :". $rect->calculateArea()."<br>";

        ?>
        </body>
        </html> 

