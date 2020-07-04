<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>Gateway - Adminixtrator</title>
<link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Yellowtail&display=swap" rel="stylesheet">
<style>
    body{
        padding: 15%; 
        background-color: #000000;
        color: #ffffff;
        font-family: 'Indie Flower', cursive;
        text-align: center;
    }
    #active, #text{
        display: none;
    }
    
</style>
</head>

<body>

    <div>
        <a href="#" onclick="shanajade()" id="dull"><img src="https://res.cloudinary.com/adminixtrator/image/upload/v1593886990/CaptureSecial-removebg.png" width="140"></a>
        <a href="#" onclick="shanajade()" id="active"><img src="https://res.cloudinary.com/adminixtrator/image/upload/v1593889689/new-moon-with-face_1f31a.png" width="143"></a>
        <br><br><h1 id="text">Gb'ope </h1>
    </div>
<!-- <p style="text-align: center;"><img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/240/apple/237/new-moon-with-face_1f31a.png" alt="Image"></p> -->

    <script>
        function shanajade() {
            document.getElementById("dull").style.display = "none";
            document.getElementById("active").style.display = "initial";
            document.getElementById("text").style.display = "initial";
            setTimeout(function(){
            window.location.href = 'https://adminixtrator.herokuapp.com/';
            }, 3000);
        }
    </script>

</body>
</html>
