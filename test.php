<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="aNonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="aNonymous"></script>
   <link href="tabs.css" rel="stylesheet" />
   </head>
    <body>
<div class="container">
<h1>Employee Satisfaction Survey</h1>
		<div class="tab_container">
			<input id="tab1" type="radio" name="tabs" style="clear: both; padding-top: 10px; display: none;" checked>
			<label id="lab" for="tab1"><i class="fa fa-code"></i><span>Stage 1</span></label>

			<input id="tab2" type="radio" name="tabs" style="clear: both; padding-top: 10px; display: none;">
			<label id="lab" for="tab2"><i class="fa fa-pencil-square-o"></i><span>Stage 2</span></label>

			<input id="tab3" type="radio" name="tabs" style="clear: both; padding-top: 10px; display: none;">
			<label id="lab" for="tab3"><i class="fa fa-bar-chart-o"></i><span>Stage 3</span></label>

			<input id="tab4" type="radio" name="tabs" style="clear: both; padding-top: 10px; display: none;">
			<label id="lab" for="tab4"><i class="fa fa-folder-open-o"></i><span>Stage 4</span></label>

			<input id="tab5" type="radio" name="tabs" style="clear: both; padding-top: 10px; display: none;">
			<label id="lab" for="tab5"><i class="fa fa-envelope-o"></i><span>Stage 5</span></label>

			<input id="tab6" type="radio" name="tabs" style="clear: both; padding-top: 10px; display: none;">
			<label id="lab" for="tab6"><i class="fa fa-envelope-o"></i><span>Stage 6</span></label>

			<input id="tab7" type="radio" name="tabs" style="clear: both; padding-top: 10px; display: none;">
			<label id="lab" for="tab7"><i class="fa fa-envelope-o"></i><span>Stage 7</span></label>

			<input id="tab8" type="radio" name="tabs" style="clear: both; padding-top: 10px; display: none;">
			<label id="lab" for="tab8"><i class="fa fa-envelope-o"></i><span>Stage 8</span></label>

			<input id="tab9" type="radio" name="tabs" style="clear: both; padding-top: 10px; display: none;">
			<label id="lab" for="tab9"><i class="fa fa-envelope-o"></i><span>Stage 9</span></label>


			

			
			<section id="content1" class="tab-content">
			<form method="post" action="">	
				<h3>Learning and Development</h3>
		      	<p><?php include 'learning_and_development.php'; ?></p>
				
			</section>

			<section id="content2" class="tab-content">
				<h3>Company Image Satisfaction</h3>
				<p><?php include 'company_image_satisfaction.php'; ?></p>
		      
			</section>

			<section id="content3" class="tab-content">
				<h3>Compensation and Reward</h3>
				<p><?php include 'compensation.php'; ?></p>
		    
			</section>

			<section id="content4" class="tab-content">
				<h3>Performance Management Feedback</h3>
				<p><?php include 'performance_management_feedback.php'; ?></p>
		      	
			</section>

			<section id="content5" class="tab-content">
				<h3>Culture</h3>
				<p><?php include 'culture.php'; ?></p>
				  
			</form>	
			</section>

			<section id="content6" class="tab-content">
				<h3>Communcation</h3>
				<p><?php include 'communication.php'; ?></p>
				  
			</form>	
			</section>

			<section id="content7" class="tab-content">
				<h3>Work Environment and Relationips</h3>
				<p><?php include 'work_environment.php'; ?></p>
				  
			</form>	
			</section>

			<section id="content8" class="tab-content">
				<h3>Job Role Contribution</h3>
				<p><?php include 'job_role.php'; ?></p>
				  
			</form>	
			</section>

			<section id="content9" class="tab-content">
				<h3>Leadership and Management</h3>
				<p><?php include 'leadership_and_management.php'; ?></p>
				  
			</form>	
			</section>

		
		</div>
		
</div>
</body>
</html>
<script src="jquery.js"></script>
<script>
$(document).ready(function(){
	<?php
	if(isset($_POST['send'])){
			?>
alert("Pressed");
			<?php
	}
	
	?>
function getQuestions(){
	$.ajax({
		type: 'POST',
		url: 'questions.php',
		data: {
			show: 1,
		},
		success: function(response){
				$('#result').html(response);
			}
	});
}
});
</script>