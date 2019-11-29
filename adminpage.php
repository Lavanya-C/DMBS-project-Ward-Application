
<?php
include_once('db.php');
if(isset($_POST['wid']))
    $wid = $_POST['wid'];
 $res = mysqli_query($conn,"SELECT wardid FROM ward");
?>
<?php
include_once('db.php');
if(isset($_POST['vid']))
    $wid = $_POST['vid'];
 $res = mysqli_query($conn,"SELECT voterid FROM voter");
?>
<?php
include_once('db.php');
if(isset($_POST['cid']))
    $cid = $_POST['cid'];
 $res = mysqli_query($conn,"SELECT candidateid FROM candidate");
?>
<?php
include_once('db.php');
if(isset($_POST['bid']))
    $bid = $_POST['bid'];
 $res = mysqli_query($conn,"SELECT billid FROM welfare");
?>
<?php
include_once('db.php');
if(isset($_POST['pyid']))
    $pyid = $_POST['pyid'];
 $res = mysqli_query($conn,"SELECT partyid FROM party");
?>

<?php
include_once('db.php');
if(isset($_POST['wid']))
    $wid = $_POST['wid'];
 $res = mysqli_query($conn,"SELECT * FROM ward");
?>
<?php
include_once('db.php');
if(isset($_POST['vid']))
    $vid = $_POST['vid'];
 $res = mysqli_query($conn,"SELECT * FROM voter");
?>
<?php
include_once('db.php');
if(isset($_POST['pyid']))
    $pyid = $_POST['pyid'];
 $res = mysqli_query($conn,"SELECT * FROM party");
?>
<?php
include_once('db.php');
if(isset($_POST['cid']))
    $cid = $_POST['cid'];
 $res = mysqli_query($conn,"SELECT * FROM candidate");
?>
<?php
include_once('db.php');
if(isset($_POST['bid']))
    $vid = $_POST['bid'];
 $res = mysqli_query($conn,"SELECT * FROM welfare");
?>


<!doctype html>
<html>
    <head>
        <link rel = "stylesheet" type = "text/css" href = "adminpage.css">
        <title>Admin LoggedIn</title>
        <script>
    function f1()
        {
            alert("Record Deleted Successfully");
        }

    </script>
    </head>

    <body>
        <h1>ADMIN FUNCTIONS</h1>
            <center>
                <div class = "C1">
                    <!-- Button1 -->
                    <button class = "but" onclick="document.getElementById('popup').style.display='block'">Insert Candidate</button>
                    <div id="popup">
                       Enter Candidate Details<br><br>
                       <form action = "cinsert.php" method = "post" class = "F1">
                            <span style = "margin : 20px 60px 20px 0px ">Candidate Id : </span><input type = "text" name = "cid" ><br>
                            <span style = "margin : 20px 29px 20px 0px">Candidate Name :</span> <input type = "text" name = "cname" ><br>
                            <span style = "margin : 20px 122px 20px 0px">Status :</span><input type = "text" name = "csts"><br>
                            <span style = "margin : 20px 5px 20px 0px">Years of Experience :</span><input type = "text" name = "cexp"><br>
                            <span style = "margin : 20px 90px 20px 0px">Efficiency :</span><input type = "text" name = "ceff"><br>
                            <span style = "margin : 20px 105px 20px 0px">Party Id :</span><input type = "text" name = "pyid"><br>
                            <span style = "margin : 20px 100px 20px 0px">Ward ID :</span><input type = "text" name = "wid"><br>
                            <button class= "but1" type="submit">Submit</button>
                            <button class = "but1" type = "reset" >Reset</button>
                           <button class ="but1" onclick="document.getElementById('popup').style.display='none'">Cancel</button>
                        </form>
                    </div>
                    <!-- Button2 -->
                     <button class = "but" onclick="document.getElementById('popup1').style.display='block'">Insert Voter </button>
                     <div id="popup1">
                        Enter Voter Details<br><br>
                        <form action = "vinsert.php" method = "post" class = "F1">
                             <span style = "margin : 20px 80px 20px 0px ">Voter Id : </span><input type = "text" name = "vid" ><br>
                             <span style = "margin : 20px 100px 20px 0px"> Name :</span> <input type = "text" name = "vname"><br>
                             <span style = "margin : 20px 122px 20px 0px">Age :</span><input type = "text" name = "vage"><br>
                             <span style = "margin : 20px 38px 20px 0px">Date Of Birth :</span><input type = "text" name = "vdob"><br>
                             <span style = "margin : 20px 80px 20px 0px">Ward ID :</span><input type = "text" name = "wid"><br>
                             <button class= "but1" type="submit">Submit</button>
                             <button class = "but1" type = "reset" >Reset</button>
                            <button class ="but1" onclick="document.getElementById('popup1').style.display='none'">Cancel</button>
                         </form>
                     </div>
                     <!-- Button3 -->
                     <button class = "but" onclick="document.getElementById('popup2').style.display='block'">Insert Ward </button>
                     <div id="popup2">
                        Enter Ward Details<br><br>
                        <form action = "winsert.php" method = "post" class = "F1">
                             <span style = "margin : 20px 90px 20px 0px ">Ward Id : </span><input type = "text" name = "wid"><br>
                             <span style = "margin : 20px 58px 20px 0px">Ward Name :</span> <input type = "text" name = "wname" ><br>
                             <span style = "margin : 20px 8px 20px 0px">Number Of People :</span><input type = "text" name = "wnpeo"><br>
                             <span style = "margin : 20px 38px 20px 0px">Number of Poll :</span><input type = "text" name = "wnpo"><br>
                             <span style = "margin : 20px 10px 20px 0px">Number of Houses :</span><input type = "text" name = "wnho"><br>
                             <span style = "margin : 20px 25px 20px 0px">Number of Parks:</span><input type = "text" name = "wnpk"><br>
                             <span style = "margin : 20px 20px 20px 0px">Number of Streets:</span><input type = "text" name = "wnst"><br>
                             <span style = "margin : 20px 10px 20px 0px">Number os Schools :</span><input type = "text" name = "wnsch"><br><br>
                             <button class= "but1" type="submit">Submit</button>
                             <button class = "but1" type = "reset" >Reset</button>
                            <button class ="but1" onclick="document.getElementById('popup2').style.display='none'">Cancel</button>
                         </form>
                     </div>
                     <!-- Button4 -->
                     <button class = "but" onclick="document.getElementById('popup6').style.display='block'">Insert Party </button>
                     <div id="popup6">
                        Enter Party Details<br><br>
                        <form action = "pinsert.php" method = "post" class = "F1">
                             <span style = "margin : 20px 142px 20px 0px ">Party Id : </span><input type = "text" name = "pyid"><br>
                             <span style = "margin : 20px 110px 20px 0px"> Party Name :</span> <input type = "text" name = "pname"><br>
                             <span style = "margin : 20px 19px 20px 0px">Number of Candidates :</span><input type = "text" name = "pnoc"><br>
                             <span style = "margin : 20px 160px 20px 0px">Status :</span><input type = "text" name = "psts"><br>
                             <span style = "margin : 20px 150px 20px 0px">Success :</span><input type = "text" name = "psuc"><br>
                             <button class= "but1" type="submit">Submit</button>
                             <button class = "but1" type = "reset" >Reset</button>
                            <button class ="but1" onclick="document.getElementById('popup6').style.display='none'">Cancel</button>
                         </form>
                     </div>
                    <!-- Button5 -->
                    <button class = "but" onclick="document.getElementById('popup5').style.display='block'">Insert Welfare</button>
                    <div id = "popup5">
                       Insert Welfare Details<br><br>
                       <form class = "F1"  action = "binsert.php" method = "post">
                            <span style = "margin : 20px 140px 20px 0px ">Bill ID : </span><input type = "text" name = "bid"><br>
                            <span style = "margin : 20px 80px 20px 0px">Candidate ID :</span> <input type = "text" name = "cid" ><br>
                            <span style = "margin : 20px 125px 20px 0px">Ward ID :</span><input type = "text" name = "wid"><br>
                            <span style = "margin : 20px 115px 20px 0px">Bill Name :</span><input type = "text" name = "bname"><br>
                            <span style = "margin : 20px 30px 20px 0px">Sanctioned Amount :</span><input type = "text" name = "bsac"><br>
                            <span style = "margin : 20px 75px 20px 0px">Spent Amount :</span><input type = "text" name = "bspn"><br>
                            <span style = "margin : 20px 90px 20px 0px">Success Rate :</span><input type = "text" name = "bsuc"><br>
                            <span style = "margin : 20px 115px 20px 0px ">Bill Type : </span><input type = "text" name = "btyp" ><br>
                            <span style = "margin : 20px 130px 20px 0px ">Bill On : </span><input type = "text" name = "bon" ><br>
                            <span style = "margin : 20px 115px 20px 0px">Feedback :</span><input type = "text" name = "bfed"><br>
                            <button class= "but1" type="submit">Submit</button>
                            <button class = "but1" type = "reset" >Reset</button>
                           <button class ="but1" onclick="document.getElementById('popup5').style.display='none'">Cancel</button>
                        </form>
                    </div>
                    <!-- Button6 -->
                    <button class = "but" onclick="document.getElementById('popup4').style.display='block'">Update Candidate</button>
                    <div id = "popup4">
                       Update Candidate Details<br><br>
                       <form class = "F1" action = "cupdate.php" method ="post">
                            <span style = "margin : 20px 60px 20px 0px ">Candidate Id : </span><input type = "text" name = "cid"><br>
                            <span style = "margin : 20px 29px 20px 0px">Attribute Name :</span> <input type = "text" name = "name" ><br>
                            <span style = "margin : 20px 122px 20px 0px">Value :</span><input type = "text" name = "value"><br><br>
                            <button class= "but1" type="submit" name = "submit">Submit</button>
                            <button class = "but1" type = "reset" >Reset</button>
                           <button class ="but1" onclick="document.getElementById('popup4').style.display='none'">Cancel</button>
                        </form>
                    </div>
                    <!-- Button7 -->
                        <button class = "but" onclick="document.getElementById('popup3').style.display='block'">Update Ward Details </button>
                        <div id="popup3">
                           Enter Ward Details to be Update it<br><br>
                           <form class = "F1" action = "wupdate.php" method = "post">
                                <span style = "margin : 20px 90px 20px 0px ">Ward Id : </span><input type = "text" name = "wid"><br>
                                <span style = "margin : 20px 58px 20px 0px">Attribute Name :</span> <input type = "text" name = "name"><br>
                                <span style = "margin : 20px 8px 20px 0px">Value :</span><input type = "text" name = "value"><br><br>
                                <button class= "but1" type="submit" name ="submit">Submit</button>
                                <button class = "but1" type = "reset" >Reset</button>
                               <button class ="but1" onclick="document.getElementById('popup3').style.display='none'">Cancel</button>
                            </form>
                        </div>
                        <!-- Button8 -->
                        <button class = "but" onclick="document.getElementById('popup7').style.display='block'">Update Welfare</button>
                        <div id = "popup7">
                           Update Welfare Details<br><br>
                           <form class = "F1" action = "bupdate.php" method = "post">
                                <span style = "margin : 20px 140px 20px 0px ">Bill ID : </span><input type = "text" name = "bid"><br>
                                <span style = "margin : 20px 115px 20px 0px">Attribute Name :</span><input type = "text" name = "name"><br>
                                <span style = "margin : 20px 30px 20px 0px">Value :</span><input type = "text" name = "value"><br><br>
                                <button class= "but1" type="submit" name = "submit">Submit</button>
                                <button class = "but1" type = "reset" >Reset</button>
                               <button class ="but1" onclick="document.getElementById('popup7').style.display='none'">Cancel</button>
                            </form>
                        </div>
                        <!-- Button9 -->
                        <button class = "but" onclick="document.getElementById('popup8').style.display='block'">Update Voter </button>
                        <div id="popup8">
                           Update Voter Details<br><br>
                           <form class = "F1" action = "vupdate.php" method = "post">
                                <span style = "margin : 20px 80px 20px 0px ">Voter Id : </span><input type = "text" name = "vid"><br>
                                <span style = "margin : 20px 100px 20px 0px">Attribute Name :</span> <input type = "text" name = "name"><br>
                                <span style = "margin : 20px 122px 20px 0px">Value :</span><input type = "text" name = "value"><br>
                                <button class= "but1" type="submit" name = "submit">Submit</button>
                                <button class = "but1" type = "reset" >Reset</button>
                               <button class ="but1" onclick="document.getElementById('popup8').style.display='none'">Cancel</button>
                            </form>
                        </div>
                        <!-- Button10 -->
                        <button class = "but" onclick="document.getElementById('popup9').style.display='block'">Update Party </button>
                        <div id="popup9">
                           Update Party Details<br><br>
                           <form class = "F1" action = "pupdate.php" method = "post" >
                                <span style = "margin : 20px 142px 20px 0px ">Party Id : </span><input type = "text" name = "pyid"><br>
                                <span style = "margin : 20px 110px 20px 0px">Attribute Name :</span> <input type = "text" name = "name"><br>
                                <span style = "margin : 20px 19px 20px 0px">Value :</span><input type = "text" name = "value"><br>
                                <button class= "but1" type="submit" name = "submit">Submit</button>
                                <button class = "but1" type = "reset" >Reset</button>
                               <button class ="but1" onclick="document.getElementById('popup9').style.display='none'">Cancel</button>
                            </form>
                        </div>
                        <!-- Button11 -->
                        <button class = "but" onclick="document.getElementById('popup10').style.display='block'">Delete Welfare </button>
                        <div id="popup10">
                           Delete a Bill<br><br>
                           <form class = "F1" action=  " bdelete.php" method = "post">
                                <span style = "margin : 20px 85px 20px 0px ">Bill Id : </span><input type = "text" name = "bid"><br>
                                <button class= "but1" type="submit">Submit</button>
                                <button class = "but1" type = "reset" >Reset</button>
                               <button class ="but1" onclick="document.getElementById('popup10').style.display='none'">Cancel</button>
                            </form>
                        </div>
                        <!-- Button12 -->
                        <button class = "but" onclick="document.getElementById('popup11').style.display='block'"> Delete Party </button>
                        <div id="popup11">
                           Delete a Party<br><br>
                           <form class = "F1" action = "pdelete.php" method = "post">
                                <span style = "margin : 20pex 85px 20px 0px ">Party Id : </span><input type = "text" name = "pyid"><br><br>
                                <button class= "but1" type="submit">Submit</button>
                                <button class = "but1" type = "reset" >Reset</button>
                               <button class ="but1" onclick="document.getElementById('popup11').style.display='none'">Cancel</button>
                            </form>
                        </div>
                        <!-- Button13 -->
                        <button class = "but" onclick="document.getElementById('popup12').style.display='block'"> Delete Candidate </button>
                        <div id="popup12">
                           Delete a Candidate<br><br>
                           <form action = "cdelete.php" method = "post"  class = "F1">
                                <span style = "margin : 20px 85px 20px 0px ">Candidate Id : </span><input type = "text" name = "cid"><br><br>
                                <button class= "but1" type="submit" onclick = "f1()">Submit</button>
                                <button class = "but1" type = "reset" >Reset</button>
                               <button class ="but1" onclick="document.getElementById('popup12').style.display='none'">Cancel</button>
                            </form>
                        </div>
                        <!-- Button14 -->
                        <button class = "but" onclick="document.getElementById('popup13').style.display='block'"> Delete Voter </button>
                        <div id="popup13">
                           Delete a Voter<br><br>
                           <form class = "F1" action = "vdelete.php" method = "post">
                                     <span style = "margin : 20px 85px 20px 0px ">Voter Id : </span><input type = "text" name = "vid" ><br><br>
                                <button class= "but1" type="submit">Submit</button>
                                <button class = "but1" type = ter"reset" >Reset</button>
                               <button class ="but1" onclick="document.getElementById('popup13').style.display='none'">Cancel</button>
                            </form>
                        </div>
                        <!-- Button15 -->
                        <button class = "but" onclick="document.getElementById('popup14').style.display='block'"> Delete Ward </button>
                        <div id="popup14">
                           Delete a Ward<br><br>
                           <form class = "F1" action = "wdelete.php" method = "post">
                                <span style = "margin : 20px 85px 20px 0px ">Ward Id : </span><input type = "text" name = "wid" ><br><br>
                                <button class= "but1" type="submit">Submit</button>
                                <button class = "but1" type = ter"reset" >Reset</button>
                               <button class ="but1" onclick="document.getElementById('popup14').style.display='none'">Cancel</button>
                            </form>
                        </div><br><br>
                    </div>
                </center>
                <!-- Button16 -->
                <center>
                    <form>
                        <button class = "but1" type = "submit" formaction = "main.html">Go Back</button>
                    </form><br><br>
                    <p class = "C2">This page is for admin use only</p>
                <center>
        <script src = "main.html" ></script>
    </body>
</html>
