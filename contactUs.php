<?php 
 require ('header.php')
?>
<body id="contact">
	<nav id="top" class="navbar navbar-default navbar-default" role="navigation">
		<div class="container-fluid">
			<div class="col-md-2 logo">
				<a href="../yehuda/"><img src="imgs/logo1.png"></a>
			</div>
			<div class="col-md-2 col-md-offset-8 ringh1">
				<h1>Contact Us</h1>
			</div>
		</div>
	</nav>
<div id="formC" class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 form bg2">
			<form id="containerForm" method="post" action="phps/contact.php" class="form-horizontal" role="form">
				<div class="form-group">
					<label for="cname" class="col-md-2 control-label">Name</label>
					<div class="col-md-10">
						<input type="text" class="form-control" id="cname" name="cname">
					</div>
				</div>
				<div class="form-group">
					<label for="cmail" class="col-md-2 control-label">Email</label>
					<div class="col-md-10">
						<input type="email" class="form-control" id="cmail" name="cmail">
					</div>
				</div>
				<div class="form-group">
					<label for="cphone" class="col-md-2 control-label">Phone number</label>
					<div class="col-md-10">
						<input type="number" class="form-control" id="cphone" name="cphone">
					</div>
				</div>
				<div class="form-group">
					<label for="cques" class="col-md-2 control-label">Questions or comments</label>
					<div class="col-md-10">
							<textarea class="form-control" rows="3" name="cques"></textarea>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12 nopad">
					 <button type="submit" class="btn btn-default bigP">submit</button>
					</div>
				</div>
			</form>

		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4" style="margin-top: 5%;margin-bottom:5%;">
			<p style="font-size: 20px; padding: 1%;text-align:center;">
			Or 
			<br>
			Call us directly at 1-800-32-03-423
			</p>
		</div>
	</div>
</div>
<?php 
 require ('footer.php')
?>