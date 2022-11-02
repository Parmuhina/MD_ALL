<?php
echo "Geometry Calculator".PHP_EOL;
echo "1. Calculate the Area of a circle.".PHP_EOL;
echo "2. Calculate the Area of a rectangle.".PHP_EOL;
echo "3. Calculate the Area of a triangle.".PHP_EOL;
echo "4.Quit?".PHP_EOL;

$answer=(int) readline('Enter your choice 1-4. ');
echo PHP_EOL;
if ($answer<1 && $answer>4){
    echo "WARNING NUMBER IS INCORRECT".PHP_EOL;
    exit;
}

switch ($answer) {
    case $answer===1:
        geometryClass::circle();
        break;
    case $answer===2:
        geometryClass::rectangle();
        break;
    case $answer===3:
        geometryClass::triangle();
        break;
    case  $answer===4:
        echo 'Thank you for your choice. Goodbye!'.PHP_EOL;
        exit;

}
class geometryClass
{
    public static function negativity($value)
    {
        if ($value < 0) {
            echo 'ERROR! VALUE CAN`T BE LESS THAN ZERO!' . PHP_EOL;
            exit;
        }
    }

    public static function circle()
    {
        $radius = (float)readline('Insert radius value: ');
        self::negativity($radius);
        echo "Circle area is: " . M_PI * $radius * $radius . PHP_EOL;
    }

    public static function rectangle()
    {
        $length = (float)readline('Insert rectangle length value: ');
        self::negativity($length);
        $width = (float)readline('Insert rectangle width value: ');
        self::negativity($width);
        echo "Rectangle area is: " . $length * $width . PHP_EOL;
    }

    public static function triangle()
    {
        $base = (float)readline('Insert triangle base value: ');
        self::negativity($base);
        $height = (float)readline('Insert triangle height value: ');
        self::negativity($height);
        echo "Triangle area is: " . $base * $height * 0.5 . PHP_EOL;
    }
}
