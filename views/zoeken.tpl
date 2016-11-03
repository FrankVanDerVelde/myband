<section>
	<h1 class="pageTitle">Zoeken</h1>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","model/getuser.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>

<form id="zoekbalk">
 <input type="text" size="25" onkeyup="showUser(this.value)" placeholder="Type hier een champion naam.">
</form>
<div id="txtHint"></div>
	
	</section>