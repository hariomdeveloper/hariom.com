<?php
        $con=mysqli_connect('localhost','root','','record');
        if(isset($_POST['su']))
        {
            $name=$_POST['na'];
            $email=$_POST['em'];
            $mobile number=$_POST['mo'];
            $query="INSERT INTO register(name,email,mobile number) VALUES ('$name','$email','$mobile number')";
            $run=mysqli_query($con,$query);
        }
    ?>