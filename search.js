$(function(){
	$("#find").keyup(function(event) {
		var keysearch = $(this).val();
		alert(keysearch);
		var xhttp;
		xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById(board).innerHTML = this.responseText;
			}
		};
		xhttp.open("GET", "search_name.php?name=" + keysearch, true);
		xhttp.send();
	});
});