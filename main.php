<html>
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Get Key Code"/>
    <meta name="keywords" content="Key Code"/>
    <meta name="keywords" content="key code"/>
    <meta name="description" content="Get Key Code - get key code of keyboard keys">
    <meta name="author" content="Known DEV">
    <title>Get Key Code</title>
    <link rel="stylesheet" type="text/css" href="resource/css/main.css">
</head>
<body>

<div class="container-fluid">
    <p id="keyCodeShow"></p><small id="keyCodeShowSimple"></small>
    <div class="label">
        <h4 id="keyShow"></h4>
    </div>
</div>

<footer>
    <h1>Press key and get key code.</h1>
    <p>Powered by Known DEV  -  <small>V 1.0.0</small></p>
</footer>

<script>
    function showKeyCode(event) {
        console.log(event);
        document.getElementById('keyCodeShow').innerHTML = event.keyCode;
        if (event.keyCode === 32) {
            document.getElementById('keyShow').innerHTML = "SPACE";
        } else {
            document.getElementById('keyShow').innerHTML = event.key.toUpperCase();
        }
    }
    window.addEventListener('keydown', showKeyCode);
</script>

</body>
</html>