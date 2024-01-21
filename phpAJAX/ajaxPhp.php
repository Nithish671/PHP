<!DOCTYPE html>
<html>
    <head>
        <title>PHP AJAX</title>
        <script>
            function showHint(str) {
                if(str.length == 0) {
                    document.getElementById('txtHint').innerHTML = "";
                    return;
                } else {
                    var xh = new XMLHttpRequest();
                    xh.onreadystatechange = function() {
                        if(this.readyState == 4 && this.status == 200) {
                            document.getElementById('txtHint').innerHTML = this.responseText;
                        }
                    }
                    xh.open("GET", "getHint.php?q="+str, true);
                    xh.send();
                }
            } 
        </script>
    </head>
    <body>
        <h2>Start typing a name in the input field below : </h2>
        <form>
            <label for="name">Name : </label>
            <input type="text" id="name" name="name" onkeyup="showHint(this.value)" />
        </form>
        <p>Suggestions : <span id="txtHint"></span></p>
    </body>
</html>