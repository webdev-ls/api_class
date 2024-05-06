<?php 
 $onLoad = time();
 echo $onLoad;
 

 define("DB_HOST","localhost");
 define("DB_USER","root");
 define("DB_NAME","api");
 define("DB_PASS","root");
 
 
 // echo DB_HOST;
 
 $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
 
 if(mysqli_connect_error()){
     die("Connect ERROR". mysqli_connect_error());
 }
 

 $query = "SELECT * FROM `users`";

 $result = mysqli_query($conn,$query);
 
 // echo time();
 echo "<pre>";
 $i = 0;
 $users = [];
    while($user = mysqli_fetch_assoc($result)){
        print_r($user);
        array_push($users, $user);
        $i++;
        echo $i;
        // $result = mysqli_query($conn,$query);
        // while($user = mysqli_fetch_assoc($result)){
        //     $i++;
        //     print_r($user);
        // }
    }


    foreach($users as &$user){
        print_r($user);
        $i++;
        echo $i;
    }

    echo "is is ".$i."<br>";

    // $result = mysqli_query($conn,$query);
    // while($user = mysqli_fetch_assoc($result)){
    //     print_r($user);
    // }
    // $result = mysqli_query($conn,$query);
    // while($user = mysqli_fetch_assoc($result)){
    //     print_r($user);
    // }
    // $result = mysqli_query($conn,$query);
    // while($user = mysqli_fetch_assoc($result)){
    //     print_r($user);
    // }




    echo time();
    $diff = time() - $onLoad;
 echo "<script>alert('$diff')</script>";
 
 
 
 
?>