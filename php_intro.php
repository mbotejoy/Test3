<?php
//Comments written in double slashes
print "My first php statement";
print '<br>'; //use html to break
echo"Another way to print the statements,use 'echo'";
print "<br>";
print "Termination is done using a semi colon";
print'<br>';
print 21+1;//Displays the result
print'<br>';
print 19;//Displayes the number
print '<br>';
//*************CSS in PHP************
echo "Today is Monday";
print '<br>';

//PHP will help display dynamic content
print date('l'); // Displays the current day
print '<br>';
print date('l',strtotime('tomorrow'));
print '<br>';
print date('l',strtotime('+2days'));
print '<br>';

print date('d-m-y');// displays the date-month-year
print '<br>';
print date('jS F,Y l'); //displays 20th May,2024 Monday
print '<br>';
print date_default_timezone_set('Africa/Nairobi');
print date('l ,jS F Y ,H:i:s');

//Combining string and built-in function use a fullstop
print '<br>';
echo"Today is : ". date('jS F Y , l');

//Declaring a variable
print '<br>';
$fname ="Alex";
echo $fname;
print '<br>';
$yob=2012;
print '<br>';
print $yob;
$age=date('Y')-$yob;
echo '<br>';
print $age;
echo '<br>';
print $fname . " is ". $age ." years old";
print '<br>';
//Using if-else condition
$adult_age = 18;
if($age >= $adult_age){
    print $fname . " is an adult";
}else{
    print $fname . " is not an adult";
}
print '<br>';
$user_dob = $yob . " 05-24";
//$birthdate = new DateTime('$user_dob');
//$today = new DateTime('today');
//$interval = $birthdate->diff($today);
//echo '<pre>';
//print_r($interval);
//echo '<pre>';

print '<br>';
//You can combine w/o using a fullstop if when 
//declaring variable a double quotation mark was used
$lname="Okama";
print "Last name is $lname";
print '<br>';
//print 'last name $lname'; 
//this has single quotation marks thus it wont be able to combine

//Declaring Variables using Array
$person['lname']="Cherop";
print $person['lname'];
echo '<br>';
//Defining a constant term
define('lname','Okama');
print lname;







?>
