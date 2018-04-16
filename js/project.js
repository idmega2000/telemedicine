function validateQuizForm(){
		var select_Class=document.getElementById('selectClass');

		if(select_Class.value == ""){
			alert("Please select Subject Class ");
			return false;
		}
		
	}



	 function fetchTimes(chosen_date){
	 	var docspec= document.getElementById('phySpeciality');
	 	var strUser = docspec.options[docspec.selectedIndex].value;
	 	if(strUser== ""){
	 		var todayDate = new Date();
	 		todayDate .setDate(todayDate .getDate() + 10);
			var tomorowDate = todayDate.toISOString().substring(0, 10)

	 		alert('Please choose a prefered physician');
	 		document.getElementById("apointmentDate").value = tomorowDate;
	 		return false;
	 	}

	 	var chosen_date;
	 	var xmlhttp=new XMLHttpRequest();
		xmlhttp.open("POST","../includes/getavailabletime.inc.php", true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200){

		
				document.getElementById("scheduleTime").innerHTML=xmlhttp.responseText;
			}

	  	}
	  	xmlhttp.send("chosen-date="+chosen_date+"&pref-physician="+strUser);
	}	

function validatePassForm(){
        var firstNP=document.getElementById('firstNP');
        var secondNP =document.getElementById('secondNP');
        if(firstNP.value != secondNP.value){
            alert("the new password must be the same");
            return false;
        }

        if(select_Class.value == ""){
            alert("Please select Subject Class ");
            return false;
        }
        
        
    }
