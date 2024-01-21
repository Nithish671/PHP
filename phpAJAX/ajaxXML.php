<!DOCTYPE html>
<html>
    <head>
        <title>PHP AJAX Database</title>
        <script>
            function showCd(str) {
                if(str == "") {
                    document.getElementById('txtHint').innerHTML = "";
                    return;
                }
                var xh = new XMLHttpRequest();
                xh.onreadystatechange = function() {
                    if(this.readyState == 4  && this.status == 200) {
                        document.getElementById('txtHint').innerHTML = this.responseText;
                    }
                }
                xh.open("GET", "getCd.php?q=" + str, true);
                xh.send();
            }
        </script>
    </head>
<body>
    <h2>Select a CD:</h2>
    <form>
    <select name="cds" onchange="showCd(this.value)">
    <option value="">Select a CD</option>
    <option value="Bob Dylan">Bob Dylan</option>
    <option value="Bee Gees">Bee Gees</option>
    <option value="Cat Stevens">Cat Stevens</option>
    </select>
    </form>
    <div id="txtHint"><b>CD info will be listed here!</b></div>
</body>
</html>