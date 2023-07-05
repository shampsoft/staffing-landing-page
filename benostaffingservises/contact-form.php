<?php 

if(isset($_POST['submit'])){
        $to = "manish@benosupport.com"; 
        $from = $email;
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        // $category = $_POST['category'];
        // $date = $_POST['date'];
        // $time = $_POST['time'];
        $subject = "Contact For Staffing ";
        $subject2 = "Copy of your form submission";
        $message = "Contact Us- Contact For Staffing". "\n\n"."Name:-" . $name . " " ."\n\n"."Phone Number:-" .$phone. "\n\n". " "."Customer Email:-" . $email ."\n\n". ""."Customer Message:-" . $_POST['message'];
        $message2 = "Here is a copy of your message " . $name . "\n\n" .$number."\n\n" . $_POST['message'];
        
        $headers = "MIME-Version: 1.0\r\n";  
        $headers .= "Content-type: text/html; charset=utf-8\r\n"; 
        $headers .= "Reply-To: ".$from." <".$from.">\r\n";
        $headers = "From:" . $from;
        $headers2 = "From:" . $to;
        mail($to,$subject,$message,$headers);
        mail($from,$subject2,$message2,$headers2);
        echo "<center>"."Mail Sent. Thank you " . $email . ", we will contact you shortly."."<br><br>";     
        // header("location:thanks.php");
        
    }
    

?>

<!DOCTYPE html>
<html>
<head>
<title>Beno Support Staffing Services- Thank You</title>
<meta http-equiv="refresh" content="5;url=http://benosupport.com/benostaffingservises/">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11120187488"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11120187488');
</script>

<!-- Event snippet for Beno Staffing Services conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-11120187488/0eXvCNjY96UYEOCwwrYp'});
</script>
 


<style>
.container {
  border-radius: 12px;
  padding: 20px;
  margin: auto;
  width:50%;
  background-color:orange;
}
</style>

</head>

<body>
<div class="container">
  <center><h1 class="display-3">Thank You!</h1></center>
  <hr>
</div>
</body>
</html>