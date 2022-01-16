<html>
    <head>
        <title>email</title>
        <style>
            #container{
                /* background-color:cyan; */
                width:105%;
                margin:  0 auto;
                font-size: 35px
            }
            input{
                font-size: 35px
                
            }
        </style>
        </html>
        <body>
           <div id="container">
               
               <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
               <br>
                <pre>
                    Email     : <input type="email" name="emailname" placeholder="example@gmail.com">
                    *the email will revcive on this email only
                    <br>   
                    Subject   : <input type="text" name="subject">
                    <br>
                    Message   : <textarea name="message" id="" cols="40" rows="15"></textarea>
                    <br>
                                 <input type="submit" name=submit" value="Send">   <input type="reset" value="clear">
                    
                </pre>
                
            </form>
            
        </div>
        </body>
    </head>

    <?php 
    if(isset($_POST["submit"]))
    {
    $to = $_POST["emailname"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
     $from =$_POST["emailname"];
     $headers ="From : $from";
    //  echo $to." ".$subject." ".$message." ".$from;
     $result= mail($to, $subject ,$message, $headers);
     if($result){
         echo "successfully send ";
     }
     else{
         echo "failed to send";
     }

     }
    ?>
