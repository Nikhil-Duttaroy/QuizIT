<?php session_start(); ?>
<?php include "connect.php";?>
<!DOCTYPE html>
<html>
	<head>
		<title>Quiz</title>
		<style>
            .data-table{
                margin: auto;
            }
        </style>
	</head>

	<body>
		<header>
        <?php include 'nav.php';?>
		</header>

		
    <h1 style="text-align: center;"> All Players</h1>
    <div style="width: 50%;">
        <table class="data-table" border="1"
            cellpadding="15" id="userDetail" style="width:100%;">
            <caption class="title">All Quiz players</caption>
            <thead>
                <tr>
                <th>Player Id</th>
                <th>Email</th>
                <th>Score</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                
                $query = "SELECT * FROM user ORDER BY score DESC";
                $select_players = mysqli_query($conn, $query) or die(mysqli_error($conn));
                if (mysqli_num_rows($select_players) > 0 ) {
                while ($row = mysqli_fetch_array($select_players)) {
                    $id = $row['id'];
                    $email = $row['email'];
                    $score = $row['score'];
                    echo "<tr>";
                    echo "<td>$id</td>";
                    echo "<td>$email</td>";
                    echo "<td>$score</td>";
                
                    echo "</tr>";
                }
            }
            ?>
        
            </tbody>
        </table>
    </div>
</body>
</html>

