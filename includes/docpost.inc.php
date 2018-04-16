<?php
	session_start();
	if(isset($_SESSION['doctor-field']) && isset($_SESSION['client-id'])){
		$name= $_SESSION['doctor-field'];
		$id=$_SESSION['client-id'];
		if(isset($_POST['text'])){
			$text = $_POST['text'];
		    
		    
			
			$url="../chattext/".$id.".html";
		      $fp = fopen($url, 'a');
		      fwrite($fp, "<div class='msgln'>(".date("g:i A").") <b>".$name."</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
	    	fclose($fp);
		      
		}
		elseif(isset($_FILES["file"]["type"])){
			saveImage($id, $name);
		}
		
	   
	}

?>
<?php
function saveImage($id, $name){
	$validextensions = array("jpeg", "jpg", "png");
	$temporary = explode(".", $_FILES["file"]["name"]);
	$file_extension = strtolower(end($temporary)) ;

		if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")

		) && ($_FILES["file"]["size"] < 10000000)//Approx. 10000kb files can be uploaded.
		&& in_array($file_extension, $validextensions)) {

			if ($_FILES["file"]["error"] > 0){
			echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
			}
			else{
				if (file_exists("../chattext/upload/" . $_FILES["file"]["name"])) {
				echo " Image already exists please rename it and upload again ";
				}
				else{
				$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
				$targetPath = "../chattext/upload/".$_FILES['file']['name']; // Target path where file is to be stored
				move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file

				$url="../chattext/".$id.".html";
		      $fp = fopen($url, 'a');
		      fwrite($fp, "<div class='msgln'>(".date("g:i A").") <b>".$name."</b>: <img style='max-width: 700px; max-height: 500px;' src='".$targetPath."'/></div>");
	    	fclose($fp);



				echo "Image Uploaded Successfully...!!";
			
			
				}
		}
	}
	else{
		echo "Please select an image";
	}
}

?>