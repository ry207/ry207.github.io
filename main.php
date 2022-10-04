<?php
 include "header.html";
 ?>
<form action="main.php", method="get">
    Enter password correctly to view my blog/diary<br>
    Enter password to validate: <br> <input type="password" name="password" placeholder="Password">
    <input type="submit" value="Enter">
</form>
<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(-1);
//main blog
function blog(){
    $break = "<br><br><br>";
    $br = "<br>";
    // enter the blog in here so only password can see it
    echo "October 1st:$break";
    echo "I just had a scrimmage to see what team i make, waiting for the call to see if i make A, its 10:47, all my friends have already gotten a call but im still waiting ugh.<br>";
    //echo max($my_age, $dad_age);
    //^^^ prints the max number, if the max was written as min, it would print the lowest number
    //you can do round() to round to the closest number or ceil() to no matter what round upwards or floor() to round down
    echo "11:09 and i still havent gotten a call.<br>";
    echo "Turns out they called my mom 7 times and she didnt know, but i made b1 sadly, really wanted to make A but its fine, my friends are on that team so...<br>";
    echo "apparently frickin jake klein made A over me, hes gonna get no playing time hes horrible, wasnt that bad i made b1 tho bc rick japor said i was gonna be the best on the team so thats nice$break";
    echo "October 2nd:$break";
    echo "Its 2:10 rn and i cant sleep so im coding this rn, i just spent like 20 min figuring out why i was getting an error when i type in the password, turns out i had writen action=blog.php in the <form> when the file name was index.php so it took me forever to figfure it out felt so dumb afterwords.$br";
    echo "Apparently gunnar just basicly tried to break up with addy according to her, she sent a snap and she just looked horrible, so i asked what happend and thats what she told me, its 2:17 rn ill update in a sec.$br";
    echo "lowkey forgot abt the update but its 2:42 and addy said she lied abt vaping and gunnar was mad so he giving her one more chance apparently...$br";
    echo "I just woke up its 9:30, i gotta leave at like 10:30 or something for my frist practice for b1, still mad i didnt make A but its alright, ill just be capatin and be the best on b1$br";
    echo "1:05 just got back from my first practice with this team, everyone sucks expect for like 4 kids, at like 5:00 landon is taking me to watch a movie with him and maybe some girls.";
}
function secret_blog(){
    $break = "<br><br><br>";
    $br = "<br>";
    echo "this is my secret blog for the special stuff ;)$br";
    echo "me and dan intend to buy a cart off amazon for 20$ and smoke behind the cub foods by his place and get faded and watch some cars while toasted, gonne be sick but we gotta make sure we out there for a long time so our parents cant tell we faded lmao$br";
    echo "2:43 and i think my dad just went to sleep so ima go see if i can smoke for a bit, still mad i made b1 instead of A so im trynna relive the stress ig, and itll help me get to sleep, i could just take a xan but theres no fun in that, i just get tired and fall asleep when i do that, atleast with cart im high and have some fun$br";
    echo "Its the next day i just woke up its 9:35, turns out he didnt go to sleep he was awake so i just watched some tiktok and went to sleep$br";
}


// <br> for break
function password_check(){
    if($_GET["password"] == "ryley"){
        //blog();
        header('Location: blog.php');
    }elseif($_GET["password"] == "secret"){
        //secret_blog();
        header('Location: secret.php');
    }else if(empty($_GET["password"])){
      echo "";
    }
     elseif(isset($_GET["password"]) != "ryley" || "secret") {
        echo "Wrong password try again";
    }
     else {
      echo "";
    }
}
password_check();
setcookie('password', isset($_GET["password"]), time() + 86400 * 5);


include "footer.html";?>
