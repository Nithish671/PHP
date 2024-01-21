<!DOCTYPE html>
<html>
    <head>
        <title>PHP AJAX Database</title>
        <script>
            function showRes(str) {
                if(str.length == 0) {
                    document.getElementById('liveSearch').innerHTML = "";
                    document.getElementById('liveSearch').style.border = "0px";
                    return;
                }
                var xh = new XMLHttpRequest();
                xh.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        document.getElementById('liveSearch').innerHTML = this.responseText;
                        document.getElementById('liveSearch').style.border = "#A5ACB2";
                    }
                }
                xh.open("GET", "liveSearch.php?q=" + str, true);
                xh.send();
            }
        </script>
    </head>
    <body>
        <form>
            <input type="text" size="30" onkeyup="showRes(this.value)" />
            <div id="liveSearch"></div>
        </form>
    </body>
</html>