<!DOCTYPE html>
<html>
    <head>
        <title>PHP AJAX Database</title>
        <script>
            function showUser(str) {
                if(str == "") {
                    document.getElementById('txtHint').innerHTML = "";
                    return;
                }
                    var xh = new XMLHttpRequest();
                    xh.onreadystatechange = function() {
                        if(this.readyState == 4 && this.status == 200) {
                            document.getElementById('txtHint').innerHTML = this.responseText;
                        }
                }
                xh.open("GET", "getUser.php?q=" + str, true);
                xh.send();
            }
        </script>
</head>
<body>
    <form>
        <select name="users" onchange="showUser(this.value)">
        <option value="">Select a person</option>
        <option value="1">Itachi</option>
        <option value="2">Satoru</option>
        <option value="3">Sanji</option>
        <option value="4">Zoro</option>
        <option value="5">Ussopp</option>
        </select>
    </form>
    <br>
    <div id="txtHint"><b>Person details will be listed here</b></div>
</body>
</html>