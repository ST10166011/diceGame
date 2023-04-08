<!doctype html>
<html>

  <!--head-->
  <head>
      <!--Link css file-->
      <link rel="stylesheet" href="css/dice.css">
       <!--Fonts-->
        <link rel="stylesheet" href="CSS/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.css">
   </head>

     <!--Body-->
     <body class="body">

     <!--container-->
     <div class="container">
        <label class="game" id="co">.  </label>
    <!--welcome-->
   <h1 class="games" id="con">WELCOME</h1>
   <!--play-->
   <div class="in" id="inn">
        <!--button-->
        <button class="bn" id="close" onclick="closes()">X</button>
          <iframe class="frame" id="mac1" src="../dice/roll.php"></iframe>         
        <br>
        <button class="bnts" id="close" onclick="roll()" >Roll Dice</button>
         
    </div>
   <!--Button-->
   <button class="btn" id="start" onclick="St()">Start Game <label class="fa fa-smile-o" style="color:yellow;"></labels></button>
</div>
</body>
<script type="text/javascript">

/*declaration & assign variables*/
var words = document.getElementById("con");
var starts = document.getElementById("start");
var board = document.getElementById("inn");

/*set timeout*/
 setTimeout(come, 2000);

 /*functions*/
    function come() {
        /*message*/
        words.innerHTML ="TO";

        words.style.color = "red";
        setTimeout(game, 2000);
    }
     function game() {
        /*message*/
        words.innerHTML ="DICE GAME";
        words.style.color = "red";

        setTimeout(games, 1500);
    }

    function games(){
        starts.style.display="block";
        starts.style.marginLeft = "39%";
    }
    /*start game*/
function St(){

    /*message*/
    words.innerHTML ="DICE GAME";
    words.style.fontSize = "15px";
    words.style.marginTop = "0px";
    words.style.borderBottom = "1px solid";
    /*hide button*/
    starts.style.display="none";
     board.style.display="block";
    
}
/*close game*/
function closes(){
    words.innerHTML ="YOU CLOSED \n THE GAME!!! <?php echo '<br>';?>PLAY AGAIN";
    words.style.fontSize = "";
    words.style.marginTop = "";
    words.style.borderBottom = "";
    /*hide button*/
    starts.style.display="block";
    board.style.display="none";
    var mac12= src="../dice/roll.php";
  document.getElementById("mac1").src =mac12;
}
 
function roll(){

   var mac12= src="../dice/roll.php";
  document.getElementById("mac1").src =mac12;

}
    </script>
    <html>
