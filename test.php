<?php
$conn = mysqli_connect("localhost","mysql","mysql","hotel") or die(mysql_error());



$sql = "SELECT * FROM `test`";
$res = mysqli_query($conn,$sql);
$ty= [];
while ($row=mysqli_fetch_array($res)) {

    array_push($ty, $row);
}


$son = 0;
for($i=0;$i<count($ty);$i++){

    $narx = 0 ;
    for($f=0;$f<$son;$f++){
        if($i!=count($ty)-$f){
            $narx+=$ty[$i+$f]['narx'];
        }
    }



//echo $narx."<br>";
    for($j=0;$j<154;$j++){

        if($narx+$ty[$j]['narx']==19627072){
            echo $narx."+".$ty[$j]['narx'];
        }
    }


    if($i==count($ty)-1){
       // echo "tugadi";
    }
    $son+=1;
}

