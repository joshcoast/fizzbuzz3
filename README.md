# fizzbuzz
FizzBuzz Test Step 3

# Description
This app prints out the following for a contiguous range of numbers:
1. the number
2. 'fizz' for numbers that are multiples of 3
3. 'buzz' for numbers that are multiples of 5 
4. 'fizzbuzz' for numbers that are multiples of 15

e.g. If I run the program over a range from 1-20 I should get the following output:

`1 2 fizz 4 buzz fizz 7 8 fizz buzz 11 fizz 13 14 fizzbuzz 16 17 fizz 19 buzz`

# Step 2 Enhancements
If the number contains a three the app outputs the text 'lucky'.

e.g. If I run the program over a range from 1-20 I should get the following output:

`1 2 lucky 4 buzz fizz 7 8 fizz buzz 11 fizz lucky 14 fizzbuzz 16 17 fizz 19 buzz`

# Step 3 Enhancements
Produce a report at the end of the program showing how many times the following were
output:
a. Fizz
b. Buzz
c. Fizzbuzz 
d. Lucky
e. an integer

e.g. if I run the program over a range from 1-20 I should get the following output:

`1 2 lucky 4 buzz fizz 7 8 fizz buzz 11 fizz lucky 14 fizzbuzz 16 17 fizz 19 buzz`

`fizz: 4`

`buzz: 3`

`fizzbuzz: 1`

`lucky: 2`

`integer: 10`

`(Integer is 10 because there were 10 numbers that were not altered in any way).`

# Running this app
run `php -S localhost:8000` in this root directory.

View the app at `http://localhost:8000` in your web browser.

To change the range, update the $firstNumber and $secondNumber variables on lines 10 and 11.