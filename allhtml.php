<?php session_start(); ?>
<?php include "connect.php";
?>

<!DOCTYPE html>
<html>
	<head>
        <title>Html-Quiz</title>	
        <link rel="stylesheet" href="css/index.css">
		<style>
			
		table { 
			width: 100%; 
			border-collapse: collapse; 
			margin-top: 20px;
			}
			/* Zebra striping */
			tr:nth-of-type(odd) { 
			background: #1f2840; 
			color:white
			/* color: var(--primaryColor); */
			}

			th { 
			background: #333; 
			color: white; 
			font-weight: bold; 
			}

			td, th { 
			padding: 6px; 
			border: 1px solid #ccc; 
			text-align: left; 
			}

			
			@media 
			only screen and (max-width: 760px),
			(min-device-width: 100px) and (max-device-width: 1024px)  {

				/* Force table to not be like tables anymore */
				table, thead, tbody, th, td, tr { 
					display: block; 
				}
				
				/* Hide table headers (but not display: none;, for accessibility) */
				thead tr { 
					position: absolute;
					top: -9999px;
					left: -9999px;
				}
				
				tr { border: 1px solid #ccc; }
				
				td { 
					/* Behave  like a "row" */
					border: none;
					border-bottom: 1px solid #eee; 
					position: relative;
					padding-left: 50%; 
				}
				
				td:before { 
					/* Now like a table header */
					position: absolute;
					/* Top/left values mimic padding */
					top: 6px;
					left: 6px;
					width: 45%; 
					padding-right: 10px; 
					white-space: nowrap;
				}
				
				/*
				Label the data
				*/
				td:nth-of-type(1):before { content: "Q.NO"; }
				td:nth-of-type(2):before { content: "Question"; }
				td:nth-of-type(3):before { content: "Option1"; }
				td:nth-of-type(4):before { content: "Option2"; }
				td:nth-of-type(5):before { content: "Option3"; }
				td:nth-of-type(6):before { content: "Option4"; }
				td:nth-of-type(7):before { content: "Correct Answer"; }
				td:nth-of-type(8):before { content: "Edit"; }
				td:nth-of-type(9):before { content: "Delete"; }
				/* td:nth-of-type(10):before { content: "Arbitrary Data"; } */
				td{
					font-size: 2rem;
				}
			}
			button {
			width: 125px;
			background-color: #4d84e2;
			border: none;
			outline: none;
			height: 30px;
			border-radius: 49px;
			color: black;
			text-transform: uppercase;
			font-weight: 600;
			margin: 5px 0;
			cursor: pointer;
			transition: 0.5s;
			}
			button:hover {
			background-color:  var(--secondaryColor);
			}
        </style>
	</head>

	<body>
		<header>
			
		</header>

		
		<button><a href="adminhome.php">Admin Home</a></button>
	<table class="data-table">
		<caption class="title" style="font-size: 2rem; margin:10px">All HTML questions</caption>
		<thead>
			<tr>
				<th>Q.NO</th>
				<th>Question</th>
				<th>Option1</th>
				<th>Option2</th>
				<th>Option3</th>
				<th>Option4</th>
				<th>Correct Answer </th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
        
        <?php 
            
            $query = "SELECT * FROM htmlquestions ORDER BY qno ASC";
            $select_questions = mysqli_query($conn, $query) or die(mysqli_error($conn));
            if (mysqli_num_rows($select_questions) > 0 ) {
            while ($row = mysqli_fetch_array($select_questions)) {
                $qno = $row['qno'];
                $question = $row['question'];
                $option1 = $row['ans1'];
                $option2 = $row['ans2'];
                $option3 = $row['ans3'];
                $option4 = $row['ans4'];
                $Answer = $row['correct_answer'];
                echo "<tr>";
                echo "<td>$qno</td>";
                echo "<td>$question</td>";
                echo "<td>$option1</td>";
                echo "<td>$option2</td>";
                echo "<td>$option3</td>";
                echo "<td>$option4</td>";
                echo "<td>$Answer</td>";
				echo "<td> <a href='edithtml.php?qno=$qno' style='text-decoration:underline;'> Edit </a></td>";
                echo "<td> <a href='delhtml.php?qno=$qno' style='color:red;'> Delete </a></td>";
              
                echo "</tr>";
             }
         }
        ?>
	
		</tbody>
		
	</table>
</body>
</html>




