<?php 
require 'config/db.php';
 ?>
<?php include 'header.php'; ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>CourtConnect</title>
 	
 	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 	<link rel="stylesheet" type="text/css" href="style/style.css">
 	<!--fontawesome-->
 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	
	<!--jquery-->
 	<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
 </head>
 <body>
 <div class="container">
 	<div class="book_section">
 		<h2>CourtConnect</h2>
 		<form class="book_form" id="formRes" method="post">
 			<div>
 				<label><i class="fas fa-map-marker-alt"></i> Choose the field: </label>
 				<select id="field_num">
 					<option>BasketBall Field</option>
 					<option>Football Field</option>
 					<option>Hockey Field</option>
 					<option>Archery Field</option>
 					<option>Handball Field</option>
 					<option>Rugby Field</option>
 				</select>
 			</div>
 			<div>
 				<label><i class="fas fa-calendar-alt"></i> Date: </label>
 				<input type="date" id="date" required>
 			</div>
 			<div>
 				<label><i class="fas fa-clock"></i> Start: </label>
 				<select id="start_time">
 					<option>08:00</option>
 					<option>08:30</option>
 					<option>09:00</option>
 					<option>09:30</option>
 					<option>10:00</option>
 					<option>10:30</option>
 					<option>11:00</option>
 					<option>11:30</option>
 					<option>12:00</option>
 					<option>12:30</option>
 					<option>13:00</option>
 					<option>13:30</option>
 					<option>14:00</option>
 					<option>14:30</option>
 					<option>15:00</option>
 					<option>15:30</option>
 					<option>16:00</option>
 					<option>16:30</option>
 					<option>17:00</option>
 					<option>17:30</option>
 					<option>18:00</option>
 					<option>18:30</option>
 					<option>19:00</option>
 					<option>19:30</option>
 					<option>20:00</option>
 					<option>20:30</option>
 				</select>
 			</div>
 			<div>
 				<label><i class="fas fa-clock"></i> End: </label>
 				<select id="end_time">
 					<option>08:30</option>
 					<option>09:00</option>
 					<option>09:30</option>
 					<option>10:00</option>
 					<option>10:30</option>
 					<option>11:00</option>
 					<option>11:30</option>
 					<option>12:00</option>
 					<option>12:30</option>
 					<option>13:00</option>
 					<option>13:30</option>
 					<option>14:00</option>
 					<option>14:30</option>
 					<option>15:00</option>
 					<option>15:30</option>
 					<option>16:00</option>
 					<option>16:30</option>
 					<option>17:00</option>
 					<option>17:30</option>
 					<option>18:00</option>
 					<option>18:30</option>
 					<option>19:00</option>
 					<option>19:30</option>
 					<option>20:00</option>
 					<option>20:30</option>
 					<option>21:00</option>
 				</select>
 			</div>
 			<div>
 				<label><i class="fas fa-user-alt"></i> Name: </label>
 				<input type="text" id="user" placeholder=" John" required>
 			</div>
 			<button type="submit">Book</button>
 		</form>
 	</div>
 	<div class="calendar_section">
 		<div class="calendar_control">
 			<button id="previous"><i class="fas fa-arrow-circle-left"></i></button>
 			<button id="today"><i class="fas fa-flag"></i> Today</button>
 			<button id="next"><i class="fas fa-arrow-circle-right"></i></button>
 		</div>
 		<div class="calendar_table">
 			<div class="calendar_dan">
 				<h3>Day: <?php
					$day="";
					switch (date('D')) {
					 	case 'Mon':
					 		$day="Moday";					 		
					 		break;
					 	case 'Tue':
					 		$day="Tuesday";					 		
					 		break;
					 	case 'Wed':
					 		$day="Wednesday";					 		
					 		break;
					 	case 'Thu':
					 		$day="Thursday";					 		
					 		break;
					 	case 'Fri':
					 		$day="Friday";					 		
					 		break;
					 	case 'Sat':
					 		$day="Saturday";					 		
					 		break;
					 	case 'Sun':
					 		$day="Sunday";					 		
					 		break;
					 } 

					echo $day.' <span id="dayGet">'.date('d-m-Y').'</span>'; ?></h3>

 			</div>
 			<div class="calendar_color">
 				<div>Past <div class="past"></div></div>
			 	<div>Empty <div class="free"></div></div>
			 	<div>Booked <div class="res"></div></div>
			 </div>
 			<div class="calendar_tb">
 				<div class="calendar_fixed">
 					<li>&nbsp;</li>
 					<li>08:00</li>
 					<li>08:30</li>
 					<li>09:00</li>
 					<li>09:30</li>
 					<li>10:00</li>
 					<li>10:30</li>
 					<li>11:00</li>
 					<li>11:30</li>
 					<li>12:00</li>
 					<li>12:30</li>
 					<li>13:00</li>
 					<li>13:30</li>
 					<li>14:00</li>
 					<li>14:30</li>
 					<li>15:00</li>
 					<li>15:30</li>
 					<li>16:00</li>
 					<li>16:30</li>
 					<li>17:00</li>
 					<li>17:30</li>
 					<li>18:00</li>
 					<li>18:30</li>
 					<li>19:00</li>
 					<li>19:30</li>
 					<li>20:00</li>
 					<li>20:30</li>
 					<li class="last">21:00</li>
 				</div>
 				<div class="tb-div">
	 				<table>
	 					<tr>
	 						<td>BasketBall Field</td>
	 					</tr>
	 						<?php 
	 							//Populate table for BasketBall Field and for today
	 							populate($dbFUNS->getFields(date('Y-m-d'),'Basketball'),date('Y-m-d'));
	 						 ?>
	 				</table>
	 				<table>
	 					<tr>
	 						<td>Football Field</td>
	 						<?php 
	 							//Populate table for Football Field and for today
	 							populate($dbFUNS->getFields(date('Y-m-d'),'Football'),date('Y-m-d'));
	 						 ?>
	 					</tr>
	 					
	 				</table>
	 				<table>
	 					<tr>
	 						<td>Hockey Field</td>
	 						<?php 
	 							//Populate table for Hockey Field and for today
	 							populate($dbFUNS->getFields(date('Y-m-d'),'Hockey'),date('Y-m-d'));
	 						 ?>
	 					</tr>
	 					
	 				</table>
	 				<table>
	 					<tr>
	 						<td>Archery Field</td>
	 						<?php 
	 							//Populate table for Archery Field and for today
	 							populate($dbFUNS->getFields(date('Y-m-d'),'Archery'),date('Y-m-d'));
	 						 ?>
	 					</tr>
	 					
	 				</table>
	 				<table>
	 					<tr>
	 						<td>Handball Field</td>
	 						<?php 
	 							//Populate table for Handball Field and for today
	 							populate($dbFUNS->getFields(date('Y-m-d'),'Handball'),date('Y-m-d'));
	 						 ?>
	 					</tr>
	 					
	 				</table>
	 				<table>
	 					<tr>
	 						<td>Rugby Field</td>
	 						<?php 
	 							//Populate table for Rugby Field and for today
	 							populate($dbFUNS->getFields(date('Y-m-d'),'Rugby'),date('Y-m-d'));
	 						 ?>
	 					</tr>
	 					
	 				</table>
 				</div>
 			</div> 			
 		</div> 		
 	</div>
 </div>
 <?php include 'footer.php'; ?>
 <script type="text/javascript" src="script/script.js"></script>
 </body>
 </html>
 