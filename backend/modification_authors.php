<?php
require_once('connect.php');

$idA = $_GET['idA'];

$sqlAfficher = "SELECT * FROM authors WHERE idA=$idA ";

$queryAffiche = $pdo->query($sqlAfficher);

$rowAffiche = $queryAffiche->fetch();



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/add_authors.css">
    <link rel="stylesheet" href="style/footer.css">

    <title>Reading</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">


    <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>

  
  <style>
    @media only screen and (max-width: 820px) {
        
    
        .navBar{
            display: block;
            
    }
        .navBar.activeBar{
        height: 320px;
        position: relative;
        
        background-color: #ffffff;
        width: 100%;
        box-shadow: 0px 3px 6px rgb(0 0 0 / 45%);
        position: fixed;
        top: 0;
        padding-top: 50px;
        z-index: 10;
        transition: 0.5s;
        
    }
        .navBar a{
          display: none;
          padding: 10px;
          color: #006D6F;
          left: 50px;
          transition: 0.5s;
        
    }
      .navBar.activeBar a{
        display: grid;
            grid-template-columns: auto;
    
            width: 70vw;
          padding: 10px;
          font-size: 15px;
          border-bottom: 1px solid #8EDCDC;
          left: 45px;
          top: 35px;
          transition: 0.5s;
        
    }
    
    .navBar.activeBar a:hover{
        color: #004446;
          transition: 0.5s;
        
    }
    
    
    .navBar.activeBar .register{
            position: absolute;
            right: 140px;
            top: 240px;
    }
    .navBar.activeBar .register .aSingIn{
            width: 50px;
            height: 23px;
            font-size: 13px;
          border-bottom: none;
          transition: 0.5s;
          margin-left: 20px;
    }
    
    .navBar.activeBar .register .aSingIn .login{
        padding: 13px 30px;
            width: 38px;
            height: 13px;
            font-size: 13px;
            color: #fff;
    
    }
    .navBar.activeBar .register .aSingIn .singin{
        padding: 13px 15px;
            width: 45px;
            height: 13px;
            font-size: 13px;
            color: #fff;
    }
        
        .menu-toggle{
            display: block;
            width: 40px;
            height: 40px;
            margin: 25px 40px;
    
            float: right;
            cursor: pointer;
            text-align: center;
            font-size: 30px;
    
            position: relative;
            z-index: 99;
                    
                }
                .menu-toggle:before{
                  
                    content: '\f0c9';
                    font-family: fontAwesome;
                    line-height: 40px;
                    color: #ffffff;
                    transition: 0.5s;
                }
                .menu-toggle.activeBar:before{
                    content: '\f00d';
                   
                    color: #006D6F;
                    transition: 0.5s;
                }
    
            } 

</style>


</head>
<body>
    <header>
        <div class="menu-toggle"></div>
        <a href="index.php">
            <div class="logo" >Reading.</div>
        </a>
        <nav class="navBar">
            
            <a  href="index.php">Home</a>
            <a href="our_books.php">Our Books</a>
            <a href="add_authors.php">Add Authors</a>
            <a href="add_books.php">Add Books</a>
            
            <div class="register">
                <a href="login.php" class="aSingIn"><div class="singin" >Sing in</div></a>
                <a href="login.php" class="aSingIn"><div class="login" >Log in</div></a>
            </div>
        </nav>
       
    </header>

    <script>
        $(document).ready(function(){
            $('.menu-toggle').click(function(){
                $('.menu-toggle').toggleClass('activeBar')
                $('.navBar').toggleClass('activeBar')
                $('.navBar a').toggleClass('activeBar')
            })
        }); 
    </script>

    <p class="titre">Modification of Authors</p>
<form class="container" method="post" action="updateauthors.php"  enctype="multipart/form-data">
    <div class="DivFile">
        <p>&#10010; Add Image</p>

        <p class="editImg">&#9998; Edit Image</p>
        <input class="ImgFile" type="file" name="image" accept=".png, .jpg, .jpeg" data-id='imgChange'>
        <img id="imgChange" src="images/<?php echo $rowAffiche['image'] ?>" alt="">
    </div>


   
    <div class="content">
            <input type="hidden" name="idA"  value="<?= $rowAffiche['idA'] ?>">

        <input type="text" placeholder="First Name" name="Fname" class="input" value="<?php echo $rowAffiche['Fname'] ?>">
        <input type="text" placeholder="Last Name" class="input" name="Lname" value="<?php echo $rowAffiche['Lname'] ?>">
        <input type="date" placeholder="Date of Birth" class="input" name="date" value="<?php echo $rowAffiche['dateN'] ?>"><br />
        
        <button class="ADD">Edit</button>
    </div>
</form>


<script>
    function ImageSetter(input,target) {
       if (input.files && input.files[0]) {
           var reader = new FileReader();
           
           reader.onload = function (e) {
               target.attr('src', e.target.result);
           }
           reader.readAsDataURL(input.files[0]);
       }
   }
   $(".ImgFile").change(function(){
     var imgDiv=$(this).data('id');  
          imgDiv=$('#' + imgDiv);    
       ImageSetter(this,imgDiv);
   });
</script>




<footer class="footer">
    <div class="t-list">
    <div class="list">
        <ul>
            <li><span class="color_F">About Us</span></li>
            <li>About us</li>
            <li>Features</li>
            <li>Commission</li>
            <li>Prices</li>
        </ul>
    </div>
    <div class="list">
        <ul>
            <li ><span class="color_F">General</span></li>
            <li>Reading awards</li>
            <li>Press Space</li>
            <li>Join us</li>
        </ul>
    </div>

    <div class="list">
        <ul>
            <li><span class="color_F">Support</span></li>
            <li>Help</li>
            <li>FAQ</li>
            <li>Blog</li>
        </ul>
    </div>

    <div class="list">
        <ul>
            <li><span class="color_F">Conditionst</span></li>
            <li>Temes of use</li>
            <li>Contact Us</li>
        </ul>
    </div>

    <div class="list">
        <ul>
            <li><span class="color_F"> Follow Ust</span> </li>
                <li><i class="fa fa-facebook"></i> Facebook</li>
                <li> <i class="fa fa-twitter"></i> Twitter</li>
                <li> <i class="fa fa-instagram"></i>  Instagram</li>
                <li><i class="fa fa-linkedin"></i> Linkedin</li>
        </ul>
    </div>
  
    <div class="list2">
            <p class="color_R"><b> Reading.</b> </p>
                <p class="app">Download The app and enjoy the great experience wherever you<br />are</p>
                <div class="app_store">
                <img src="images/1.png" alt="img1">
                <img src="images/2.png" alt="img2">
                </div>
    </div>

                
   
</div>  
    </footer>
    <div class="copyright">?? Copyright 2021 Reading.  by AG developer</div>
    
</body>
</html>