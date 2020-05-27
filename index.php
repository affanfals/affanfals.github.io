<html>
<head></head>
<body>
<div id="container"></div>
<script>
function getVersion() {
    try
    {
        var request = new XMLHttpRequest();
        request.open('GET', 'https://legendmod.ml/VERSION.txt', false);
        request.send(null);

        if (request.status === 200)
            return request.responseText.replace(/^\s+|\s+$/g, '');
    } catch (e) {}

    return (new Date()).getTime();
}

var version = getVersion();
document.getElementById("container").innerHTML += version;
console.log(version);
</script>
</body>
</html>