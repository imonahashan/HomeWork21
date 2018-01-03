<?php
namespace App\classes;
class StudentInfo
{
    public function saveStudentsInfo($data){
       $link = mysqli_connect('localhost','root','','students');

       $dataSend = "INSERT INTO informations(first_name,last_name,email,mobile,address) VALUES ('$data[first_name]','$data[last_name]','$data[email]','$data[mobile]','$data[address]')";
        if(mysqli_query($link,$dataSend)){
            $massage ="Info added successfully!!";
            return $massage;
        }else{
            die('Query Problem'.mysqli_error($link));
        }

    }
    public function viewStudentsInfo(){
        $link = mysqli_connect('localhost','root','','students');

        $dataReceive = "SELECT * FROM informations";
        if(mysqli_query($link,$dataReceive)){
            $result=mysqli_query($link,$dataReceive);
            return $result;
        }else{
            die('Query Problem'.mysqli_error($link));
        }
    }
}