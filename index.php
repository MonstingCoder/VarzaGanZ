<!DOCTYPE html>
<html lang="id">
<head>
    
    <title>Belajar HTML Dasar</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fira+Code&display=swap">

</head>

<body id="body">
    
    <p id="termTitle">
        Output<br>
    </p>

<pre id='code'>
<?php

$myName = 'monsco';
$myName .= ' still';
$myName .= " learning\n";

echo "myname is $myName";

?>
</pre>

<!-- <button id="fullscreenButton">Go Fullscreen</button> -->
    
<script>

    const bodyStyle = document.getElementById('body').style
    bodyStyle.backgroundColor = 'black'
    bodyStyle.color = 'cyan'
    bodyStyle.fontFamily = 'Fira Code, monospace'
    bodyStyle.fontSize = '160%'
    bodyStyle.margin = '20px'
    bodyStyle.textAlign = 'center'

    const termTitle = document.getElementById('termTitle')
    termTitle.style.color = 'red'
    termTitle.style.fontSize = '140%'

    const codeStyle = document.getElementById('code').style
    codeStyle.fontSize = '120%'
    codeStyle.textAlign = 'justify'

    const button = document.getElementById('fullscreenButton');
    button.addEventListener('click', () => {
        if (!document.fullscreenElement) {
            document.documentElement.requestFullscreen().catch(err => {
                alert(`Error attempting to enable full-screen mode: ${err.message} (${err.name})`);
            });
        } else {
            document.exitFullscreen();
        }
    });
    
</script>
</body>
</html>
