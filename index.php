<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>FCPPOCHENTONG</title>
</head>
<style>
    *{
        text-decoration: none;
    }
    body{
        background: black !important;
        color: white !important;
        overflow: hidden;
    }
    .nav-bar{
        padding: 1rem;
    }
    .nav-bar li{
        list-style: none;
        display: inline-block;
    }
    .nav-bar li a{
        list-style: none;
        display: inline-block;
        padding-left: 1rem;
        padding-right: 1rem;
        color: #BFCDE0;
        font-weight: bold;
    }
    .nav-bar .nav-div ul{
        padding-right: 1.5rem;
    }
    .nav-div{
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .logo{
        font-size: 1.5rem;
    }
    .logo a{
        text-decoration: none !important;
        font-weight: 600;
        color: white;
    }
    .activities-album{
        display: none;
    }
    .activities-album .image-track .image{
        width: 20vh;
        height: 20vh;
        object-fit: cover;
        object-position: center;

    }
    .image-track {
        display: flex;
        gap: 4vmin;
        position: relative;
        left: 50%;
        transform: translate(0%, 0%);
    }
    </style>
<script>
    
</script>
<body>
    <?php 
        include 'navigation.php';
    ?>
    <div class="container py-3" >
        <div class="row">
            <div class="col-6">
                <button class="btn btn-outline-info" id="activities-button" type="button">Activities Album</button>
            </div>
        </div>
    </div>
 
    <?php 
        include 'footer.php'
    ?>
       <?php 
        include 'location.php'
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    let btn = document.getElementById("activities-button"); 
    btn.addEventListener("click", () => {
        window.location.href = "testing.php";
    })

</script>
</body>
</html>


