<?php



$name=$_POST["name"];
if($name=="" || strlen($name)>5)
{
    echo"Please enter a valid name";
}
else
{
    echo"Your user name is".$_POST["name"];
}
echo"<br>";

$last_name=$_POST["last_name"];
if($last_name=="" || strlen($last_name)>5)
{
    echo"Please enter a valid Last name";
}
else{
    echo"Your user name is".$_POST["last_name"];
}
echo"<br>";
$number=$_POST["number"];
if($number=="")
{
    echo"Please enter a valid Last name";
}
else{
    echo"Your user name is".$_POST["number"];
}
echo"<br>";
echo "<br>";

if(isset($_POST["Desig"]))
{
    echo"You have selected".$_POST["Desig"];
}
else
{
    echo "you haven't selected any radio";
}

echo "<br>";

if(isset($_POST["language"]))
{
    echo"You have selected".$_POST["language"];
}
else
{
    echo "you haven't selected any radio";
}



$pass=$_POST["password"];
if(strlen($pass)>8)
{
    echo "Please enter a valid password";
}
else
{
    echo "Your password is valid";
}


echo "<br>";

if(isset($_POST["c1"]) || isset($_POST["c2"])  )
{
    if(isset($_POST["c1"] ) )

    {
    echo "You have picked one of the ".$_POST["c1"];
    }


echo"<br>";

  if(isset($_POST["c2"]))
   {
     echo"You have picked one of the".$_POST["c2"];
   }
}
else
 {
    echo"You have not picked any Box";
 }


if( $_FILES["myfile"]["size"]>2000000)
{

    echo("Not valid");

}
else
{
if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../Files/".$_FILES["myfile"]["name"]))

    {

        echo "File Uploaded";

    }

    else

        echo "Can't uploaded";
}







?>