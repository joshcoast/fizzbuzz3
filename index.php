
<html>
<body>
<h1>Fizz Buzz App</h1>
<h2>Step 3</h2>

<p>Output:</p>
<code>
<?php

$firstNumber = 1;
$secondNumber = 20;
$fizzTracker = 0;
$buzzTracker = 0;
$fizzbuzzTracker = 0;
$luckyTracker = 0;
$integerTracker = 0;

foreach (range($firstNumber, $secondNumber) as $number) {
    if (strpos($number, '3') !== false ) {
        echo 'lucky ';
        $luckyTracker++;
        continue;
    }
    if (0 !== $number % 3 && 0 !== $number % 5) {
        echo $number.' ';
        $integerTracker++;
        continue;
    }
    if (0 == $number % 3 && 0 == $number % 5) {
        echo 'fizzbuzz ';
        $fizzbuzzTracker++;
        continue;
    }
    if (0 === $number % 3) {
        echo 'fizz ';
        $fizzTracker++;
    }
    if ( 0 === $number % 5) {
        echo 'buzz ';
        $buzzTracker++;
    }
}
echo "<br>fizz: " . $fizzTracker . "<br>";
echo "buzz: " . $buzzTracker . "<br>";
echo "fizzbuzz: " . $fizzbuzzTracker . "<br>";
echo "lucky: " . $luckyTracker . "<br>";
echo "integer: " . $integerTracker . "<br>";
echo "(Integer is " . $integerTracker . " because there were " . $integerTracker . " numbers that were not altered in any way)."
?>

</code>

</body>
</html>