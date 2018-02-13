<?php
error_reporting(0);

session_start();
function unique_key(){
	
	return date('dmyhis');
}

$date = date('d/m/Y');
$_SESSION['session'] = unique_key();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="aNonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="aNonymous"></script>
   <link href="tabs.css" rel="stylesheet" />
   <style>
   .body {
   background-color: #cccccc;
   background-repeat: no-repeat;
    background-size: cover;
   }
   </style>
   </head>
    <body class="body">
<div class="container" id="result">
<div class="jumbotron">
<h1>Employee Satisfaction Survey</h1>
</div>
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
				  
		
			</section>

			<section id="content6" class="tab-content">
				<h3>Communcation</h3>
				<p><?php include 'communication.php'; ?></p>
				  
	
			</section>

			<section id="content7" class="tab-content">
				<h3>Work Environment and Relationships</h3>
				<p><?php include 'work_environment.php'; ?></p>
				  
		
			</section>

			<section id="content8" class="tab-content">
				<h3>Job Role Contribution</h3>
				<p><?php include 'job_role.php'; ?></p>
				  
		
			</section>

			<section id="content9" class="tab-content">
				<h3>Leadership and Management</h3>
				<p><?php include 'leadership_and_management.php'; ?></p>

				 <button class="btn btn-primary send" id="send" type="submit">Send</button>

			
			</section>

		
		</div>
		
</div>
</body>
</html>
<script src="jquery.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
$(document).ready(function(){

function validateFields(selectedOption){
	if(selectedOption =="Yes"){
	return true;
	}
	else if (selectedOption == "No") {
		return true;
	}
	else {
		return false;
	}
}

	$('#send').on('click', function(){
		
		// Leadership and management
		var direction = $('input[name=direction]:checked').val();
		var qualities = $('input[name=qualities]:checked').val();
		var corporate = $('input[name=corporate]:checked').val();
		var proactive = $('input[name=proactive]:checked').val();
		var consistency = $('input[name=consistency]:checked').val();
		var well = $('input[name=well]:checked').val();
		var managerv = $('input[name=managerv]:checked').val();
		var talk = $('input[name=talk]:checked').val();
		var interactions = $('input[name=interactions]:checked').val();
		var holds = $('input[name=holds]:checked').val();
		var updated = $('input[name=updated]:checked').val();
		var grow = $('input[name=grow]:checked').val();
		var great = $('input[name=great]:checked').val();
		var latest = $('input[name=latest]:checked').val();
		var supportv = $('input[name=supportv]:checked').val();
		// end

		// Job role
		var know = $('input[name=know]:checked').val();
		var inspiresv = $('input[name=inspiresv]:checked').val();
		var knowledge = $('input[name=knowledge]:checked').val();
		var achieving = $('input[name=achieving]:checked').val();
		var contributionv = $('input[name=contributionv]:checked').val();
		var committed = $('input[name=committed]:checked').val();
		// end

		// Work environment
		var teammorale = $('input[name=teammorale]:checked').val();
		var fosters = $('input[name=fosters]:checked').val();
		var comfortable = $('input[name=comfortable]:checked').val();
		var healthn = $('input[name=healthn]:checked').val();
		var awares = $('input[name=awares]:checked').val();
		var progressv = $('input[name=progressv]:checked').val();
		var site = $('input[name=site]:checked').val();
		var town = $('input[name=town]:checked').val();
		// end


		// Communication
		var internal = $('input[name=internal]:checked').val();
		var months = $('input[name=months]:checked').val();
		var regular = $('input[name=regular]:checked').val();
		var team = $('input[name=team]:checked').val();
		var timely = $('input[name=timely]:checked').val();
		var intranet = $('input[name=intranet]:checked').val();
		var research = $('input[name=research]:checked').val();
		var making = $('input[name=making]:checked').val();
		// end
		

		// Culture
		var counts = $('input[name=know]:checked').val();
		var trust = $('input[name=trust]:checked').val();
		var meaningful = $('input[name=meaningful]:checked').val();
		var balance = $('input[name=balance]:checked').val();
		var communities = $('input[name=communities]:checked').val();
		var participate = $('input[name=participate]:checked').val();
		// end


		// Performance management
		var realistic = $('input[name=realistic]:checked').val();
		var honest = $('input[name=honest]:checked').val();
		var fairly = $('input[name=fairly]:checked').val();
		var appreciated = $('input[name=appreciated]:checked').val();
		// end




		// Compensation
		var remuneration = $('input[name=remuneration]:checked').val();
		var bonus = $('input[name=bonus]:checked').val();
		var employee = $('input[name=employee]:checked').val();
		var offered = $('input[name=offered]:checked').val();
		// end





		// Company Image
		var proud = $('input[name=proud]:checked').val();
		var recommend = $('input[name=recommend]:checked').val();
		var likely = $('input[name=likely]:checked').val();
		var leave = $('input[name=leave]:checked').val();
		var contribute = $('input[name=contribute]:checked').val();
		var utilization = $('input[name=utilization]:checked').val();
		var significant = $('input[name=significant]:checked').val();
		var feedback = $('input[name=feedback]:checked').val();
		var dissatisfaction = $('input[name=dissatisfaction]:checked').val();
		var like = $('input[name=like]').val();
		var improve = $('input[name=improve]').val();
		// end



		// Learning and development
		var name = $('input[name=name]').val();
		var division = $('#division').find(":selected").text();
		var learning_opportunity = $('input[name=learning_opportunity]:checked').val();
		var career_development = $('input[name=career_development]:checked').val();
		var find_jobs = $('input[name=find_jobs]:checked').val();
		var discuss = $('input[name=discuss]:checked').val();
		var participated = $('input[name=participated]:checked').val();
		var promoted = $('input[name=promoted]:checked').val();
		// end



		if(validateFields(direction) && validateFields(qualities)){

		

			var data = {
			direction: direction,
			qualities: qualities,
			corporate: corporate,
			proactive: proactive,
			consistency: consistency,
			well: well,
			managerv: managerv,
			talk: talk,
			interactions: interactions,
			holds: holds,
			updated: updated,
			grow: grow,
			great: great,
			latest: latest,
			supportv: supportv,
			know: know,
			inspiresv: inspiresv,
			knowledge: knowledge,
			achieving: achieving,
			contributionv: contributionv,
			committed:committed,
			teammorale: teammorale,
			fosters: fosters,
			comfortable: comfortable,
			healthn: healthn,
			awares: awares,
			progressv: progressv,
			site: site,
			town: town,
			internal: internal,
			months :months,
			regular :regular,
			team :team,
			timely :timely,
			intranet :intranet,
			research :research,
			making :making,
			counts :counts,
			trust :trust,
			meaningful :meaningful,
			balance :balance,
			communities :communities,
			participate :participate,
			realistic :realistic,
			honest :honest,
			fairly :fairly,
			appreciated :appreciated,
			remuneration: remuneration,
			bonus: bonus,
			employee: employee,
			offered: offered,
			proud: proud,
			recommend: recommend,
			likely: likely,
			leave: leave,
			contribute: contribute,
			utilization: utilization,
			significant: significant,
			feedback: feedback,
			dissatisfaction: dissatisfaction,
			like: like,
			improve: improve,
			name: name,
			division: division,
			learning_opportunity: learning_opportunity,
			career_development: career_development,
			find_jobs: find_jobs,
			discuss: discuss,
			participated: participated,
			promoted: promoted,
		};
		

		$.ajax({
		type: 'POST',
		url: 'questions.php',
		data: data,
		success: function(response){
				$('#result').html(response);
			}
	});



			swal("Information Submitted!", "Your survey response has been submitted!", "success")
		}
		else {
			swal("Information Missing!", "Please provide all the information!", "error")
		}

		

		console.log(data);
	});
function getQuestions(){
	
}
});
</script>

<?php
/*
validateFields(direction) && validateFields(qualities) && validateFields(corporate) && validateFields(proactive) && 
			validateFields(consistency) && validateFields(well) && validateFields(managerv)	&& validateFields(talk) && 
			validateFields(interactions) && validateFields(holds) && validateFields(updated) && validateFields(grow) && 
			validateFields(great) && validateFields(latest) && validateFields(supportv) && validateFields(know) && validateFields(knowledge) && 
			validateFields(achieving) && validateFields(contributionv) && validateFields(committed) && validateFields(inspiresv) && 
			validateFields(town) && validateFields(teammorale) && validateFields(fosters) && validateFields(comfortable)&& validateFields(healthn) && 
			validateFields(awares) && validateFields(progressv) && validateFields(site)&& validateFields(internal) && validateFields(months) && 
			validateFields(regular) && validateFields(team)&& validateFields(timely) && validateFields(intranet) && validateFields(research) && 
			validateFields(making)&& validateFields(counts) && validateFields(trust) && validateFields(meaningful) && validateFields(balance)&& 
			validateFields(communities) && validateFields(participate)&& validateFields(remuneration) && validateFields(bonus) && validateFields(employee) && 
			validateFields(offered)&& validateFields(proud) && validateFields(recommend) && validateFields(likely) && validateFields(leave)&& 
			validateFields(contribute) && validateFields(utilization) && validateFields(significant) && validateFields(feedback)&& validateFields(dissatisfaction) && 
			validateFields(like)&& validateFields(improve)&& validateFields(name) && validateFields(division)&& validateFields(learning_opportunity)&& 
			validateFields(career_development) && validateFields(find_jobs)&& validateFields(discuss)&& validateFields(participated)&& validateFields(promoted)

			*/
			?>