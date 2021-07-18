<h3>php If statement</h3>
    <p>The if statement executes some code if one condition is true.</p>

    <!--
        <?php
        $t = date("H");

        if ($t < "20") {
        echo "Have a good day!";
        }
        ?>
    -->

    <h3>PHP - The if...else Statement</h3>
    <p>The if...else statement executes some code if a condition is true and another code if that condition is false.</p>

    <!--
        <?php
        $t = date("H");

        if ($t < "20") {
        echo "Have a good day!";
        } else {
        echo "Have a good night!";
        }
        ?>

        // result - Have a good day!
    -->

    <h3>PHP - The if...elseif...else Statement</h3>
    <p>The if...elseif...else statement executes different codes for more than two conditions.</p>

    <!--
        <?php
        $t = date("H");
        echo "<p>The hour (of the server) is " . $t; 
        echo ", and will give the following message:</p>";

        if ($t < "10") {
        echo "Have a good morning!";
        } elseif ($t < "20") {
        echo "Have a good day!";
        } else {
        echo "Have a good night!";
        }
        ?>

        // result -- The hour (of the server) is 10, and will give the following message: Have a good day!
    -->

    <h3>PHP switch Statement</h3>
    <p>The switch statement is used to perform different actions based on different conditions.</p>
    <p>Use the switch statement to select one of many blocks of code to be executed.</p>

    <!--
        <?php
        $favcolor = "yellow";

        switch ($favcolor) {
        case "red":
            echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";
        }
        ?>

        // result -- Your favorite color is neither red, blue, nor green!
    -->

    <h3>PHP Loops</h3>
    <p>Often when you write code, you want the same block of code to run over and over again a certain number of times. So, instead of adding several almost equal code-lines in a script, we can use loops.</p>

    <p>In PHP, we have the following loop types:</p>
    <ul>
        <li>while - loops through a block of code as long as the specified condition is true</li>
        <li>do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true</li>
        <li>for - loops through a block of code a specified number of times</li>
        <li>foreach - loops through a block of code for each element in an array</li>
    </ul>

    <h3>The PHP while Loop</h3>
    <p>The while loop executes a block of code as long as the specified condition is true.</p>

    <!--
        <?php  
        $x = 1;
        
        while($x <= 5) {
            echo "The number is: $x <br>";
            $x++;
        } 
        ?>

        // results 

        The number is: 1
        The number is: 2
        The number is: 3
        The number is: 4
        The number is: 5
    -->

    <!--
        <?php  
        $x = 0;
        
        while($x <= 100) {
            echo "The number is: $x <br>";
            $x+=10;
        }
        ?> 
        
        // results 
        The number is: 0
        The number is: 10
        The number is: 20
        The number is: 30
        The number is: 40
        The number is: 50
        The number is: 60
        The number is: 70
        The number is: 80
        The number is: 90
        The number is: 100
    -->

    <h3>PHP do while Loop</h3>

    <p>The do...while loop - Loops through a block of code once, and then repeats the loop as long as the specified condition is true.</p>

    <!--
        <?php 
        $x = 1;

        do {
            echo "The number is: $x <br>";
            $x++;
        } while ($x <= 5);
        ?>

        // results 
        The number is: 1
        The number is: 2
        The number is: 3
        The number is: 4
        The number is: 5
    -->

    <p>In a do...while loop the condition is tested AFTER executing the statements within the loop. This means that the do...while loop will execute its statements at least once, even if the condition is false. See example below.</p>

    <!--
        <?php 
        $x = 6;

        do {
            echo "The number is: $x <br>";
            $x++;
        } while ($x <= 5);
        ?>

        // results -- The number is: 6
    -->

    <h3>The PHP for Loop</h3>
    <p>The for loop - Loops through a block of code a specified number of times.</p>
    <p>The for loop is used when you know in advance how many times the script should run.</p>

    <!--
        <?php  
        for ($x = 0; $x <= 10; $x++) {
            echo "The number is: $x <br>";
        }
        ?>

        // result 
        The number is: 0
        The number is: 1
        The number is: 2
        The number is: 3
        The number is: 4
        The number is: 5
        The number is: 6
        The number is: 7
        The number is: 8
        The number is: 9
        The number is: 10
    -->


    <!--
        <?php  
        for ($x = 0; $x <= 100; $x+=10) {
            echo "The number is: $x <br>";
        }
        ?>

        // result 
        The number is: 0
        The number is: 10
        The number is: 20
        The number is: 30
        The number is: 40
        The number is: 50
        The number is: 60
        The number is: 70
        The number is: 80
        The number is: 90
        The number is: 100
    -->





<h3>The PHP foreach Loop</h3>
    <p>The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.</p>

    <!--
        <?php  
        $colors = array("red", "green", "blue", "yellow"); 

        foreach ($colors as $value) {
        echo "$value <br>";
        }
        ?>

        // results 
        red
        green
        blue
        yellow
    -->

    <h3>PHP Break and Continue</h3>

    <!--
        <?php
        for ($x = 0; $x < 10; $x++) {
        if ($x == 4) {
            break;
        }
        echo "The number is: $x <br>";
        }
        ?>

        // result 
        The number is: 0
        The number is: 1
        The number is: 2
        The number is: 3
    -->

    <h3>Continue</h3>
    <!--
        <?php  
        for ($x = 0; $x < 10; $x++) {
        if ($x == 4) {
            continue;
        }
        echo "The number is: $x <br>";
        }
        ?>

        result  - 
        The number is: 0
        The number is: 1
        The number is: 2
        The number is: 3
        The number is: 5
        The number is: 6
        The number is: 7
        The number is: 8
        The number is: 9
    -->

    <h3>Break and Continue in While Loop</h3>

    <!--
        <?php  
        $x = 0;
        
        while($x < 10) {
        if ($x == 4) {
            break;
        }
        echo "The number is: $x <br>";
        $x++;
        } 
        ?>

        // result
        The number is: 0
        The number is: 1
        The number is: 2
        The number is: 3
    -->

    <!--
        <?php  
        $x = 0;
        
        while($x < 10) {
        if ($x == 4) {
            $x++;
            continue;
        }
        echo "The number is: $x <br>";
        $x++;
        } 
        ?>

        // results 
        The number is: 0
        The number is: 1
        The number is: 2
        The number is: 3
        The number is: 5
        The number is: 6
        The number is: 7
        The number is: 8
        The number is: 9
    -->

    <h3>PHP Functions</h3>
    <p>The real power of PHP comes from its functions.</p>
    <p>PHP has more than 1000 built-in functions, and in addition you can create your own custom functions.</p>

    <p>Besides the built-in PHP functions, it is possible to create your own functions.</p>
    <ul>
        <li>A function is a block of statements that can be used repeatedly in a program.</li>
        <li>A function will not execute automatically when a page loads.</li>
        <li>A function will be executed by a call to the function.</li>
    </ul>

    <!--
        <?php
        function writeMsg() {
        echo "Hello world!";
        }

        writeMsg();
        ?>

        // result
        Hello World!
    -->


    <h3>PHP Function Arguments</h3>
    <p>Information can be passed to functions through arguments. An argument is just like a variable.</p>
    <p>Arguments are specified after the function name, inside the parentheses. You can add as many arguments as you want, just separate them with a comma.</p>

    <!--
        <?php
        function familyName($fname) {
        echo "$fname Refsnes.<br>";
        }

        familyName("Jani");
        familyName("Hege");
        familyName("Stale");
        familyName("Kai Jim");
        familyName("Borge");
        ?>

        // result
        Jani Refsnes.
        Hege Refsnes.
        Stale Refsnes.
        Kai Jim Refsnes.
        Borge Refsnes.
    -->

    <p>The following example has a function with two arguments ($fname and $year):</p>
    <!--
        <?php
        function familyName($fname, $year) {
        echo "$fname Refsnes. Born in $year <br>";
        }

        familyName("Hege","1975");
        familyName("Stale","1978");
        familyName("Kai Jim","1983");
        ?>

        // results
        Hege Refsnes. Born in 1975
        Stale Refsnes. Born in 1978
        Kai Jim Refsnes. Born in 1983
    -->

    <h3>PHP is a Loosely Typed Language</h3>
    <p>In the example above, notice that we did not have to tell PHP which data type the variable is.</p>

    <!--
        <?php
        function addNumbers(int $a, int $b) {
        return $a + $b;
        }
        echo addNumbers(5, "5 days"); 
        // since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
        ?>

        // result 10 
        without strict mode
    -->

    <p>with strict mode</p>
    <!--
        <?php declare(strict_types=1); // strict requirement

        function addNumbers(int $a, int $b) {
        return $a + $b;
        }
        echo addNumbers(5, "5 days"); 
        // since strict is enabled and "5 days" is not an integer, an error will be thrown
        ?>

        // result 
        PHP Fatal error: Uncaught TypeError: Argument 2 passed to addNumbers() must be of the type integer, 
    -->

    <h3>PHP Default Argument Value</h3>
    <!--
        <?php
        function setHeight(int $minheight = 50) {
        echo "The height is : $minheight <br>";
        }

        setHeight(350);
        setHeight();
        setHeight(135);
        setHeight(80);
        ?>

        // result
        The height is : 350
        The height is : 50
        The height is : 135
        The height is : 80
    -->

    <h3>PHP Functions - Returning values</h3>

    <!--
        <?php
        function sum(int $x, int $y) {
        $z = $x + $y;
        return $z;
        }

        echo "5 + 10 = " . sum(5,10) . "<br>";
        echo "7 + 13 = " . sum(7,13) . "<br>";
        echo "2 + 4 = " . sum(2,4);
        ?>

        // results 
        5 + 10 = 15
        7 + 13 = 20
        2 + 4 = 6
    -->

    <h3>PHP Return Type Declarations</h3>
    <p>PHP 7 also supports Type Declarations for the return statement. Like with the type declaration for function arguments, by enabling the strict requirement, it will throw a "Fatal Error" on a type mismatch.</p>

    <!--
        <?php declare(strict_types=1); // strict requirement
        function addNumbers(float $a, float $b) : float {
        return $a + $b;
        }
        echo addNumbers(1.2, 5.2); 
        ?>

        // result 6.4
    -->

    <p>You can specify a different return type, than the argument types, but make sure the return is the correct type:</p>
    <!--
        <?php declare(strict_types=1); // strict requirement
        function addNumbers(float $a, float $b) : int {
        return (int)($a + $b);
        }
        echo addNumbers(1.2, 5.2); 
        ?>

        // result 6
    -->

    <p>passing arguments</p>
    <!--
        <?php
        function add_five(&$value) {
        $value += 5;
        }

        $num = 2;
        add_five($num);
        echo $num;
        ?>

        // result  - 7
    -->

    <h3>php Arrays</h3>
    <p>An array stores multiple values in one single variable:</p>

    <!--
        <?php
        $cars = array("Volvo", "BMW", "Toyota"); 
        echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
        ?>

        // results 
        I like Volvo, BMW and Toyota.
    -->

    <h3>What is an Array?</h3>
    <p>An array is a special variable, which can hold more than one value at a time.</p>

    <p>In PHP, there are three types of arrays:</p>

    <ul>
        <li>Indexed arrays - Arrays with a numeric index</li>
        <li>Associative arrays - Arrays with named keys</li>
        <li>Multidimensional arrays - Arrays containing one or more arrays</li>
    </ul>

    <h3>The count() Function</h3>
    <p>The count() function is used to return the length (the number of elements) of an array:</p>

    <!--
        <?php
        $cars = array("Volvo", "BMW", "Toyota");
        echo count($cars);
        ?>

        // result 3
    -->

    <h3>PHP Indexed Arrays</h3>
    <p>There are two ways to create indexed arrays:</p>

    <!--
        <?php
        $cars = array("Volvo", "BMW", "Toyota"); 
        echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
        ?>
    -->

    <p>To loop through and print all the values of an indexed array, you could use a for loop, like this:</p>
    <!--
        <?php
        $cars = array("Volvo", "BMW", "Toyota");
        $arrlength = count($cars);

        for($x = 0; $x < $arrlength; $x++) {
        echo $cars[$x];
        echo "<br>";
        }
        ?>

        // results 
        Volvo
        BMW
        Toyota
    -->

    <h3>PHP Associative Arrays</h3>
    <p>Associative arrays are arrays that use named keys that you assign to them.</p>

    <p>There are two ways to create an associative array: </p>

    <p>$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");</p>
    <p>or</p>
    <!--
        $age['Peter'] = "35";
        $age['Ben'] = "37";
        $age['Joe'] = "43";
    -->

    <!--
        <?php
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        echo "Peter is " . $age['Peter'] . " years old.";
        ?>

        // result Peter is 35 years old.
    -->

    <h3>Loop Through an Associative Array</h3>
    <p>To loop through and print all the values of an associative array, you could use a foreach loop, like this:</p>

    <!--
        <?php
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

        foreach($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
        }
        ?>

        result 
        Key=Peter, Value=35
        Key=Ben, Value=37
        Key=Joe, Value=43
    -->

    <h3>PHP Multidimensional Arrays</h3>
    <p>A multidimensional array is an array containing one or more arrays.</p>
    <p>PHP supports multidimensional arrays that are two, three, four, five, or more levels deep. However, arrays more than three levels deep are hard to manage for most people.</p>

    <!--
        $cars = array (
            array("Volvo",22,18),
            array("BMW",15,13),
            array("Saab",5,2),
            array("Land Rover",17,15)
        );
    -->

    <!--
        <?php
        $cars = array (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
        );
        
        echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
        echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
        echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
        echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
        ?>

        // result
        Volvo: In stock: 22, sold: 18.
        BMW: In stock: 15, sold: 13.
        Saab: In stock: 5, sold: 2.
        Land Rover: In stock: 17, sold: 15.
    -->

    <p>We can also put a for loop inside another for loop to get the elements of the $cars array (we still have to point to the two indices):</p>

    <!--
        <?php
        $cars = array (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
        );
            
        for ($row = 0; $row < 4; $row++) {
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
            echo "<li>".$cars[$row][$col]."</li>";
        }
        echo "</ul>";
        }
        ?>

        // result
        Row number 0

        Volvo
        22
        18
        Row number 1

        BMW
        15
        13
        Row number 2

        Saab
        5
        2
        Row number 3

        Land Rover
        17
        15
    -->

    <h3>PHP Sorting Arrays</h3>

    <p>The elements in an array can be sorted in alphabetical or numerical order, descending or ascending.</p>
    <p>we will go through the following PHP array sort functions:</p>
    <ul>
        <li>sort() - sort arrays in ascending order</li>
        <li>rsort() - sort arrays in descending order</li>
        <li>asort() - sort associative arrays in ascending order, according to the value</li>
        <li>ksort() - sort associative arrays in ascending order, according to the key</li>
        <li>arsort() - sort associative arrays in descending order, according to the value</li>
        <li>krsort() - sort associative arrays in descending order, according to the key</li>
    </ul>

    <h3>Sort Array in Ascending Order - sort()</h3>
    <p>The following example sorts the elements of the $cars array in ascending alphabetical order:</p>

    <!--
        <?php
        $cars = array("volvo", "bmw", "toyota");
        sort($cars);

        $clength = count($cars);
        for($x = 0; $x < $clength; $x++) {
            echo $cars[$x];
            echo "<br>";
        }
        ?>

        // result
        BMW
        Toyota
        Volvo
    -->

    <p>The following example sorts the elements of the $numbers array in ascending numerical order:</p>
    <!--
        <?php
        $numbers = array(4, 6, 2, 22, 11);
        sort($numbers);

        $arrlength = count($numbers);
        for($x = 0; $x < $arrlength; $x++) {
        echo $numbers[$x];
        echo "<br>";
        }
        ?>

        // result
        2
        4
        6
        11
        22
    -->

    <h3>Sort Array in Descending Order - rsort()</h3>
    <p>The following example sorts the elements of the $cars array in descending alphabetical order:</p>
    <!--
        <?php
        $cars = array("Volvo", "BMW", "Toyota");
        rsort($cars);

        $clength = count($cars);
        for($x = 0; $x < $clength; $x++) {
        echo $cars[$x];
        echo "<br>";
        }
        ?>

        // result
        Volvo
        Toyota
        BMW
    -->

    <p>The following example sorts the elements of the $numbers array in descending numerical order:</p>

    <!--
        <?php
        $numbers = array(4, 6, 2, 22, 11);
        rsort($numbers);

        $arrlength = count($numbers);
        for($x = 0; $x < $arrlength; $x++) {
        echo $numbers[$x];
        echo "<br>";
        }
        ?>

        // result
        22
        11
        6
        4
        2
    -->

    <h3>Sort Array (Ascending Order), According to Value - asort()</h3>
    <p>The following example sorts an associative array in ascending order, according to the value:</p>

    <!--
        <?php
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        asort($age);

        foreach($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
        }
        ?>

        // result
        Key=Peter, Value=35
        Key=Ben, Value=37
        Key=Joe, Value=43
    -->

    <h3>Sort Array (Ascending Order), According to Key - ksort()</h3>
    <p>The following example sorts an associative array in ascending order, according to the key:</p>

    <!--
        <?php
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        ksort($age);

        foreach($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
        }
        ?>

        // result
        Key=Ben, Value=37
        Key=Joe, Value=43
        Key=Peter, Value=35
    -->

    <h3>Sort Array (Descending Order), According to Value - arsort()</h3>
    <p>The following example sorts an associative array in descending order, according to the value:</p>

    <!--
        <?php
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        arsort($age);

        foreach($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
        }
        ?>

        // result 
        Key=Joe, Value=43
        Key=Ben, Value=37
        Key=Peter, Value=35
    -->

    <h3>Sort Array (Descending Order), According to Key - krsort()</h3>
    <p>The following example sorts an associative array in descending order, according to the key:</p>

    <!--
        <?php
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        krsort($age);

        foreach($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
        }
        ?>

        // result
        Key=Peter, Value=35
        Key=Joe, Value=43
        Key=Ben, Value=37
    -->

    <h3>PHP Global Variables - Superglobals</h3>
    <p>Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.</p>
    <p>The PHP superglobal variables are:</p>
    <ul>
        <li>$GLOBALS</li>
        <li>$_SERVER</li>
        <li>$_REQUEST</li>
        <li>$_POST</li>
        <li>$_GET</li>
        <li>$_FILES</li>
        <li>$_ENV</li>
        <li>$_COOKIE</li>
        <li>$_SESSION</li>
    </ul>

    <h3>PHP $GLOBALS</h3>
    <p>$GLOBALS is a PHP super global variable which is used to access global variables from anywhere in the PHP script (also from within functions or methods).</p>
    <p>PHP stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable.</p>

    <!--
        <?php 
        $x = 75;
        $y = 25; 

        function addition() {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        }

        addition();
        echo $z;
        ?>

        // result 100
    -->

    <h3>PHP $_SERVER</h3>
    <p>$_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.</p>
    <p>The example below shows how to use some of the elements in $_SERVER:</p>

    <!--
        <?php
        echo $_SERVER['PHP_SELF'];
        echo "<br>";
        echo $_SERVER['SERVER_NAME'];
        echo "<br>";
        echo $_SERVER['HTTP_HOST'];
        echo "<br>";
        echo $_SERVER['HTTP_REFERER'];
        echo "<br>";
        echo $_SERVER['HTTP_USER_AGENT'];
        echo "<br>";
        echo $_SERVER['SCRIPT_NAME'];
        ?>

        // result
        /demo/demo_global_server.php
        35.194.26.41
        35.194.26.41
        https://tryphp.w3schools.com/showphp.php?filename=demo_global_server
        Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36
        /demo/demo_global_server.php
    -->

    <p>$_SERVER['PHP_SELF'] -- Returns the filename of the currently executing script</p>
    <p>$_SERVER['GATEWAY_INTERFACE'] -- Returns the version of the Common Gateway Interface (CGI) the server is using</p>
    <p>$_SERVER['SERVER_ADDR']  -- Returns the IP address of the host server</p>
    <p>$_SERVER['SERVER_NAME']  --  Returns the name of the host server (such as www.ilarioni.dev)</p>
    <p>$_SERVER['SERVER_SOFTWARE']  --  Returns the server identification string (such as Apache/2.2.24)</p>
    <p>$_SERVER['SERVER_PROTOCOL']  -- Returns the name and revision of the information protocol (such as HTTP/1.1)</p>
    <p>$_SERVER['REQUEST_METHOD']  -- Returns the request method used to access the page (such as POST)</p>
    <p>$_SERVER['REQUEST_TIME']  -- Returns the timestamp of the start of the request (such as 1377687496)</p>
    <p>and many others </p>

    <h3>PHP $_REQUEST</h3>
    <p>PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form.</p>

    <!--
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name: <input type="text" name="fname">
        <input type="submit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $name = htmlspecialchars($_REQUEST['fname']);
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo $name;
            }
        }
        ?>
    -->

    <h3>PHP $_POST</h3>
    <p>PHP $_POST is a PHP super global variable which is used to collect form data after submitting an HTML form with method="post". $_POST is also widely used to pass variables.</p>

    <!--
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name: <input type="text" name="fname">
        <input type="submit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $name = $_POST['fname'];
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo $name;
            }
        }
        ?>
    -->

    <h3>PHP $_GET</h3>
    <p>PHP $_GET is a PHP super global variable which is used to collect form data after submitting an HTML form with method="get".</p>
    <p>$_GET can also collect data sent in the URL.</p>


    <h3>PHP Regular Expressions - RegEx</h3>
    <p>What is a Regular Expression?</p>
    <p>A regular expression is a sequence of characters that forms a search pattern. When you search for data in a text, you can use this search pattern to describe what you are searching for.</p>

    <p>A regular expression can be a single character, or a more complicated pattern.</p>
    <p>In PHP, regular expressions are strings composed of delimiters, a pattern and optional modifiers.</p>

    <p>PHP provides a variety of functions that allow you to use regular expressions. The preg_match(), preg_match_all() and preg_replace() functions are some of the most commonly used ones:</p>

    <p>preg_match()  --- Returns 1 if the pattern was found in the string and 0 if not</p>
    <p>preg_match_all()  ---  Returns the number of times the pattern was found in the string, which may also be 0</p>
    <p>preg_replace()  --- Returns a new string where matched patterns have been replaced with another string</p>

    <h3>Using preg_match()</h3>
    <p>The preg_match() function will tell you whether a string contains matches of a pattern.</p>

    <!--
        <?php
        $str = "Visit W3Schools";
        $pattern = "/w3schools/i";
        echo preg_match($pattern, $str); 
        ?>

        // result 1
    -->

    <h3>Using preg_match_all()</h3>
    <p>The preg_match_all() function will tell you how many matches were found for a pattern in a string.</p>

    <!--
        <?php
        $str = "The rain in SPAIN falls mainly on the plains.";
        $pattern = "/ain/i";
        echo preg_match_all($pattern, $str);
        ?>

        // result 4
    -->

    <h3>Using preg_replace()</h3>
    <p>The preg_replace() function will replace all of the matches of the pattern in a string with another string.</p>

    <!--
        <?php
        $str = "Visit Microsoft!";
        $pattern = "/microsoft/i";
        echo preg_replace($pattern, "W3Schools", $str);
        ?>

        // result --  Visit W3Schools!
    -->

    <h3>Grouping</h3>
    <p>You can use parentheses ( ) to apply quantifiers to entire patterns. They also can be used to select parts of the pattern to be used as a match.</p>

    <!--
        <?php
        $str = "Apples and bananas.";
        $pattern = "/ba(na){2}/i";
        echo preg_match($pattern, $str);
        ?>

        // result --  1
    -->

    <h3>PHP Form Handling</h3>
    <p>The PHP superglobals $_GET and $_POST are used to collect form-data.</p>
    <p>The example below displays a simple HTML form with two input fields and a submit button:</p>

    <!--
        <form action="welcome.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
        </form>
    -->

    <p>When the user fills out the form above and clicks the submit button, the form data is sent for processing to a PHP file named "welcome.php". The form data is sent with the HTTP POST method.</p>

    <p>To display the submitted data you could simply echo all the variables. The "welcome.php" looks like this:</p>
    <!--
        Welcome <?php echo $_POST["name"]; ?><br>
        Your email address is: <?php echo $_POST["email"]; ?>
    -->

    <p>The same result could also be achieved using the HTTP GET method:</p>

    <!--
        <form action="welcome_get.php" method="get">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
        </form>
    -->
    <p>and "welcome_get.php" looks like this:</p>

    <!--
        Welcome <?php echo $_GET["name"]; ?><br>
        Your email address is: <?php echo $_GET["email"]; ?>
    -->

    <p>The code above is quite simple. However, the most important thing is missing. You need to validate form data to protect your script from malicious code.</p>

    <h3>GET vs. POST</h3>
    <p>Both GET and POST create an array (e.g. array( key1 => value1, key2 => value2, key3 => value3, ...)). This array holds key/value pairs, where keys are the names of the form controls and values are the input data from the user.</p>
    <p>Both GET and POST are treated as $_GET and $_POST. These are superglobals, which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.</p>

    <p>$_GET is an array of variables passed to the current script via the URL parameters.</p>
    <p>$_POST is an array of variables passed to the current script via the HTTP POST method.</p>

    <h3>When to use GET?</h3>
    <p>Information sent from a form with the GET method is visible to everyone (all variable names and values are displayed in the URL). GET also has limits on the amount of information to send. The limitation is about 2000 characters. However, because the variables are displayed in the URL, it is possible to bookmark the page. This can be useful in some cases.</p>
    <p>GET may be used for sending non-sensitive data.</p>
    <p>Note: GET should NEVER be used for sending passwords or other sensitive information!</p>

    <h3>When to use POST?</h3>
    <p>Information sent from a form with the POST method is invisible to others (all names/values are embedded within the body of the HTTP request) and has no limits on the amount of information to send.</p>
    <p>Moreover POST supports advanced functionality such as support for multi-part binary input while uploading files to server.</p>
    <p>However, because the variables are not displayed in the URL, it is not possible to bookmark the page.</p>

    <h3>PHP Form Validation</h3>
    <p>These pages will show how to process PHP forms with security in mind. Proper validation of form data is important to protect your form from hackers and spammers!</p>
    <p>The HTML form we will be working at in these chapters, contains various input fields: required and optional text fields, radio buttons, and a submit button:</p>
    <p>The validation rules for the form above are as follows:</p>
    <p>Name  --- Required. + Must only contain letters and whitespace</p>
    <p>E-mail -- Required. + Must contain a valid email address (with @ and .)</p>

    <p>The name, email, and website fields are text input elements, and the comment field is a textarea. The HTML code looks like this:</p>
    Name: <input type="text" name="name">
    E-mail: <input type="text" name="email">
    Website: <input type="text" name="website">
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>

    <p>he gender fields are radio buttons and the HTML code looks like this:</p>
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other

    <h3>The Form Element</h3>
    <p>The HTML code of the form looks like this:</p>
    <!--
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
    -->
    <p>When the form is submitted, the form data is sent with method="post".</p>

    <p>Validate Form Data With PHP</p>

    <?php
    // define variables and set to empty values
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $website = test_input($_POST["website"]);
    $comment = test_input($_POST["comment"]);
    $gender = test_input($_POST["gender"]);
    }

    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
    ?>

    <h2>PHP Form Validation Example</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    Name: <input type="text" name="name">
    <br><br>
    E-mail: <input type="text" name="email">
    <br><br>
    Website: <input type="text" name="website">
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other
    <br><br>
    <input type="submit" name="submit" value="Submit">  
    </form>

    <?php
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    ?>

    <h3>PHP Forms - Required Fields</h3>

    <!--
        <?php
        // define variables and set to empty values
        $nameErr = $emailErr = $genderErr = $websiteErr = "";
        $name = $email = $gender = $comment = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
        }

        if (empty($_POST["website"])) {
            $website = "";
        } else {
            $website = test_input($_POST["website"]);
        }

        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }
        }
        ?>
    -->

    <h3>PHP - Display The Error Messages</h3>
    <p>Then in the HTML form, we add a little script after each required field, which generates the correct error message if needed (that is if the user tries to submit the form without filling out the required fields):</p>

    <?php
    // define variables and set to empty values
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }
    
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
    }
        
    if (empty($_POST["website"])) {
        $website = "";
    } else {
        $website = test_input($_POST["website"]);
    }

    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }
    }

    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
    ?>

    <h2>PHP Form Validation Example</h2>
    <p><span class="error">* required field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    Name: <input type="text" name="name">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    E-mail: <input type="text" name="email">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    Website: <input type="text" name="website">
    <span class="error"><?php echo $websiteErr;?></span>
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other
    <span class="error">* <?php echo $genderErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">  
    </form>

    <?php
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    ?>

    <h3>PHP Forms - Validate E-mail and URL</h3>
    <p>The code below shows a simple way to check if the name field only contains letters, dashes, apostrophes and whitespaces. If the value of the name field is not valid, then store an error message:</p>

    <!--
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
        }
    -->

    <h3>PHP - Validate E-mail</h3>
    <p>The easiest and safest way to check whether an email address is well-formed is to use PHP's filter_var() function.</p>
    <!--
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
        }
    -->

    <h3>PHP - Validate URL</h3>
    <p>The code below shows a way to check if a URL address syntax is valid (this regular expression also allows dashes in the URL). If the URL address syntax is not valid, then store an error message:</p>

    <!--
        $website = test_input($_POST["website"]);
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
        $websiteErr = "Invalid URL";
        }
    -->

    <h3>PHP - Validate Name, E-mail, and URL</h3>
    <p>Now, the script looks like this:</p>

    <?php
    // define variables and set to empty values
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
        }
    }
    
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
        }
    }
        
    if (empty($_POST["website"])) {
        $website = "";
    } else {
        $website = test_input($_POST["website"]);
        // check if URL address syntax is valid
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
        $websiteErr = "Invalid URL";
        }    
    }

    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }
    }

    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
    ?>

    <h2>PHP Form Validation Example</h2>
    <p><span class="error">* required field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    Name: <input type="text" name="name">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    E-mail: <input type="text" name="email">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    Website: <input type="text" name="website">
    <span class="error"><?php echo $websiteErr;?></span>
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other
    <span class="error">* <?php echo $genderErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">  
    </form>

    <?php
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    ?>


    <h3>PHP Complete Form Example</h3>
    <p>PHP - Keep The Values in The Form</p>
    <p>To show the values in the input fields after the user hits the submit button, we add a little PHP script inside the value attribute of the following input fields: name, email, and website. </p>

    <?php
    // define variables and set to empty values
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
        }
    }
    
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
        }
    }
        
    if (empty($_POST["website"])) {
        $website = "";
    } else {
        $website = test_input($_POST["website"]);
        // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
        $websiteErr = "Invalid URL";
        }
    }

    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }
    }

    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
    ?>

    <h2>PHP Form Validation Example</h2>
    <p><span class="error">* required field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    Name: <input type="text" name="name" value="<?php echo $name;?>">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    E-mail: <input type="text" name="email" value="<?php echo $email;?>">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    Website: <input type="text" name="website" value="<?php echo $website;?>">
    <span class="error"><?php echo $websiteErr;?></span>
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
    <br><br>
    Gender:
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
    <span class="error">* <?php echo $genderErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">  
    </form>

    <?php
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    ?>

    <h3>Advanced php</h3>
    <p>php Date and Time</p>
    <p>The PHP date() function is used to format a date and/or a time.</p>
    <p>The required format parameter of the date() function specifies how to format the date (or time).</p>

    <!--
        <?php
        echo "Today is " . date("Y/m/d") . "<br>";
        echo "Today is " . date("Y.m.d") . "<br>";
        echo "Today is " . date("Y-m-d") . "<br>";
        echo "Today is " . date("l");
        ?>

        // result
        Today is 2020/11/03
        Today is 2020.11.03
        Today is 2020-11-03
        Today is Tuesday
    -->

    <p>Use the date() function to automatically update the copyright year on your website:</p>

    <!--
        © 2010-<?php echo date("Y");?>

        // result
        © 2010-2020
    -->

    <!--
        <?php
        echo "The time is " . date("h:i:sa");
        ?>

        // result
        The time is - current time
    -->

    <h3>PHP Include Files</h3>
    <p>The include (or require) statement takes all the text/code/markup that exists in the specified file and copies it into the file that uses the include statement.</p>

    <p>Including files is very useful when you want to include the same PHP, HTML, or text on multiple pages of a website.</p>
    <p>It is possible to insert the content of one PHP file into another PHP file (before the server executes it), with the include or require statement.</p>
    <p>The include and require statements are identical, except upon failure:</p>
    <ul>
        <li>require will produce a fatal error (E_COMPILE_ERROR) and stop the script</li>
        <li>include will only produce a warning (E_WARNING) and the script will continue</li>
    </ul>

    <p>So, if you want the execution to go on and show users the output, even if the include file is missing, use the include statement. Otherwise, in case of FrameWork, CMS, or a complex PHP application coding, always use the require statement to include a key file to the flow of execution. This will help avoid compromising your application's security and integrity, just in-case one key file is accidentally missing.</p>

    <p>example</p>
    <h1>Welcome to my home page!</h1>
    <p>Some text.</p>
    <p>Some more text.</p>
    <?php include 'footer.php';?>

    <!--
        // results
        Welcome to my home page!
        Some text.
        Some more text.
        Copyright © 1999-2021 W3Schools.com
    -->

    <div class="menu">
    <?php include 'menu.php';?>
    </div>
    
    <h1>Welcome to my home page!</h1>
    <p>Some text.</p>
    <p>Some more text.</p>

    <!--
        // results 
        Home - HTML Tutorial - CSS Tutorial - JavaScript Tutorial - PHP 7 Tutorial
        Welcome to my home page!
        Some text.

        Some more text.
    -->

    <h1>Welcome to my home page!</h1>
    <?php include 'vars.php';
    echo "I have a $color $car.";
    ?>

    <p>
        Welcome to my home page!
        I have a red BMW.
    </p>

    <h3>PHP include vs. require</h3>
    <p>The require statement is also used to include a file into the PHP code.</p>
    <p>However, there is one big difference between include and require; when a file is included with the include statement and PHP cannot find it, the script will continue to execute:</p>

    <h1>Welcome to my home page!</h1>
    <?php include 'noFileExists.php';
    echo "I have a $color $car.";
    ?>

    <!--
        // results 
        Welcome to my home page!
        I have a .
    -->
    
    <p>If we do the same example using the require statement, the echo statement will not be executed because the script execution dies after the require statement returned a fatal error:</p>

    <h1>Welcome to my home page!</h1>
    <?php require 'noFileExists.php';
    echo "I have a $color $car.";
    ?>

    <!--
        // result
        Welcome to my home page!
    -->

    <p>Use require when the file is required by the application.</p>
    <p>Use include when the file is not required and application should continue when file is not found.</p>

    <h1>PHP File Handling</h1>
    <p>File handling is an important part of any web application. You often need to open and process a file for different tasks.</p>

    <p>PHP Manipulating Files</p>
    <p>PHP has several functions for creating, reading, uploading, and editing files.</p>

    <h3>PHP readfile() Function</h3>
    <p>The readfile() function reads a file and writes it to the output buffer.</p>
    <p>Assume we have a text file called "webdictionary.txt", stored on the server, that looks like this:</p>
    <ul>
        <li>AJAX = Asynchronous JavaScript and XML</li>
        <li>CSS = Cascading Style Sheets</li>
        <li>HTML = Hyper Text Markup Language</li>
        <li>PHP = PHP Hypertext Preprocessor</li>
        <li>SQL = Structured Query Language</li>
        <li>SVG = Scalable Vector Graphics</li>
        <li>XML = EXtensible Markup Language</li>
    </ul>

    <p>The PHP code to read the file and write it to the output buffer is as follows (the readfile() function returns the number of bytes read on success):</p>

    <!--
        <?php
        echo readfile("webdictionary.txt");
        ?>

        // result
        AJAX = Asynchronous JavaScript and XML CSS = Cascading Style Sheets HTML = Hyper Text Markup Language PHP = PHP Hypertext Preprocessor SQL = Structured Query Language SVG = Scalable Vector Graphics XML = EXtensible Markup Language236

    -->
    <p>The readfile() function is useful if all you want to do is open up a file and read its contents.</p>

    <h3>PHP File Open/Read/Close</h3>
    <p>A better method to open files is with the fopen() function. This function gives you more options than the readfile() function.</p>
    <p>We will use the text file, "webdictionary.txt", during the lessons:</p>

    <p>The first parameter of fopen() contains the name of the file to be opened and the second parameter specifies in which mode the file should be opened.</p>

    <!--
        <?php
        $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
        echo fread($myfile,filesize("webdictionary.txt"));
        fclose($myfile);
        ?>

        // result 
        AJAX = Asynchronous JavaScript and XML CSS = Cascading Style Sheets HTML = Hyper Text Markup Language PHP = PHP Hypertext Preprocessor SQL = Structured Query Language SVG = Scalable Vector Graphics XML = EXtensible Markup Language

    -->

    <h3>PHP Read File - fread()</h3>
    <p>The fread() function reads from an open file.</p>
    <p>The first parameter of fread() contains the name of the file to read from and the second parameter specifies the maximum number of bytes to read.</p>

    <p>The following PHP code reads the "webdictionary.txt" file to the end:</p>
    <p>fread($myfile,filesize("webdictionary.txt"));</p>

    <h3>PHP Close File - fclose()</h3>
    <p>The fclose() function is used to close an open file.</p>
    <p>It's a good programming practice to close all files after you have finished with them. You don't want an open file running around on your server taking up resources!</p>
    <p>The fclose() requires the name of the file (or a variable that holds the filename) we want to close:</p>

    <!--
        <?php
        $myfile = fopen("webdictionary.txt", "r");
        // some code to be executed....
        fclose($myfile);
        ?>
    -->

    <h3>PHP Read Single Line - fgets()</h3>
    <p>The fgets() function is used to read a single line from a file.</p>
    <p>The example below outputs the first line of the "webdictionary.txt" file:</p>

    <!--
        <?php
        $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
        echo fgets($myfile);
        fclose($myfile);
        ?>

        // results
        AJAX = Asynchronous JavaScript and XML
    -->

    <h3>PHP Check End-Of-File - feof()</h3>
    <p>The feof() function checks if the "end-of-file" (EOF) has been reached.</p>
    <p>The feof() function is useful for looping through data of unknown length.</p>
    <p>The example below reads the "webdictionary.txt" file line by line, until end-of-file is reached:</p>

    <!--
        <?php
        $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
        // Output one line until end-of-file
        while(!feof($myfile)) {
        echo fgets($myfile) . "<br>";
        }
        fclose($myfile);
        ?>

        // results
        AJAX = Asynchronous JavaScript and XML
        CSS = Cascading Style Sheets
        HTML = Hyper Text Markup Language
        PHP = PHP Hypertext Preprocessor
        SQL = Structured Query Language
        SVG = Scalable Vector Graphics
        XML = EXtensible Markup Language
    -->

    <h3>PHP Read Single Character - fgetc()</h3>
    <p>The fgetc() function is used to read a single character from a file.</p>
    <p>The example below reads the "webdictionary.txt" file character by character, until end-of-file is reached:</p>

    <!--
        <?php
        $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
        // Output one character until end-of-file
        while(!feof($myfile)) {
        echo fgetc($myfile);
        }
        fclose($myfile);
        ?>

        // result - without <br>
        AJAX = Asynchronous JavaScript and XML CSS = Cascading Style Sheets HTML = Hyper Text Markup Language PHP = PHP Hypertext Preprocessor SQL = Structured Query Language SVG = Scalable Vector Graphics XML = EXtensible Markup Language

    -->

    <h1>PHP File Create/Write</h1>
    <p>The fopen() function is also used to create a file. Maybe a little confusing, but in PHP, a file is created using the same function used to open files.</p>
    <p>If you use fopen() on a file that does not exist, it will create it, given that the file is opened for writing (w) or appending (a).</p>
    <p>$myfile = fopen("testfile.txt", "w")</p>

    <h3>PHP Write to File - fwrite()</h3>
    <p>The fwrite() function is used to write to a file.</p>
    <p>The first parameter of fwrite() contains the name of the file to write to and the second parameter is the string to be written.</p>

    <!--
        <?php
        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        $txt = "John Doe\n";
        fwrite($myfile, $txt);
        $txt = "Jane Doe\n";
        fwrite($myfile, $txt);
        fclose($myfile);
        ?>
    -->

    <h3>PHP Overwriting</h3>
    <p>Now that "newfile.txt" contains some data we can show what happens when we open an existing file for writing. All the existing data will be ERASED and we start with an empty file.</p>

    <!--
        <?php
        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        $txt = "Mickey Mouse\n";
        fwrite($myfile, $txt);
        $txt = "Minnie Mouse\n";
        fwrite($myfile, $txt);
        fclose($myfile);
        ?>
    -->

    <h3>PHP File Upload</h3>
    <p>With PHP, it is easy to upload files to the server.</p>
    <p>However, with ease comes danger, so always be careful when allowing file uploads!</p>

    <h3>Create The HTML Form</h3>
    <p>Next, create an HTML form that allow users to choose the image file they want to upload:</p>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>

    <p>Some rules to follow for the HTML form above:</p>
    <ul>
        <li>Make sure that the form uses method="post"</li>
        <li>The form also needs the following attribute: enctype="multipart/form-data". It specifies which content-type to use when submitting the form</li>
    </ul>
    
    <p>Without the requirements above, the file upload will not work.</p>

    <p>The form above sends data to a file called "upload.php", which we will create next.</p>

    <h3>Create The Upload File PHP Script</h3>
    <p>The "upload.php" file contains the code for uploading a file:</p>

    <!--
        <?php
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
        }
        ?>
    -->

    <p>PHP script explained:</p>
    <ol>
        <li>$target_dir = "uploads/" - specifies the directory where the file is going to be placed</li>
        <li>$target_file specifies the path of the file to be uploaded</li>
        <li>$uploadOk=1 is not used yet (will be used later)</li>
        <li>$imageFileType holds the file extension of the file (in lower case)</li>
        <li>$imageFileType holds the file extension of the file (in lower case)</li>
        <li>Next, check if the image file is an actual image or a fake image</li>
    </ol>

    <h3>Check if File Already Exists</h3>
    <p>First, we will check if the file already exists in the "uploads" folder. If it does, an error message is displayed, and $uploadOk is set to 0:</p>

    <!--
        // Check if file already exists
        if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
        }
    -->

    <h3>limit file size</h3>
    <p>The file input field in our HTML form above is named "fileToUpload".</p>
    <p>Now, we want to check the size of the file. If the file is larger than 500KB, an error message is displayed, and $uploadOk is set to 0:</p>

    <!--
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
        }
    -->

    <h3>limit file type</h3>
    <p>The code below only allows users to upload JPG, JPEG, PNG, and GIF files. All other file types gives an error message before setting $uploadOk to 0:</p>
    
    <!--
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
        }
    -->

    <h3>Complete Upload File PHP Script</h3>
    <p>The complete "upload.php" file now looks like this:</p>

    <!--
        <?php
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
        }

        // Check if file already exists
        if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
        }
        ?>
    -->

    <h1>php Cookies</h1>
    <h3>What is a Cookie?</h3>
    <p>A cookie is often used to identify a user. A cookie is a small file that the server embeds on the user's computer. Each time the same computer requests a page with a browser, it will send the cookie too. With PHP, you can both create and retrieve cookie values.</p>

    <p>A cookie is created with the setcookie() function.</p>

    <h1>PHP Create/Retrieve a Cookie</h1>
    <p>The following example creates a cookie named "user" with the value "John Doe". The cookie will expire after 30 days (86400 * 30). The "/" means that the cookie is available in entire website (otherwise, select the directory you prefer).</p>
    <p>We then retrieve the value of the cookie "user" (using the global variable $_COOKIE). We also use the isset() function to find out if the cookie is set:</p>

    <!--
        <?php
        $cookie_name = "user";
        $cookie_value = "John Doe";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
        ?>
        <html>
        <body>

        <?php
        if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
        } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
        }
        ?>

        </body>
        </html>
    -->
    <p>Note: The setcookie() function must appear BEFORE the html tag.</p>

    <h3>Modify a Cookie Value</h3>
    <p>To modify a cookie, just set (again) the cookie using the setcookie() function:</p>

    <!--
        <!DOCTYPE html>
        <?php
        $cookie_name = "user";
        $cookie_value = "Alex Porter";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
        ?>
        <html>
        <body>

        <?php
        if(!isset($_COOKIE[$cookie_name])) {
            echo "Cookie named '" . $cookie_name . "' is not set!";
        } else {
            echo "Cookie '" . $cookie_name . "' is set!<br>";
            echo "Value is: " . $_COOKIE[$cookie_name];
        }
        ?>

        <p><strong>Note:</strong> You might have to reload the page to see the new value of the cookie.</p>

        </body>
        </html>

        // result 
        Cookie named 'user' is not set!
        Note: You might have to reload the page to see the new value of the cookie.
    -->

    <h3>Delete a Cookie</h3>
    <p>To delete a cookie, use the setcookie() function with an expiration date in the past:</p>
    <!--
        <!DOCTYPE html>
        <?php
        // set the expiration date to one hour ago
        setcookie("user", "", time() - 3600);
        ?>
        <html>
        <body>

        <?php
        echo "Cookie 'user' is deleted.";
        ?>

        </body>
        </html>
    -->

    <h3>Check if Cookies are Enabled</h3>
    <p>The following example creates a small script that checks whether cookies are enabled. First, try to create a test cookie with the setcookie() function, then count the $_COOKIE array variable:</p>

    <!--
        <!DOCTYPE html>
        <?php
        setcookie("test_cookie", "test", time() + 3600, '/');
        ?>
        <html>
        <body>

        <?php
        if(count($_COOKIE) > 0) {
            echo "Cookies are enabled.";
        } else {
            echo "Cookies are disabled.";
        }
        ?>

        </body>
        </html>

        // result
        Cookies are enabled.
    -->

    <h1>PHP Sessions</h1>

// php Sessions
<?php 
// A session is a way to store information (in variables) to be used across multiple pages.
// Unlike a cookie, the information is not stored on the users computer.
?>

// What is a PHP Session?
<?php
// When you work with an application, you open it, do some changes, and then you close it.
// This is much like a Session. The computer knows who you are. It knows when you start the application and when you end.
// But on the internet there is one problem: the web server does not know who you are or what you do, because the HTTP address doesn't maintain state.

// Session variables solve this problem by storing user information to be used across multiple pages (e.g. username, favorite color, etc). By default, session variables last until the user closes the browser.
?>

// Start a PHP Session
<?php
//A session is started with the session_start() function.
// Session variables are set with the PHP global variable: $_SESSION.
// Now, let's create a new page called "demo_session1.php". In this page, we start a new PHP session and set some session variables:
?>

<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
?>

</body>
</html>

// result 
<?php
// Session variables are set.
?>

<?php
// Note: The session_start() function must be the very first thing in your document. Before any HTML tags.
?>

// Get PHP Session Variable Values

<?php
// Next, we create another page called "demo_session2.php". From this page, we will access the session information we set on the first page ("demo_session1.php").
// Notice that session variables are not passed individually to each new page, instead they are retrieved from the session we open at the beginning of each page (session_start()).
// Also notice that all session variable values are stored in the global $_SESSION variable:
?>

<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
?>

</body>
</html>

<?php
// result
// Favorite color is .
// Favorite animal is .
?>

// Another way to show all the session variable values for a user session is to run the following code:
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
print_r($_SESSION);
?>

</body>
</html>

// result
// Array ( )

<?php
// How does it work? How does it know it's me?
// Most sessions set a user-key on the user's computer that looks something like this: 765487cf34ert8dede5a562e4f3a7e12.
// Then, when a session is opened on another page, it scans the computer for a user-key. 
// If there is a match, it accesses that session, if not, it starts a new session.
?>

// Modify a PHP Session Variable
// To change a session variable, just overwrite it:

<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// to change a session variable, just overwrite it
$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);
?>

</body>
</html>

// result 
// Array ( [favcolor] => yellow )

// Destroy a PHP Session
// To remove all global session variables and destroy the session, use session_unset() and session_destroy():

<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();

echo "All session variables are now removed, and the session is destroyed."
?>

</body>
</html>

// PHP Filters
<?php
// Validating data = Determine if the data is in proper form.
// Sanitizing data = Remove any illegal character from the data.
?>

// php filter extension
<?php
// PHP filters are used to validate and sanitize external input.
// The PHP filter extension has many of the functions needed for checking user input, and is designed to make data validation easier and quicker.
// The filter_list() function can be used to list what the PHP filter extension offers:
?>

<table>
  <tr>
    <td>Filter Name</td>
    <td>Filter ID</td>
  </tr>
  <?php
  foreach (filter_list() as $id =>$filter) {
    echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
  }
  ?>
</table>

// Why Use Filters?
<p> Many web applications receive external input. External input/data can be:</p>
<ul>
    <li>User input from a form</li>
    <li>Cookies</li>
    <li>Web services data</li>
    <li>Server variables</li>
    <li>Database query results</li>
</ul>

You should always validate external data!
Invalid submitted data can lead to security problems and break your webpage!
By using PHP filters you can be sure your application gets the correct input!

PHP filter_var() Function

The filter_var() function both validate and sanitize data.

The filter_var() function filters a single variable with a specified filter. It takes two pieces of data:
    The variable you want to check
    The type of check to use

The following example uses the filter_var() function to remove all HTML tags from a string:

<?php
$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;
?>

// result -- Hello World!

Validate Integer
The following example uses the filter_var() function to check if the variable $int is an integer. 
If $int is an integer, the output of the code below will be: "Integer is valid". If $int is not an integer, the output will be: "Integer is not valid":

<?php
$int = 100;

if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
  echo("Integer is valid");
} else {
  echo("Integer is not valid");
}
?>
// result Integer is valid

Tip: filter_var() and Problem With 0
In the example above, if $int was set to 0, the function above will return "Integer is not valid". To solve this problem, use the code below:

<?php
$int = 0;

if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
  echo("Integer is valid");
} else {
  echo("Integer is not valid");
}
?>

// result -- Integer is valid

Validate an IP Address
The following example uses the filter_var() function to check if the variable $ip is a valid IP address:

<?php
$ip = "127.0.0.1";

if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
  echo("$ip is a valid IP address");
} else {
  echo("$ip is not a valid IP address");
}
?>

// result -- 127.0.0.1 is a valid IP address


Sanitize and Validate an Email Address
The following example uses the filter_var() function to first remove all illegal characters from the $email variable, then check if it is a valid email address:

<?php
$email = "john.doe@example.com";

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
  echo("$email is a valid email address");
} else {
  echo("$email is not a valid email address");
}
?>

// result --- john.doe@example.com is a valid email address

Sanitize and Validate a URL
The following example uses the filter_var() function to first remove all illegal characters from a URL, then check if $url is a valid URL:

<?php
$url = "https://www.w3schools.com";

// Remove all illegal characters from a url
$url = filter_var($url, FILTER_SANITIZE_URL);

// Validate url
if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
  echo("$url is a valid URL");
} else {
  echo("$url is not a valid URL");
}
?>

// result --- https://www.w3schools.com is a valid URL


PHP Filters Advanced
Validate an Integer Within a Range
The following example uses the filter_var() function to check if a variable is both of type INT, and between 1 and 200:

<?php
/* variable to check */
$int = 122;

/* min value */
$min = 1;
/* max value */
$max = 200;

if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
  echo("Variable value is not within the legal range");
} else {
  echo("Variable value is within the legal range");
}
?>

// result -- Variable value is within the legal range

Validate IPv6 Address

The following example uses the filter_var() function to check if the variable $ip is a valid IPv6 address:

<?php
// Variable to check
$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

// Validate ip as IPv6
if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
  echo("$ip is a valid IPv6 address");
} else {
  echo("$ip is not a valid IPv6 address");
}
?>

// result -- 2001:0db8:85a3:08d3:1319:8a2e:0370:7334 is a valid IPv6 address

Validate URL - Must Contain QueryString
The following example uses the filter_var() function to check if the variable $url is a URL with a querystring:

<?php
// Variable to check
$url = "https://www.w3schools.com";

// Validate url
if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
  echo("$url is a valid URL with a query string");
} else {
  echo("$url is not a valid URL with a query string");
}
?>

// result -- https://www.w3schools.com is not a valid URL with a query string

Remove Characters With ASCII Value > 127
The following example uses the filter_var() function to sanitize a string. It will both remove all HTML tags, and all characters with ASCII value > 127, from the string:

<?php
// Variable to check
$str = "<h1>Hello WorldÆØÅ!</h1>";

// Remove HTML tags and all characters with ASCII value > 127
$newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo $newstr;
?>

// result --- Hello World!

PHP Callback Functions

A callback function (often referred to as just "callback") is a function which is passed as an argument into another function.
Any existing function can be used as a callback function. To use a function as a callback function, pass a string containing the name of the function as the argument of another function:

<?php
function my_callback($item) {
  return strlen($item);
}

$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map("my_callback", $strings);
print_r($lengths);
?>

// result --
Array
(
    [0] => 5
    [1] => 6
    [2] => 6
    [3] => 7
)

Starting with version 7, PHP can pass anonymous functions as callback functions:

<?php
$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map( function($item) { return strlen($item); } , $strings);
print_r($lengths);
?>

// result -- 
Array
(
    [0] => 5
    [1] => 6
    [2] => 6
    [3] => 7
)

Callbacks in User Defined Functions
User-defined functions and methods can also take callback functions as arguments. To use callback functions inside a user-defined function or method, call it by adding parentheses to the variable and pass arguments as with normal functions:

<?php
function exclaim($str) {
  return $str . "! ";
}

function ask($str) {
  return $str . "? ";
}

function printFormatted($str, $format) {
  // Calling the $format callback function
  echo $format($str);
}

// Pass "exclaim" and "ask" as callback functions to printFormatted()
printFormatted("Hello world", "exclaim");
printFormatted("Hello world", "ask");
?>

// result --  Hello world! Hello world?

/////
PHP and JSON

JSON stands for JavaScript Object Notation, and is a syntax for storing and exchanging data.
Since the JSON format is a text-based format, it can easily be sent to and from a server, and used as a data format by any programming language.

PHP has some built-in functions to handle JSON.
First, we will look at the following two functions: json_encode()  and json_decode()


PHP - json_encode()
The json_encode() function is used to encode a value to JSON format.

<?php
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

echo json_encode($age);
?>

//  result -- {"Peter":35,"Ben":37,"Joe":43}

<?php
$cars = array("Volvo", "BMW", "Toyota");

echo json_encode($cars);
?>

// result --- ["Volvo","BMW","Toyota"]


PHP - json_decode()
The json_decode() function is used to decode a JSON object into a PHP object or an associative array.

<?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
 
var_dump(json_decode($jsonobj));
?>

// result --- object(stdClass)#1 (3) { ["Peter"]=> int(35) ["Ben"]=> int(37) ["Joe"]=> int(43) }

The json_decode() function returns an object by default.
The json_decode() function has a second parameter, and when set to true, JSON objects are decoded into associative arrays.

<?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
 
var_dump(json_decode($jsonobj, true));
?>

// result ---  array(3) { ["Peter"]=> int(35) ["Ben"]=> int(37) ["Joe"]=> int(43) }

PHP - Accessing the Decoded Values
Here are two examples of how to access the decoded values from an object and from an associative array:

<?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$obj = json_decode($jsonobj);

echo $obj->Peter;
echo $obj->Ben;
echo $obj->Joe;
?>

// result 353743

<?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$arr = json_decode($jsonobj, true);

echo $arr["Peter"];
echo $arr["Ben"];
echo $arr["Joe"];
?>

// result 353743

PHP - Looping Through the Values
You can also loop through the values with a foreach() loop:

<?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$obj = json_decode($jsonobj);

foreach($obj as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
?>

// result  --- 
Peter => 35
Ben => 37
Joe => 43

This example shows how to loop through the values of a PHP associative array:
<?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$arr = json_decode($jsonobj, true);

foreach($arr as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
?>

// result ---
Peter => 35
Ben => 37
Joe => 43


////// 
PHP Exceptions

An exception is an object that describes an error or unexpected behaviour of a PHP script.
Exceptions are thrown by many PHP functions and classes.
User defined functions and classes can also throw exceptions.
Exceptions are a good way to stop a function when it comes across data that it cannot use.


Throwing an Exception

The throw statement allows a user defined function or method to throw an exception. When an exception is thrown, the code following it will not be executed.
If an exception is not caught, a fatal error will occur with an "Uncaught Exception" message.
Lets try to throw an exception without catching it:

<?php
function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero");
  }
  return $dividend / $divisor;
}

echo divide(5, 0);
?>

// result  --- 
Fatal error: Uncaught Exception: Division by zero in C:\webfolder\test.php:4
Stack trace: #0 C:\webfolder\test.php(9):
divide(5, 0) #1 {main} thrown in C:\webfolder\test.php on line 4


The try...catch Statement

To avoid the error from the example above, we can use the try...catch statement to catch exceptions and continue the process.

<?php
function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero");
  }
  return $dividend / $divisor;
}

try {
  echo divide(5, 0);
} catch(Exception $e) {
  echo "Unable to divide.";
}
?>

// result  ---  Unable to divide.

The catch block indicates what type of exception should be caught and the name of the variable which can be used to access the exception.
In the example above, the type of exception is Exception and the variable name is $e.


The try...catch...finally Statement

The try...catch...finally statement can be used to catch exceptions.
Code in the finally block will always run regardless of whether an exception was caught.
If finally is present, the catch block is optional.

<?php
function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero");
  }
  return $dividend / $divisor;
}

try {
  echo divide(5, 0);
} catch(Exception $e) {
  echo "Unable to divide. "; 
} finally {
  echo "<br>Process complete.";
}
?>

// result --- 
Unable to divide.
Process complete.


Output a string even if an exception was not caught:

<?php
function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero");
  }
  return $dividend / $divisor;
}

try {
  echo divide(5, 0);
} finally {
  echo 'Process complete.';
}
?>

// result --- Process complete.


Output information about an exception that was thrown:

<?php
function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero", 1);
  }
  return $dividend / $divisor;
}

try {
  echo divide(5, 0);
} catch(Exception $ex) {
  $code = $ex->getCode();
  $message = $ex->getMessage();
  $file = $ex->getFile();
  $line = $ex->getLine();
  echo "Exception thrown in $file on line $line: [Code $code]
  $message";
}
?>

// result --- Exception thrown in /home/TwT0ln/prog.php on line 8: [Code 1] Division by zero


PHP - What is OOP?

From PHP5, you can also write PHP code in an object-oriented style.
Object-Oriented programming is faster and easier to execute.

OOP stands for Object-Oriented Programming.

Procedural programming is about writing procedures or functions that perform operations on the data, while object-oriented programming is about creating objects that contain both data and functions.

Object-oriented programming has several advantages over procedural programming:


> OOP is faster and easier to execute
> OOP provides a clear structure for the programs
> OOP helps to keep the PHP code DRY "Don't Repeat Yourself", and makes the code easier to maintain, modify and debug
> OOP makes it possible to create full reusable applications with less code and shorter development time

// PHP - What are Classes and Objects?
Classes and objects are the two main aspects of object-oriented programming.

So, a class is a template for objects, and an object is an instance of a class.
When the individual objects are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.



<h3> PHP OOP - Classes and Objects </h3> 

<!--fdfdf-->
<h1> </h1>
<?php  
    A is a template for objects, and an object is an instance of class.
?>

<?php
OOP Case

Let s assume we have a class named Fruit. A Fruit can have properties like name, color, weight, etc. We can define variables like $name, $color, and $weight to hold the values of these properties.

When the individual objects (apple, banana, etc.) are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.

?>

<h3> Define a Class </h3>
<?php
A class is defined by using the class keyword, followed by the name of the class and a pair of curly braces ({}). All its properties and methods go inside the braces:

?>

        example: 
        <?php
        class Fruit {
        // code goes here...
        }
        ?>


        Below we declare a class named Fruit consisting of two properties ($name and $color) and two methods set_name() and get_name() for setting and getting the $name property:


        <?php
        class Fruit {
            // Properties
            public $name;
            public $color;

            // Methods
            function set_name($name) {
                $this->name = $name;
            }
            function get_name() {
                return $this->name;
            }
        }
        ?>

        Note: In a class, variables are called properties and functions are called methods!

        Define Objects

        Classes are nothing without objects! We can create multiple objects from a class. Each object has all the properties and methods defined in the class, but they will have different property values.

        Objects of a class is created using the new keyword.
        In the example below, $apple and $banana are instances of the class Fruit:

        <?php
        class Fruit {
        // Properties
            public $name;
            public $color;

            // Methods
            function set_name($name) {
                $this->name = $name;
            }
            function get_name() {
                return $this->name;
            }
        }

        $apple = new Fruit();
        $banana = new Fruit();
        $apple->set_name('Apple');
        $banana->set_name('Banana');

        echo $apple->get_name();
        echo "<br>";
        echo $banana->get_name();
        ?>

        In the example below, we add two more methods to class Fruit, for setting and getting the $color property:

            <?php
            class Fruit {
                // Properties
                public $name;
                public $color;

                // Methods
                function set_name($name) {
                    $this->name = $name;
                }
                function get_name() {
                    return $this->name;
                }
                function set_color($color) {
                    $this->color = $color;
                }
                function get_color() {
                    return $this->color;
                }
            }

            $apple = new Fruit();
            $apple->set_name('Apple');
            $apple->set_color('Red');
            echo "Name: " . $apple->get_name();
            echo "<br>";
            echo "Color: " .  $apple->get_color();
            ?>

        

        PHP - The $this Keyword

        The $this keyword refers to the current object, and is only available inside methods.
        Look at the following example:

        <?php
        class Fruit {
            public $name;
        }
        $apple = new Fruit();
        ?>

        So, where can we change the value of the $name property? There are two ways:

        1. Inside the class (by adding a set_name() method and use $this):

        <?php
        class Fruit {
            public $name;
            function set_name($name) {
                $this->name = $name;
            }
        }
        $apple = new Fruit();
        $apple->set_name("Apple");
        ?>

        2. Outside the class (by directly changing the property value):

        <?php
        class Fruit {
            public $name;
        }
        $apple = new Fruit();
        $apple->name = "Apple";
        ?>

        PHP - instanceof

        You can use the instanceof keyword to check if an object belongs to a specific class:

        <?php
        class Fruit {
            // Properties
            public $name;
            public $color;

            // Methods
            function set_name($name) {
                $this->name = $name;
            }
            function get_name() {
                return $this->name;
            }
        }

        $apple = new Fruit();
        var_dump($apple instanceof Fruit);
        ?>


    PHP OOP - Constructor

    A constructor allows you to initialize an object's properties upon creation of the object.
    If you create a __construct() function, PHP will automatically call this function when you create an object from a class.

    Notice that the construct function starts with two underscores (__)!


    We see in the example below, that using a constructor saves us from calling the set_name() method which reduces the amount of code:

    <?php
    class Fruit {
        public $name;
        public $color;

        function __construct($name) {
            $this->name = $name; 
        }
        function get_name() {
            return $this->name;
        }
    }

    $apple = new Fruit("Apple");
    echo $apple->get_name();
    ?>

    result 
    Apple 

    Another example:

    <?php
    class Fruit {
        public $name;
        public $color;

        function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color;
        }
        function get_name() {
            return $this->name;
        }
        function get_color() {
            return $this->color;
        }
    }

    $apple = new Fruit("Apple", "red");
    echo $apple->get_name();
    echo "<br>";
    echo $apple->get_color();
    ?>

    // result 
    Apple
    red


    PHP OOP - Destructor

    A destructor is called when the object is destructed or the script is stopped or exited.
    If you create a __destruct() function, PHP will automatically call this function at the end of the script.

    Notice that the destruct function starts with two underscores (__)!

    The example below has a __construct() function that is automatically called when you create an object from a class, and a __destruct() function that is automatically called at the end of the script:


    <?php
    class Fruit {
        public $name;
        public $color;

        function __construct($name) {
            $this->name = $name; 
        }
        function __destruct() {
            echo "The fruit is {$this->name}."; 
        }
    }

    $apple = new Fruit("Apple");
    ?>

    result   -- The fruit is Apple.

    Another example:


    <?php
    class Fruit {
    // Properties
        var $name;
        var $color;

        // Methods
        function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color; 
        }
        function __destruct() {
            echo "The fruit is {$this->name} and the color is {$this->color}."; 
        }
    }

    $apple = new Fruit("Apple", "red");
    ?>

    result - The fruit is Apple and the color is red.

    Tip: As constructors and destructors helps reducing the amount of code, they are very useful!

    <h1> PHP - Access Modifiers </h1>

    Properties and methods can have access modifiers which control where they can be accessed.
    There are three access modifiers:
        - public - the property or method can be accessed from everywhere. This is default
        - protected - the property or method can be accessed within the class and by classes derived from that class
        - private - the property or method can ONLY be accessed within the class
    
    
    In the following example we have added three different access modifiers to the three properties.

    Here, if you try to set the name property it will work fine (because the name property is public). However, if you try to set the color or weight property it will result in a fatal error (because the color and weight property are protected and private):
    
    
    <?php
    class Fruit {
        public $name;
        protected $color;
        private $weight;
    }

    $mango = new Fruit();
    $mango->name = 'Mango'; // OK
    $mango->color = 'Yellow'; // ERROR
    $mango->weight = '300'; // ERROR
    ?>

    In the next example we have added access modifiers to two methods. Here, if you try to call the set_color() or the set_weight() function it will result in a fatal error (because the two functions are considered protected and private), even if all the properties are public:


    <?php
    class Fruit {
        public $name;
        public $color;
        public $weight;

        function set_name($n) {  // a public function (default)
            $this->name = $n;
        }
        protected function set_color($n) { // a protected function
            $this->color = $n;
        }
        private function set_weight($n) { // a private function
            $this->weight = $n;
        }
    }

    $mango = new Fruit();
    $mango->set_name('Mango'); // OK
    $mango->set_color('Yellow'); // ERROR
    $mango->set_weight('300'); // ERROR
    ?>

    PHP OOP - Inheritance
    
    Inheritance in OOP = When a class derives from another class.

    The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.
    An inherited class is defined by using the extends keyword.

    Let's look at an example:

    <?php
    class Fruit {
        public $name;
        public $color;
        public function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color; 
        }
        public function intro() {
            echo "The fruit is {$this->name} and the color is {$this->color}."; 
        }
    }

    // Strawberry is inherited from Fruit
    class Strawberry extends Fruit {
        public function message() {
            echo "Am I a fruit or a berry? "; 
        }
    }

    $strawberry = new Strawberry("Strawberry", "red");
    $strawberry->message();
    $strawberry->intro();
    ?>

    The Strawberry class is inherited from the Fruit class.

    This means that the Strawberry class can use the public $name and $color properties as well as the public __construct() and intro() methods from the Fruit class because of inheritance.


    The Strawberry class also has its own method: message().

    <h1> PHP - Inheritance and the Protected Access Modifier </h1>

    In the previous chapter we learned that protected properties or methods can be accessed within the class and by classes derived from that class. What does that mean?
    Let's look at an example:

    <?php
    class Fruit {
        public $name;
        public $color;
        public function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color; 
        }
        protected function intro() {
            echo "The fruit is {$this->name} and the color is {$this->color}."; 
        }
    }

    class Strawberry extends Fruit {
        public function message() {
            echo "Am I a fruit or a berry? "; 
        }
    }

    // Try to call all three methods from outside class
    $strawberry = new Strawberry("Strawberry", "red");  // OK. __construct() is public
    $strawberry->message(); // OK. message() is public
    $strawberry->intro(); // ERROR. intro() is protected
    ?>

    In the example above we see that if we try to call a protected method (intro()) from outside the class, we will receive an error. public methods will work fine!

    Let's look at another example:

    <?php
    class Fruit {
        public $name;
        public $color;
        public function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color; 
        }
        protected function intro() {
            echo "The fruit is {$this->name} and the color is {$this->color}."; 
        }
    }

    class Strawberry extends Fruit {
        public function message() {
            echo "Am I a fruit or a berry? ";
            // Call protected function from within derived class - OK 
            $this -> intro();
        }
    }
    $strawberry = new Strawberry("Strawberry", "red");  // OK. __construct() is public
    $strawberry->message(); // OK. message() is public and it calls intro() (which is protected) from within the derived class
    ?>

    In the example above we see that all works fine! It is because we call the protected method (intro()) from inside the derived class.

    PHP - Overriding Inherited Methods

    Inherited methods can be overridden by redefining the methods (use the same name) in the child class.
    Look at the example below. The __construct() and intro() methods in the child class (Strawberry) will override the __construct() and intro() methods in the parent class (Fruit):

    <?php
    class Fruit {
        public $name;
        public $color;
        public function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color; 
        }
        public function intro() {
            echo "The fruit is {$this->name} and the color is {$this->color}."; 
        }
    }

    class Strawberry extends Fruit {
        public $weight;
        public function __construct($name, $color, $weight) {
            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight; 
        }
        public function intro() {
            echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram."; 
        }
    }

    $strawberry = new Strawberry("Strawberry", "red", 50);
    $strawberry->intro();
    ?>

    result is following:
    The fruit is Strawberry, the color is red, and the weight is 50 gram.

    <h1> PHP - The final Keyword </h1>

    The final keyword can be used to prevent class inheritance or to prevent method overriding.
    The following example shows how to prevent class inheritance:

    <?php
    final class Fruit {
    // some code
    }

    // will result in error
    class Strawberry extends Fruit {
    // some code
    }
    ?>

    The following example shows how to prevent method overriding:

    <?php
    class Fruit {
        final public function intro() {
            // some code
        }
    }

    class Strawberry extends Fruit {
        // will result in error
        public function intro() {
            // some code
        }
    }
    ?>

    <h1> PHP OOP - Class Constants </h1>
    Constants cannot be changed once it is declared.
    Class constants can be useful if you need to define some constant data within a class.

    A class constant is declared inside a class with the const keyword.

    Class constants are case-sensitive. However, it is recommended to name the constants in all uppercase letters.

    We can access a constant from outside the class by using the class name followed by the scope resolution operator (::) followed by the constant name, like here:

    <?php
    class Goodbye {
        const LEAVING_MESSAGE = "Thank you for visiting us!";
    }

    echo Goodbye::LEAVING_MESSAGE;
    ?>

    result is following:
    Thank you for visiting us!

    <?php
    class Goodbye {
    const LEAVING_MESSAGE = "Thank you for visiting our school!";
        public function byebye() {
            echo self::LEAVING_MESSAGE;
        }
    }

    $goodbye = new Goodbye();
    $goodbye->byebye();
    ?>

    result is following:
    Thank you for visiting our school!

    <h1> PHP - What are Abstract Classes and Methods? </h1>

    Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.

    An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.
    An abstract class or method is defined with the abstract keyword:

    <?php
    abstract class ParentClass {
        abstract public function someMethod1();
        abstract public function someMethod2($name, $color);
        abstract public function someMethod3() : string;
    }
    ?>

    When inheriting from an abstract class, the child class method must be defined with the same name, and the same or a less restricted access modifier. 
    So, if the abstract method is defined as protected, the child class method must be defined as either protected or public, but not private.
    Also, the type and number of required arguments must be the same. However, the child classes may have optional arguments in addition.

    So, when a child class is inherited from an abstract class, we have the following rules:

    -  The child class method must be defined with the same name and it redeclares the parent abstract method
    -  The child class method must be defined with the same or a less restricted access modifier
    -  The number of required arguments must be the same. However, the child class may have optional arguments in addition

    Let's look at an example:

    <?php
    // Parent class
    abstract class Car {
        public $name;
        public function __construct($name) {
            $this->name = $name;
        }
        abstract public function intro() : string;
    }

    // Child classes
    class Audi extends Car {
        public function intro() : string {
            return "Choose German quality! I'm an $this->name!";
        }
    }

    class Volvo extends Car {
        public function intro() : string {
            return "Proud to be Swedish! I'm a $this->name!";
        }
    }

    class Citroen extends Car {
        public function intro() : string {
            return "French extravagance! I'm a $this->name!";
        }
    }

    // Create objects from the child classes
    $audi = new audi("Audi");
    echo $audi->intro();
    echo "<br>";

    $volvo = new volvo("Volvo");
    echo $volvo->intro();
    echo "<br>";

    $citroen = new citroen("Citroen");
    echo $citroen->intro();
    ?>

    result is following: 
    Choose German quality! I'm an Audi!
    Proud to be Swedish! I'm a Volvo!
    French extravagance! I'm a Citroen!

    The Audi, Volvo, and Citroen classes are inherited from the Car class. This means that the Audi, Volvo, and Citroen classes can use the public $name property as well as the public __construct() method from the Car class because of inheritance.
    But, intro() is an abstract method that should be defined in all the child classes and they should return a string.

    
    <h1> PHP OOP - Abstract Classes </h1>

    Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.
    An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.


    An abstract class or method is defined with the abstract keyword:
    <?php
    abstract class ParentClass {
        abstract public function someMethod1();
        abstract public function someMethod2($name, $color);
        abstract public function someMethod3() : string;
    }
    ?>

    When inheriting from an abstract class, the child class method must be defined with the same name, and the same or a less restricted access modifier.
    So, if the abstract method is defined as protected, the child class method must be defined as either protected or public, but not private.
    Also, the type and number of required arguments must be the same. However, the child classes may have optional arguments in addition.

    So, when a child class is inherited from an abstract class, we have the following rules:
    - The child class method must be defined with the same name and it redeclares the parent abstract method
    - The child class method must be defined with the same or a less restricted access modifier
    - The number of required arguments must be the same. However, the child class may have optional arguments in addition

    Let's look at an example:
    <?php
    // Parent class
    abstract class Car {
        public $name;
        public function __construct($name) {
            $this->name = $name;
        }
        abstract public function intro() : string; 
    }

    // Child classes
    class Audi extends Car {
    public function intro() : string {
        return "Choose German quality! I'm an $this->name!"; 
    }
    }

    class Volvo extends Car {
        public function intro() : string {
            return "Proud to be Swedish! I'm a $this->name!"; 
        }
    }

    class Citroen extends Car {
        public function intro() : string {
            return "French extravagance! I'm a $this->name!"; 
        }
    }

    // Create objects from the child classes
    $audi = new audi("Audi");
    echo $audi->intro();
    echo "<br>";

    $volvo = new volvo("Volvo");
    echo $volvo->intro();
    echo "<br>";

    $citroen = new citroen("Citroen");
    echo $citroen->intro();
    ?>

    The Audi, Volvo, and Citroen classes are inherited from the Car class. This means that the Audi, Volvo, and Citroen classes can use the public $name property as well as the public __construct() method from the Car class because of inheritance.

    But, intro() is an abstract method that should be defined in all the child classes and they should return a string.

    More Abstract Class Examples
    Let's look at another example where the abstract method has an argument:

    <?php
    abstract class ParentClass {
        // Abstract method with an argument
        abstract protected function prefixName($name);
    }

    class ChildClass extends ParentClass {
        public function prefixName($name) {
            if ($name == "John Doe") {
            $prefix = "Mr.";
            } elseif ($name == "Jane Doe") {
            $prefix = "Mrs.";
            } else {
            $prefix = "";
            }
            return "{$prefix} {$name}";
        }
    }

    $class = new ChildClass;
    echo $class->prefixName("John Doe");
    echo "<br>"; 
    echo $class->prefixName("Jane Doe");
    echo "<br>"; 
    echo $class->prefixName("ilarioni");
    ?>

    Let's look at another example where the abstract method has an argument, and the child class has two optional arguments that are not defined in the parent's abstract method:

    <?php
    abstract class ParentClass {
        // Abstract method with an argument
        abstract protected function prefixName($name);
    }

    class ChildClass extends ParentClass {
        // The child class may define optional arguments that is not in the parent's abstract method
        public function prefixName($name, $separator = ".", $greet = "Dear") {
            if ($name == "John Doe") {
            $prefix = "Mr";
            } elseif ($name == "Jane Doe") {
            $prefix = "Mrs";
            } else {
            $prefix = "";
            }
            return "{$greet} {$prefix}{$separator} {$name}";
        }
    }

    $class = new ChildClass;
    echo $class->prefixName("John Doe");
    echo "<br>";  
    echo $class->prefixName("Jane Doe");
    echo "<br>";  
    echo $class->prefixName("ilarioni");
    ?>

    
    PHP OOP - Interfaces

    Interfaces allow you to specify what methods a class should implement.
    Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as "polymorphism".
    Interfaces are declared with the interface keyword:

    <?php
    interface InterfaceName {
        public function someMethod1();
        public function someMethod2($name, $color);
        public function someMethod3() : string;
    }
    ?>

    PHP - Interfaces vs. Abstract Classes

    Interface are similar to abstract classes. The difference between interfaces and abstract classes are:
        Interfaces cannot have properties, while abstract classes can
        All interface methods must be public, while abstract class methods is public or protected
        All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
        Classes can implement an interface while inheriting from another class at the same time

    To implement an interface, a class must use the implements keyword.

    A class that implements an interface must implement all of the interface's methods.

    <?php
    interface Animal {
        public function makeSound();
    }

    class Cat implements Animal {
        public function makeSound() {
            echo "Meow";
        }
    }

    $animal = new Cat();
    $animal->makeSound();
    ?>

    From the example above, let's say that we would like to write software which manages a group of animals. There are actions that all of the animals can do, but each animal does it in its own way.

    Using interfaces, we can write some code which can work for all of the animals even if each animal behaves differently:

        <?php
    // Interface definition
    interface Animal {
        public function makeSound();
    }

    // Class definitions
    class Cat implements Animal {
        public function makeSound() {
            echo " Meow ";
        }
    }

    class Dog implements Animal {
        public function makeSound() {
            echo " Bark ";
        }
    }

    class Mouse implements Animal {
        public function makeSound() {
            echo " Squeak ";
        }
    }

    // Create a list of animals
    $cat = new Cat();
    $dog = new Dog();
    $mouse = new Mouse();
    $animals = array($cat, $dog, $mouse);

    // Tell the animals to make a sound
    foreach($animals as $animal) {
    $animal->makeSound();
    }
    ?>

    Cat, Dog and Mouse are all classes that implement the Animal interface, which means that all of them are able to make a sound using the makeSound() method.
    Because of this, we can loop through all of the animals and tell them to make a sound even if we don't know what type of animal each one is.
    Since the interface does not tell the classes how to implement the method, each animal can make a sound in its own way.

    PHP - Traits

