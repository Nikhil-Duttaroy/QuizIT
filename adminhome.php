<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin home</title>
    <style>
    .topicContainer{
        height: 80vh;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        justify-items: center;
        align-content: center;
    }
    .topicNames{
        width: 300px;
        height: 300px;
        border-radius: 5px;
        box-shadow: -2px 2px 5px var(--secondaryColor);
        padding: 5px;  
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;  
        }
        .head{
            margin: 10px;
        }
        button {
        width: 150px;
        background-color: #4d84e2;
        border: none;
        outline: none;
        height: 40px;
        border-radius: 49px;
        color: black;
        text-transform: uppercase;
        font-weight: 600;
        margin: 5px 0;
        cursor: pointer;
        transition: 0.5s;
        }
        .topbtn{
            width: 150px;
            height: 20px;
        }

        button:hover {
        background-color:  var(--secondaryColor);
        }
            
</style>
</head>
<body>
<?php include 'nav.php' ?>
<h1 style="text-align:center; margin:15px">Admin panel</h1>
<a href="ajax.php" style="position:absolute; top:3em ;"><button class="topbtn">Search Player</button></a>
<a style="position:absolute; top:3em ;right:1em;" href="logout.php"><button class="topbtn">Logout</button></a>
<div class="topicContainer">
    <div class="topicNames php">
        <h2 class="head">PHP</h2>
        <a href="addphp.php"><button>Add Questions</button></a>
        <a href="allphp.php"><button>All Questions</button></a>
        <!-- <a href=""><button>Scoreboard</button></a> -->
    </div>
    <div class="topicNames html">
        <h2 class="head">HTML</h2>
        <a href="addhtml.php"><button>Add Questions</button></a>
        <a href="allhtml.php"><button>All Questions</button></a>
        <!-- <a href=""><button>Scoreboard</button></a> -->
    </div>
    <div class="topicNames js">
        <h2 class="head">Javascript</h2>
        <a href="addjs.php"><button>Add Questions</button></a>
        <a href="alljs.php"><button>All Questions</button></a>
        <!-- <a href=""><button>Scoreboard</button></a> -->
    </div>
</div>
</body>
</html>