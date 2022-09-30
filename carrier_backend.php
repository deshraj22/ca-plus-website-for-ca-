<?php
session_start();
$sum=$_SESSION['sum'];
// echo "session".$sum;



if(isset($_POST['submit'])){
 
    $a=($_POST["fname"]);
    $b=($_POST["lname"]);
    $c=($_POST["dob"]);
    $d=($_POST["s1"]);
    $e=($_POST["s2"]);
    $f=($_POST["s3"]);
    // $g=($_POST["ey"]);
    $h=($_POST["loc"]);
    $i=($_POST["email"]);
    $j=($_POST["cn"]);
    $answer=($_POST['uanswer']);
    $filename = $_FILES['file']["name"];
    echo $filename;
    die;

    if($sum==$answer){
        $to="ds8184339@gmail.com";
        $subject="SOME ONE HAS APPLIED FOR JOB IN CA-PLUS";
        $headers = 'From:ca-plus' . "\r\n";
    // $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    //      $headers ='MIME-Version: 1.0' . "\r\n";
    
        $full_message = "
        Fullname - $a $b
        Date of birth - $c
        Educational qualification - $d
        Job profile - $e
        Experience - $f
        // Year of experience - $g
        Current location - $h
        Email Id - $i
        Contact no -$j";

            
           
        $user="$i";
        $user_subject="Thank you $a";
        $user_headers='from:ca-plus';
        $user_message="Dear $a \n Welcome to Ca-plus \n  we got ur application,we will contact u soon";
      
     if (mail($to, $subject, $full_message, $headers)) {
        mail($user, $user_subject, $user_message, $user_headers);
        $_SESSION["ok"] = "<h3 style='color:#80ba26'>Dear <span class='text-info'>$a $b</span>,</h3><blockquote><p>We have got your application. We will contact you soon.<br/>For Quick Enquiry <span class='text-warning'>Call Us</span> at <span class='text-info'><i class='fa fa-phone fa-rotate-90'></i><span> <a href='tel:9334300825'>+919028388889</a></span></span></p>
        <p>Thank You!</p></blockquote>";
        header("Location:carrier_thanks.php");
    }

else{
    echo $a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$answer,$files;
    // $_SESSION["ok"] = "<h3 style='color:#80ba26'>Dear <span class='text-info'>$a $b</span>,</h3><blockquote><p>Something is wrong. It seems like internet is not working well.<br/>For Quick Enquiry <span class='text-warning'>Call Us</span> at <span class='text-info'><i class='fa fa-phone fa-rotate-90'></i><span> <a href='tel:9028388889'>+91-9028388889</a></span></span></p>
    // <p>Please, try again!</p><p>Thank You!</p></blockquote>";
    // header("Location:carrier_thanks.php");
}
    
  
   
   
}
else{
 
 
    $_SESSION["ok"] = "<marquee width=30% direction=right height=50px behavior= alternate id=mrr>
    <span class='text-success' style='background-color: #242B2E';>ALERT!!</span>
    </marquee><h1 style='color:#6A1B4D'><span class='text-danger' style='margin-left:200px; '>ALERT!!CAPTHA ERROR</span>,</h><blockquote><p>It seems like u have entered wrong captcha value.<br/>Go back and re-try</p>
    <p>Thank You!</p></blockquote>";
  


 

}
header("Location:carrier_thanks.php");


}
else
{
    echo "ERROR";
}

?>
