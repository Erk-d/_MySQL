

<?php
//$students[] = 'Ron';
//$students[] = 'George';


//echo $students[0];
//echo $students[1];


//$class = array('scripting' => 'javascript');
?>


<?php
$products = array(
    '001' => array(
                'name' => 'Sharpie',
                'price' => 5.00
            ),
    '023242' => array(
        'name' => 'Notepad',
        'price' => 10.00
    ),
    '23342' => array(
        'name' => 'Moleskin',
        'price' => 13.00
    ),
    '034' => array(
        'name' => 'pencil',
        'price' => 10.00
    )
);
/*
echo $products['001']['name'];
echo $products['002']['name'];
*/

ksort($products);



foreach ( $products as $product ) {
    //Access the index "name" for each product
   $name = $product['name'];
   $price = '$' . $product['price'];
    //write out a sentence with the information

    echo "<p>The product $name costs $price</p>";
};
?>