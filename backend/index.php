




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="style/style-navBar.css">
    <link rel="stylesheet" href="style/style-Home.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <title>Reading</title>




    <link rel="stylesheet" href="style/footer.css">

      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
      <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
      <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>



    <style>

        .list{
            padding-left: 15px;
        }
        .backHome{
            width: 100%;
            /* background-image: url("image/backHome.png"); */
            background-position: center;
            background-size: cover;

            position: absolute;
            z-index: -1;
        }

        .titleIntro3{
            box-shadow: 0 3px 25px 0 rgba(59, 10, 31, 0.1);
        }


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
                            /* border-top: 1px solid #666565; */
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
   
    <div  >
        <img class="backHome" src="image/backHome.png" alt="">
    </div>

    <header>
        <div class="menu-toggle"></div>
        <a href="index.php">
            <div class="logo" >Reading.</div>
        </a>
        <nav class="navBar">
            
            <a  href="index.php" class="active">Home</a>
            <a href="our_books.php"  >Our Books</a>
            <a href="add_authors.php">Add Authors</a>
            <a href="add_books.php">Add Books</a>
            
            <div class="register" >
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

    
    <div class="intro">
        <p>Want to read <span>books</span> and develop your ideas ?<br>
            Don't look too much : <span>Reading</span> is what you need,<br> 
            and it'll give you everything.</p>

            <div class="registerIntro" href="">
                <a href="login.php"><div class="login" >Join us</div>
                <a href="our_books.php"><div class="login" >Let'S Read</div></a>
            </div>
    </div>
<div class="bigOntro">
    <div class="intro2">
        <div class="titleIntro">
            <p>Reading</p>
            <h1>Features</h1>
        </div>
        <p>Reading gives you everything you need to develop your ideas. Reading is not only
            a book reading platform, it is an integrated platform, giving you the Opportunity
            to learn about and read the most famous books for free.</p>

            
    </div>
</div>

<div class="BoxIntro">
    <div class="intro3">
        <div class="titleIntro3">
            <div class="inBox">
                <img src="image/icon-1.png" alt="" >
            <p>Stop wasting time, we???ll give you the<br>
                correct tools in the market.</p>
            </div>
        </div>
        <div class="titleIntro3">
            <div class="inBox">
                <img src="image/icon-2.png" alt="">
            <p>We give you what???s working and<br>
                what???s convert, and you don???t pay if<br>
                you don???t see results or receive<br>
                sales.</p>
            </div>
        </div>
        <div class="titleIntro3">
            <div class="inBox">
                <img src="image/icon-3.png" alt="">
            <p>We will accompany you from the<br>
                very first step, because your success<br>
                is our priority.</p>
            </div>
        </div>
        

            
    </div>
</div>

<div class="Contact">
    <img class="BackContact" src="image/Path.png" alt="" >
    <div class="InContact">
        <p>
            <span>Contact Us</span><br>
            If you have any broblem, please Contact us
        </p>
        <form>
            <input class="input" type="text" placeholder="name"><br>
            <input class="input" type="email" placeholder="email"><br>
            <textarea class="input" placeholder="Massage" rows="5" cols="58" ></textarea><br>
            <input class="send" type="submit" value="Send">
        </form>
        
    </div>
</div>


<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16
    86.3339111376101!2d-9.234811842132505!3d32.29390770151528!2m3!1f0!2f0
    !3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdac211719897669%3A0x6f59fa5b
    b517f58a!2sYoucode%20Safi!5e0!3m2!1sen!2sma!4v1613388410760!5m2!1sen!2sma"
     width="100%" height="450" frameborder="0" style="border:0;margin-bottom: 200px;" allowfullscreen=""
      aria-hidden="false" tabindex="0"></iframe></div>




    <script>
       


        var btn = $('#button');

            $(window).scroll(function() {
            if ($(window).scrollTop() > 300) {
                btn.addClass('show');
            } else {
                btn.removeClass('show');
            }
            });

            btn.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({scrollTop:0}, '300');
        });


    </script>


<div class="divBtnTop">
    <a href=""><img src="image/btnTop.png" alt=""></a>
</div>

    







<!-- <footer class="footer">
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
    <div class="copyright">?? Copyright 2021 Reading.  by AG developer</div> -->



    <?php include("footer.php"); ?>

</body>
</html>