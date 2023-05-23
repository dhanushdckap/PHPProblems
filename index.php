<?php

//1. If you have an array $a = array( 0, 1, 2, 3, 4 );, how do you extract the value 3 from the array?

$a = array( 0, 1, 2, 3, 4 );
echo $a[3];

//----------------------------------------------------------------------------------------------------------------//

//2. If you have an array $b = array( "zero"=>0, "one"=>1, "two"=>2, "three"=>3, "four"=>4 );, how do you extract the value 3 from the array?

$b = array( "zero"=>0, "one"=>1, "two"=>2, "three"=>3, "four"=>4 );
echo $b["three"];

//----------------------------------------------------------------------------------------------------------------//

//3. If you have the following array, how do you extract the value 3 from the array?
/*
$c = array(
    array( 0,1 ),
    array( 2,array( 3 ) )
);
*/

$c = array(
    array( 0,1 ),
    array( 2,array( 3 ) )
);

print_r($c[1][1][0]);

//----------------------------------------------------------------------------------------------------------------//

//4. If you have the following array, how do you extract the value 3 from the array?
/*
$d = array(
    "a"=>array(
        "b"=>0,
        "c"=>1
    ),
    "b"=>array(
        "e"=>2,
        "o"=>array(
            "b"=>3
        )
    )
);
*/

$d = array(
    "a"=>array(
        "b"=>0,
        "c"=>1
    ),
    "b"=>array(
        "e"=>2,
        "o"=>array(
            "b"=>3
        )
    )
);

print_r($d["b"]["o"]["b"]);

//----------------------------------------------------------------------------------------------------------------//

//5. Create a new array with each comma-separated value as its own array element from the string $e = "a,b,c,d,e,f".

$e = "a,b,c,d,e,f";
$e = explode( ",", $e );
print_r(json_encode($e));


//----------------------------------------------------------------------------------------------------------------//

//6. With the result array from 5, create a new array where each element is both key and value. In other words, the result should be:
/*
array(
    "a"=>"a",
    "b"=>"b",
    "c"=>"c",
    "d"=>"d",
    "e"=>"e"
)
*/

$newArray = [];
for($i=0;$i<=5;$i++){
    $newArray[$i] = $i;
}
print_r($newArray);

//----------------------------------------------------------------------------------------------------------------//

//7. You have two arrays like the following. One contains field labels, the other contains field values. Write a program to output the third array.
/*
$keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
);
$values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
);
// want to output
$keysAndValues = array(
    "first"=>"dinosaur",
    "second"=>"pig",
    "third"=>"platypus"
);

*/

$keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
);
$values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
);

$keysAndValues = [];
$keysAndValues = array_combine( array_values( $keys ), array_values( $values ) );

print_r($keysAndValues);

//----------------------------------------------------------------------------------------------------------------//

//8. You have an array of transactions, each of which has a debit and credit amount. Find the absolute value of the transaction amount (i.e. abs( debit - credit )) and add it as a new key=>value pair to each transaction.
/*
$transactions = array(
    array(
        "debit"=>2,
        "credit"=>3
    ),
    array(
        "debit"=>15,
        "credit"=>14
    )
);
// outputs
$transactions = array(
    array(
        "debit"=>2,
        "credit"=>3,
        "amount"=>1
    ),
    array(
        "debit"=>15,
        "credit"=>14,
        "amount"=>1
    )
);

*/

// working in progress ...........


//----------------------------------------------------------------------------------------------------------------//

//9. Find the sum of this array of numbers $f = array( 0, 1, 2, 3, 4, 5, 6 );.

$f = array( 0, 1, 2, 3, 4, 5, 6 );
$totalValue = 0;

for ($i=0; $i < count($f) ; $i++) { 
    $totalValue += $f[$i];
}

echo "Total value = ";
print_r($totalValue);











?>