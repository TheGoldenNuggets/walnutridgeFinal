<?php
if(isset($_COOKIE['Guest'])){
    echo '<h2>Hello, '. $_COOKIE['Guest'].'! Thank you for booking with us!</h2>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Choose Your Set</title>
  <link rel="stylesheet" href="chooseSetStyle.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div id="body">
 

 
<!--<form action="/confirmation.php">
  <div class="container">
    <h2>Want to be in the loop?</h2>
    <p>Subsricbe to see our journey!</p>
  </div>

  <div class="container" style="background-color:white">
    <input type="text" placeholder="Name" name="name" required>
    <input type="text" placeholder="Email address" name="mail" required>
    <label>
      <input type="checkbox" checked="checked" name="subscribe"> Subscribe
    </label>
  </div>

  <div class="container-fluid">
    <input type="submit" value="Subscribe">
  </div>
</form>

</body>
</html> -->


    <!--Header-->
<div class="container-fluid">

    <div id="heightFix" class="col-12 text-center">
        <img src="Images\mainPageHappyBride.jpg" alt="image of custom layeredarch" id="LayeredArchHeaderImage">


        <img src="Images\walnutridgelogo.png" alt="walnutridge logo" id="wrLogo" class="left">

        
        <div id="nav-bar" class="top-right text-center" >
            <ul>
                <li id="checkAvailability"><a href="public_html/walnutridgeSite/checkAvailabilityForm_sprintOne_final.html">CHECK AVAILABILITY</a></li>
                <li>PHOTO GALLERY</li>
                <li>WEDDING RENTALS</li>
                <li>MEET THE OWNERS</li>
                <li>ABOUT OUR SERVICE</li>
            </ul>
        </div>
    </div>
    
    <footer>
        <div class="row" id="footer">
            <div class="col-12 text-center">
                <br>
                
              <!--<a href="chooseSet2.html">&nbsp;&#10084;&nbsp;Dream Set&nbsp;&#10084;&nbsp;</a>-->
              <!--<a href="packages.php">&nbsp;Packages&nbsp;</a>-->
              <!--<a href="extras.php">&nbsp;Extras&nbsp;</a>-->
              <!--<a href="reserve.php">&nbsp;Reserve&nbsp;</a>-->
              <!--<a href="confirmation.php">&nbsp;Confirmation&nbsp;</a>-->
              
              <a href="chooseSet2.html">&nbsp;&#10084;&nbsp;Dream Set&nbsp;&#10084;&nbsp;</a>
              
                <hr>
            </div>
        </div>
    </footer>
   

    <!-- content-->
    <div class="row text-center">
        <div class="col-1 col-md-2"> </div>
        <form action="packages.php" method="GET" class="col" >
            <fieldset>
                <legend>Please Select A Package</legend>

                <!--<label for="Layered Arch"><b>Layered Arch</b></label>-->
                <!--<input type="checkbox" id="Layered Arch" name="set" value="Layered Arch" >-->

                <!--<label for="Modern Round"><b>Modern Round</b></label>-->
                <!--<input type="checkbox"  id="Modern Round" name="set" value="Modern Round" >-->

                <!--<label for="Dark Walnut"><b>Dark Walnut</b></label>-->
                <!--<input type="checkbox"  id="Dark Walnut" name="set" value="Dark Walnut">-->

                <!--<label for="Rustic Wood"><b>Rustic Wood</b></label>-->
                <!--<input type="checkbox" id="Rustic Wood" name="set" value="Rustic Wood">-->

                <!--<label for="Vintage Mirror"><b>Vintage Mirror</b></label>-->
                <!--<input type="checkbox" id="Vintage Mirror" name="set" value="Vintage Mirror" >-->
                <!--<br>-->
                <!--<label for="date"><b>Please select your wedding date.</b></label>-->
                <!--<input type="date" id="date" name="date" required>-->
                
                <label for="Layered Arch"><b>Layered Arch</b></label>
                <input type="radio" id="Layered Arch" name="set" value="Layered Arch" >

                <label for="Modern Round"><b>Modern Round</b></label>
                <input type="radio"  id="Modern Round" name="set" value="Modern Round" >

                <label for="Dark Walnut"><b>Dark Walnut</b></label>
                <input type="radio"  id="Dark Walnut" name="set" value="Dark Walnut">

                <label for="Rustic Wood"><b>Rustic Wood</b></label>
                <input type="radio" id="Rustic Wood" name="set" value="Rustic Wood">

                <label for="Vintage Mirror"><b>Vintage Mirror</b></label>
                <input type="radio" id="Vintage Mirror" name="set" value="Vintage Mirror" >
                <br>
                <label for="date"><b>Please select your wedding date.</b></label>
                <input type="date" id="date" name="date" required>
                <br>
                <br>
                 <div class="row" >
                    <div class="col-12 text-center">
                        <button type="submit" id="btn"><h1>Submit</h1></button>
                        </div>
                        </div>

            </fieldset>
        </form>
        <div class="col-1 col-md-2"> </div>
    </div>



    <div class="row text-center">
        <div class="col-12" id="mainArchInfo">
            <h1 id="pinkHead">LAYERED ARCH RENTAL PIECES</h1>
            <p></p>
            <p></p>

            <hr>
        </div>
    </div>

    <div class="row text-center">
     
       
        <div class="col"><img id="color-fix" src="Images\chooseSet_layeredArch2.jpg" alt="black sqaure"><p> </p></div>
        <div class="col"><img id="color-fix" src="Images\chooseSet_layeredArch3.jpg" alt="blush square"><p> </p></div>
        <div class="col"><img id="color-fix" src="Images\chooseSet_layeredArch4.jpg" alt="sage square"><p> </p></div>
        
    </div>


    <div class="row text-center">
        <div class="col-12" id="mainArchInfo">
            <h1 id="pinkHead">MODERN ROUND SIGN RENTAL SET</h1>
            <p></p>
            <p></p>

            <hr>
        </div>
    </div>

    <div class="row text-center">
        <div class="col"> <img id="color-fix" src="Images\chooseSet_ModernRound1.jpg" alt="terracotta color"><p></p></div>
        <div class="col" ><img id="color-fix" src="Images\chooseSet_ModernRound2.jpg" alt="black sqaure"><p></p></div>
        <div class="col" ><img id="color-fix" src="Images\chooseSet_ModernRound3.jpg" alt="blush square"><p></p></div>
       
     </div>



    <div class="row text-center">
        <div class="col-12" id="mainArchInfo">
            <h1 id="pinkHead">DARK WALNUT SIGN RENTAL SET</h1>
            <p></p>
            <p></p>

            <hr>
        </div>
    </div>

    <div class="row text-center">
        <div class="col"><img id="color-fix" src="Images\chooseSet_DarkWalnut2.jpg" alt="black sqaure"><p></p></div>
        <div class="col"><img id="color-fix" src="Images\chooseSet_DarkWalnut3.jpg" alt="blush square"><p></p></div>
        <div class="col"><img id="color-fix" src="Images\chooseSet_DarkWalnut4.jpg" alt="sage square"><p></p></div>
     </div>

    <div class="row text-center">
        <div class="col-12" id="mainArchInfo">
            <h1 id="pinkHead">RUSTIC WOOD SIGN SET</h1>
            <p></p>
            <p></p>

            <hr>
        </div>
    </div>

    <div class="row text-center">
        
        <div class="col"> <img id="color-fix" src="Images\chooseSet_RusticWood1.jpg" alt="terracotta color"><p></p></div>
        <div class="col"><img id="color-fix" src="Images\chooseSet_RusticWood2.jpg" alt="black sqaure"><p></p></div>
        <div class="col"><img id="color-fix" src="Images\chooseSet_RusticWood3.jpg" alt="blush square"><p></p></div>
        
        
    </div>

    <div class="row text-center">
        <div class="col-12" id="mainArchInfo">
            <h1 id="pinkHead">VINTAGE MIRROR SIGN SET</h1>
            <p></p>
            <p></p>

            <hr>
        </div>
    </div>

    <div class="row text-center">
        
        <div class="col" ><img id="color-fix" src="Images\chooseSet_VintageMirror2.jpg" alt="black sqaure"><p></p></div>
        <div class="col" ><img id="color-fix" src="Images\chooseSet_VintageMirror3.jpg" alt="blush square"><p></p></div>
        <div class="col" ><img id="color-fix" src="Images\chooseSet_VintageMirror4.jpg" alt="sage square"><p></p></div>
        
    </div>



    </div>
    <footer>
        <div class="row" id="footer">
            <div class="col-12 text-center">
                <p> Contact Us</p>
                <h5>Walnut Ridge Leather Company</h5>
                <h5>Orrville,Ohio</h5>
                <h5>Walnutridgeleathercompany@gmail.com</h5>
                <hr>
            </div>
        </div>
    </footer>
</div>


  <script src="script.js"></script>


</body>
</html>