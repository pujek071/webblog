function getXMLHttpRequest(){
	if(window.ActiveXObject){
		return new ActiveXObject("Microsoft.XMLHttpRequest");
	}else if(window.XMLHttpRequest){
		return new XMLHttpRequest();
	}else alert("Status : Can Not Create XMLHttpRequest Object");
}

var xmlhttp = getXMLHttpRequest();
function sendRequest(pageURL,ElementID){
    var obj = document.getElementById(ElementID);
	obj.innerHTML = '<center><br><img src=images/muter.gif></center>';
	if(xmlhttp.readyState == 4 || xmlhttp.readyState == 0){
		xmlhttp.open('GET',pageURL,true);
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
				obj.innerHTML = xmlhttp.responseText;
			}	
		}
		xmlhttp.send(null);
	}
}