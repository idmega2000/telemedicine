<?php
    session_start();
    if(isset($_SESSION['doctor-field']) && isset($_POST['client-id']) && isset($_POST['client-name'])){
        $client_name= $_POST['client-name'];
        $chat_name = $_SESSION['doctor-field'];
        //set the client id to be session
        $_SESSION['client-id'] = $_POST['client-id'];
      
        $id = $_SESSION['client-id'];
        $url="../chattext/".$id.".html";
    }
    else{
        header('Location: doctorspage.php');

    }


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Chat - Customer Module</title>
<script type="text/javascript" src="../js/project.js"></script>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css" style="style/css" />
    <link rel="stylesheet" href="../css/stylesheet.css" style="style/css" />
    <script type="text/javascript" src="../jquery/jquery-2.1.4.min.js"></script>
</head>
 
<div id="wrapper">
    <div id="menu">
        <p class="welcome">Welcome, <b><?php echo $chat_name." "."chatting with"." ".$client_name; ?></b></p>
        <p class="logout"><a id="exit" href="#">Exit Chat</a></p>
        <div style="clear:both"></div>
    </div>
    <div id="chatbox">
        <?php

            if(file_exists($url) && filesize($url) > 0){
                $handle = fopen($url, "r");
                $contents = fread($handle, filesize($url));
                fclose($handle);
                 
                echo $contents;
            }
        ?>
    </div
     
     
    <form name="message" action="">
        <input name="usermsg" type="text" id="usermsg" size="63" value="" required />
        <input name="submitmsg" type="submit"  id="submitmsg" value="Send" />
    </form>

    <form name="uploader" action=""  enctype="multipart/form-data" style="margin-top: 30px">
        <label style="margin-left:0%;">Upload Image(pg, jpeg, and png)</label>
        <input name="file" type="file"  id="uploadImg" value="Upload" style="margin-left:43.6%;" required />
         <input name="upload-btn" type="submit"  id="uploadBtn" value="Upload Image" />
    </form>
 
</div>

<script type="text/javascript">
// jQuery Document
$(document).ready(function(){
    //If user wants to end session
    $("#exit").click(function(){
        var exit = confirm("Are you sure you want to end the session?");
        if(exit==true){window.location = 'doctorspage.php';}      
    });


    //If user submits the form
    $("#submitmsg").click(function(){ 

        var clientmsg = $("#usermsg").val();
        $.post("../includes/docpost.inc.php", {text: clientmsg});      
        $("#usermsg").val("");
        $("#usermsg").attr("value", "");
        return false;
    });


$("form[name='uploader']").submit(function(e) {
        var formData = new FormData($(this)[0]);

        $.ajax({
            url: "../includes/docpost.inc.php",
            type: "POST",
            data: formData,
            async: false,
            success: function (msg) {
                alert(msg);
                
            },
            cache: false,
            contentType: false,
            processData: false
        });

        e.preventDefault();
    });


});






//Load the file containing the chat log
    /*function loadLog(){     
        var url = "<?php echo $url; ?>";
        $.ajax({
            url: url,
            cache: false,
            success: function(html){        
                $("#chatbox").html(html); //Insert chat log into the #chatbox div               
            },
        });
    }

*/

    //Load the file containing the chat log
    function loadLog(){  
        var url = "<?php echo $url; ?>";   
        var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height before the request
        $.ajax({
            url: url,
            cache: false,
            success: function(html){        
                $("#chatbox").html(html); //Insert chat log into the #chatbox div   
                
                //Auto-scroll           
                var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height after the request
                if(newscrollHeight > oldscrollHeight){
                    $("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
                }               
            },
        });
    }


    setInterval (loadLog, 2500);    //Reload file every 2500 ms
</script>
<?php
if(isset($_GET['logout'])){ 

     
    //Simple exit message
    $fp = fopen($url, 'a');
    fwrite($fp, "<div class='msgln'><i>User ". $chat_name ." has left the chat session.</i><br></div>");
    fclose($fp);
     unset($_SESSION['client-id']);
    header("Location: doctorspage.php"); //Redirect the user
}
?>
</body>