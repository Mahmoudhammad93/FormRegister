<?php 
include 'init.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form For Test</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<!-- Font-Awesome -->
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

	<!-- SweetAlert -->
	<link rel="stylesheet" type="text/css" href="css/sweetalert.css">

	<!-- BXSlider -->
	<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">

	<!-- Style File -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php
	// Select All Users Except Admin

	$query = $con->prepare("SELECT * FROM users");

	// Execute The Statment

	$query->execute();

	// Assign To Variable
	$rows = $query->fetchAll();

	// Count Rows In Database
	$count = $query->rowCount();
	?>
	<div class="page">
		<!-- Start Slider -->
		<div class="slider">
			<div id="bxslider">
				<?php
				if ($count <= 0) {
					?>
				  <div>
				  	<div class="text">
				  		<div class="empty">
							<div class="empty-icon">
								<svg height="512pt" viewBox="0 -12 512.00032 512" width="512pt" xmlns="http://www.w3.org/2000/svg"><path d="m440.929688 375.699219-184.929688 101.546875-184.929688-101.546875v-203.089844l184.929688-101.546875 184.929688 101.546875zm0 0" fill="#ffb954"/><path d="m71.070312 172.609375v.003906l184.929688 101.546875 184.929688-101.546875v-.003906l-184.929688-101.546875zm0 0" fill="#fea02c"/><path d="m71.070312 172.671875v203.027344l184.929688 101.546875.109375-.058594v-203.03125l-184.929687-101.546875zm0 0" fill="#ffc66c"/><g fill="#feda9b"><path d="m440.929688 172.613281 61.070312 61.066407-184.929688 101.546874-61.070312-61.070312zm0 0"/><path d="m71.070312 172.613281-61.070312 61.066407 184.929688 101.546874 61.070312-61.070312zm0 0"/><path d="m440.929688 172.613281 61.070312-61.066406-184.929688-101.546875-61.070312 61.070312zm0 0"/><path d="m71.070312 172.613281-61.070312-61.066406 184.929688-101.546875 61.070312 61.070312zm0 0"/></g><path d="m455.074219 172.613281 53.996093-53.996093c2.226563-2.222657 3.273438-5.367188 2.828126-8.480469-.441407-3.113281-2.328126-5.839844-5.085938-7.355469l-64.914062-35.644531c-4.839844-2.65625-10.917969-.886719-13.578126 3.953125-2.65625 4.84375-.890624 10.921875 3.953126 13.578125l53.234374 29.230469-46.339843 46.335937-166.667969-91.519531 46.335938-46.335938 46.839843 25.722656c4.839844 2.65625 10.921875.890626 13.578125-3.953124 2.660156-4.839844.890625-10.921876-3.953125-13.578126l-53.417969-29.335937c-3.898437-2.140625-8.742187-1.449219-11.882812 1.695313l-54 54-54-54c-3.144531-3.144532-7.988281-3.832032-11.882812-1.695313l-184.929688 101.546875c-2.757812 1.515625-4.644531 4.238281-5.085938 7.355469-.445312 3.113281.601563 6.257812 2.828126 8.480469l53.996093 53.996093-53.996093 53.992188c-2.226563 2.226562-3.273438 5.367187-2.828126 8.484375.441407 3.113281 2.328126 5.839844 5.085938 7.351562l55.882812 30.6875v102.570313c0 3.652343 1.988282 7.011719 5.1875 8.769531l184.929688 101.542969c1.5.824219 3.15625 1.234375 4.8125 1.234375s3.3125-.410156 4.8125-1.234375l184.929688-101.542969c3.199218-1.757812 5.1875-5.117188 5.1875-8.769531v-102.570313l55.882812-30.683594c2.757812-1.515624 4.644531-4.242187 5.085938-7.355468.445312-3.113282-.601563-6.257813-2.828126-8.480469zm-199.074219 90.132813-164.152344-90.136719 164.152344-90.140625 164.152344 90.140625zm-62.832031-240.367188 46.332031 46.335938-166.667969 91.519531-46.335937-46.335937zm-120.328125 162.609375 166.667968 91.519531-46.339843 46.339844-166.671875-91.519531zm358.089844 184.796875-164.929688 90.5625v-102.222656c0-5.523438-4.476562-10-10-10s-10 4.476562-10 10v102.222656l-164.929688-90.5625v-85.671875l109.046876 59.878907c1.511718.828124 3.167968 1.234374 4.808593 1.234374 2.589844 0 5.152344-1.007812 7.074219-2.929687l54-54 54 54c1.921875 1.925781 4.484375 2.929687 7.074219 2.929687 1.640625 0 3.296875-.40625 4.808593-1.234374l109.046876-59.878907zm-112.09375-46.9375-46.339844-46.34375 166.667968-91.515625 46.34375 46.335938zm0 0"/><path d="m404.800781 68.175781c2.628907 0 5.199219-1.070312 7.070313-2.933593 1.859375-1.859376 2.929687-4.4375 2.929687-7.066407 0-2.632812-1.070312-5.210937-2.929687-7.070312-1.859375-1.863281-4.441406-2.929688-7.070313-2.929688-2.640625 0-5.210937 1.066407-7.070312 2.929688-1.871094 1.859375-2.929688 4.4375-2.929688 7.070312 0 2.628907 1.058594 5.207031 2.929688 7.066407 1.859375 1.863281 4.441406 2.933593 7.070312 2.933593zm0 0"/><path d="m256 314.925781c-2.628906 0-5.210938 1.066407-7.070312 2.929688-1.859376 1.867187-2.929688 4.4375-2.929688 7.070312 0 2.636719 1.070312 5.207031 2.929688 7.078125 1.859374 1.859375 4.441406 2.921875 7.070312 2.921875s5.210938-1.0625 7.070312-2.921875c1.859376-1.871094 2.929688-4.441406 2.929688-7.078125 0-2.632812-1.070312-5.203125-2.929688-7.070312-1.859374-1.863281-4.441406-2.929688-7.070312-2.929688zm0 0"/></svg>
							</div>
							<p>Slider Photo's Is Empty</p>
						</div>
				  	</div>
				  </div>
				  <?php
				}else{
					foreach ($rows as $row) {
					?>
				  <div>
				  	<img src="images_upload/<?php echo $row['Image'] ?>">
				  </div>
				  <?php
					}
				}
				?>
			</div>
		</div>
		<!-- /end Slider -->

		<div class="container mb-4">
			<div class="row">
				<div class="col-6">
					<div class="card">
						<div class="card-header">
							<h5 class="title">Users</h5>
						</div>
						<div class="body">
								<?php
								if ($count <= 0) {
									?>
									<div class="empty">
										<div class="empty-icon">
											<svg height="512pt" viewBox="0 -12 512.00032 512" width="512pt" xmlns="http://www.w3.org/2000/svg"><path d="m440.929688 375.699219-184.929688 101.546875-184.929688-101.546875v-203.089844l184.929688-101.546875 184.929688 101.546875zm0 0" fill="#ffb954"/><path d="m71.070312 172.609375v.003906l184.929688 101.546875 184.929688-101.546875v-.003906l-184.929688-101.546875zm0 0" fill="#fea02c"/><path d="m71.070312 172.671875v203.027344l184.929688 101.546875.109375-.058594v-203.03125l-184.929687-101.546875zm0 0" fill="#ffc66c"/><g fill="#feda9b"><path d="m440.929688 172.613281 61.070312 61.066407-184.929688 101.546874-61.070312-61.070312zm0 0"/><path d="m71.070312 172.613281-61.070312 61.066407 184.929688 101.546874 61.070312-61.070312zm0 0"/><path d="m440.929688 172.613281 61.070312-61.066406-184.929688-101.546875-61.070312 61.070312zm0 0"/><path d="m71.070312 172.613281-61.070312-61.066406 184.929688-101.546875 61.070312 61.070312zm0 0"/></g><path d="m455.074219 172.613281 53.996093-53.996093c2.226563-2.222657 3.273438-5.367188 2.828126-8.480469-.441407-3.113281-2.328126-5.839844-5.085938-7.355469l-64.914062-35.644531c-4.839844-2.65625-10.917969-.886719-13.578126 3.953125-2.65625 4.84375-.890624 10.921875 3.953126 13.578125l53.234374 29.230469-46.339843 46.335937-166.667969-91.519531 46.335938-46.335938 46.839843 25.722656c4.839844 2.65625 10.921875.890626 13.578125-3.953124 2.660156-4.839844.890625-10.921876-3.953125-13.578126l-53.417969-29.335937c-3.898437-2.140625-8.742187-1.449219-11.882812 1.695313l-54 54-54-54c-3.144531-3.144532-7.988281-3.832032-11.882812-1.695313l-184.929688 101.546875c-2.757812 1.515625-4.644531 4.238281-5.085938 7.355469-.445312 3.113281.601563 6.257812 2.828126 8.480469l53.996093 53.996093-53.996093 53.992188c-2.226563 2.226562-3.273438 5.367187-2.828126 8.484375.441407 3.113281 2.328126 5.839844 5.085938 7.351562l55.882812 30.6875v102.570313c0 3.652343 1.988282 7.011719 5.1875 8.769531l184.929688 101.542969c1.5.824219 3.15625 1.234375 4.8125 1.234375s3.3125-.410156 4.8125-1.234375l184.929688-101.542969c3.199218-1.757812 5.1875-5.117188 5.1875-8.769531v-102.570313l55.882812-30.683594c2.757812-1.515624 4.644531-4.242187 5.085938-7.355468.445312-3.113282-.601563-6.257813-2.828126-8.480469zm-199.074219 90.132813-164.152344-90.136719 164.152344-90.140625 164.152344 90.140625zm-62.832031-240.367188 46.332031 46.335938-166.667969 91.519531-46.335937-46.335937zm-120.328125 162.609375 166.667968 91.519531-46.339843 46.339844-166.671875-91.519531zm358.089844 184.796875-164.929688 90.5625v-102.222656c0-5.523438-4.476562-10-10-10s-10 4.476562-10 10v102.222656l-164.929688-90.5625v-85.671875l109.046876 59.878907c1.511718.828124 3.167968 1.234374 4.808593 1.234374 2.589844 0 5.152344-1.007812 7.074219-2.929687l54-54 54 54c1.921875 1.925781 4.484375 2.929687 7.074219 2.929687 1.640625 0 3.296875-.40625 4.808593-1.234374l109.046876-59.878907zm-112.09375-46.9375-46.339844-46.34375 166.667968-91.515625 46.34375 46.335938zm0 0"/><path d="m404.800781 68.175781c2.628907 0 5.199219-1.070312 7.070313-2.933593 1.859375-1.859376 2.929687-4.4375 2.929687-7.066407 0-2.632812-1.070312-5.210937-2.929687-7.070312-1.859375-1.863281-4.441406-2.929688-7.070313-2.929688-2.640625 0-5.210937 1.066407-7.070312 2.929688-1.871094 1.859375-2.929688 4.4375-2.929688 7.070312 0 2.628907 1.058594 5.207031 2.929688 7.066407 1.859375 1.863281 4.441406 2.933593 7.070312 2.933593zm0 0"/><path d="m256 314.925781c-2.628906 0-5.210938 1.066407-7.070312 2.929688-1.859376 1.867187-2.929688 4.4375-2.929688 7.070312 0 2.636719 1.070312 5.207031 2.929688 7.078125 1.859374 1.859375 4.441406 2.921875 7.070312 2.921875s5.210938-1.0625 7.070312-2.921875c1.859376-1.871094 2.929688-4.441406 2.929688-7.078125 0-2.632812-1.070312-5.203125-2.929688-7.070312-1.859374-1.863281-4.441406-2.929688-7.070312-2.929688zm0 0"/></svg>
										</div>
										<p>Users Is Empty</p>
									</div>
									<?php
								}else{
									?>
									<ul class="users list-unstyled">
										<li>
											<div class="name">
												Name
											</div>
											<div>
												Image
											</div>
											<div>
												Options
											</div>
										</li>
										<?php
										foreach ($rows as $row) {
										?>
										<li>
											<div class="name">
												<p>
													<?php echo $row['First_Name']; $row['Last_Name']; ?>
												</p>
											</div>
											<div class="img">
												<img src="images_upload/<?php echo $row['Image'] ?>">
											</div>
											<div class="options">
												<a href="<?php echo $row['ID'] ?>" id="delete" class="btn btn-danger">
													<i class="fa fa-trash"></i>
												</a>
											</div>
										</li>
										<?php
										}
										?>
									</ul>
									<?php
								}
								?>
						</div>
					</div>
				</div>

				<!-- Start Form -->
				<div class="col-6">
					<div class="form-info add-form">
						<h4 class="mb-4">Add information</h4>
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<form class="horizontal" id="form" method="POST" action="insert.php" enctype="multipart/form-data">
										<?php if (! empty($formErrors)) { ?>
								          <div class="alert alert-danger alert-dismissible errors" role="start">
								            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								              <span aria-hidden="true">&times;</span>
								            </button>
								            <?php
								              foreach ($formErrors as $error) {
								                echo $error . '<br/>';
								              }
								            ?>
								          </div>
								          <?php } ?>
										<div class="row">
											<input type="hidden" name="size" value="100000">
											<div class="form-group col-md-6">
												<input class="form-control fname" type="text" name="fname" placeholder="First Name">
												<span class="asterisx"></span>
									            <span class="fa fa-check"></span>
												<div class="alert alert-danger alert-dismissible custom-alert">
										          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										            <span aria-hidden="true">&times;</span>
										          </button>
										          <strong> Oh snap! </strong> Your Name Must Be Larger Than 5 charcters
										        </div>
											</div>
											<div class="form-group col-md-6">
												<input class="form-control lname" type="text" name="lname" placeholder="Last Name">
												<span class="asterisx"></span>
									            <span class="fa fa-check"></span>
												<div class="alert alert-danger alert-dismissible custom-alert">
										          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										            <span aria-hidden="true">&times;</span>
										          </button>
										          <strong> Oh snap! </strong> Your Name Must Be Larger Than 5 charcters
										        </div>
											</div>
											<div class="form-group col-md-12">
												<input class="form-control email" type="email" name="email" placeholder="Email address" autocomplete="new-email">
												<span class="asterisx"></span>
									            <span class="fa fa-check"></span>
												<div class="alert alert-danger alert-dismissible custom-alert">
										          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										            <span aria-hidden="true">&times;</span>
										          </button>
										          <strong> Oh snap! </strong> Your Name Must Be Larger Than 5 charcters
										        </div>
											</div>
											<div class="form-group col-md-12">
												<input class="form-control pass" type="password" name="password" placeholder="Password (6 or more characters)" autocomplete="new-password">
												<span class="asterisx"></span>
									            <span class="fa fa-check"></span>
									            <span class="fa fa-eye fa-lg"></span>
												<div class="alert alert-danger alert-dismissible custom-alert">
										          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										            <span aria-hidden="true">&times;</span>
										          </button>
										          <strong> Oh snap! </strong> Password Must Be Larger Than 6 charcters
										        </div>
											</div>
											<div class="form-group col-md-12">
												<input class="form-control pass c_pass" type="password" name="c_password" placeholder="Confirm Password" autocomplete="new-password">
												<span class="asterisx"></span>
									            <span class="fa fa-check"></span>
									            <span class="fa fa-eye fa-lg"></span>
												<div class="alert alert-danger alert-dismissible custom-alert">
										          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										            <span aria-hidden="true">&times;</span>
										          </button>
										          <strong> Oh snap! </strong> Password Must Be Larger Than 6 charcters
										        </div>
											</div>
											<div class="form-group col-md-12">
												<input class="form-control address" type="text" name="address" placeholder="Address">
												<span class="asterisx"></span>
									            <span class="fa fa-check"></span>
												<div class="alert alert-danger alert-dismissible custom-alert">
										          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										            <span aria-hidden="true">&times;</span>
										          </button>
										          <strong> Oh snap! </strong> Your Name Must Be Larger Than 5 charcters
										        </div>
											</div>
											<div class="form-group col-md-12">
												<label class="label-img" for="image">
													<img src="images_upload/default-image.png" id="image-field">
													<span class="before">
														<i class="fa fa-camera"></i>
														<p>Select Photo</p>
													</span>
												</label>
												<input id="image" class="form-control image" type="file" name="image" value="" onchange="previewImage(event)">
											</div>
											<div class="col-md-12">
												<label class="form-label">Activity</label>
											</div>
											<div class="form-group col-md-12">
												<select name="activity" class="form-control">
													<option>Select</option>
													<option value="1">1</option>
													<option value="2">2</option>
												</select>
											</div>
											<div class="form-group col-md-12">
												<select name="status" class="form-control">
													<option>Select</option>
													<option value="1">1</option>
													<option value="2">2</option>
												</select>
											</div>
											<div class="col-md-12">
												<label>We want to make sure that a real person is creating an account</label>
												<p class="cap_text">Enter the characters you see</p>
												<div class="form-group">
										          <div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6Ldz4iUUAAAAADmyl0JbF2RPhRzIDZKErMIoYgXQ"></div>
										          <span id="error-captcha"></span>
										        </div>
											</div>
											<div class="form-group col-md-12">
												<input class="btn btn-primary btn-block" type="submit" name="submit" value="Join Now">
											</div>
										</div>
									</form>
								</div>
								<div class="data">
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /end Form -->
			</div>
		</div>
	</div>
<!-- JQuery -->
<script src="js/jquery-3.4.1.js"></script>

<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>

<!-- SweetAlert -->
<script src="js/sweetalert.js"></script>

<!-- BXSlider -->
<script src="js/jquery.bxslider.js"></script>

<script src='https://www.google.com/recaptcha/api.js'></script>

<!-- Script -->
<script src="js/script.js"></script>

<script type="text/javascript">
	// Form Register
    var fnameError   		= true,
        lnameError  		= true,
        emailError  		= true,
        passError  			= true,
        c_passError  		= true,
        addressError  		= true;

    $('.fname, .lname, .email, .pass, .c_pass, .address').blur(function () {

        if ($(this).val().length < 6) {

            $(this).css('border-bottom', '1px solid #ff7171');
            $(this).parents('.form-group').find('.custom-alert').fadeIn(200)
            .end().find('.asterisx').fadeIn(100).end().find('.fa-check').fadeOut(100);

	        fnameError   		= true,
	        lnameError  		= true,
	        emailError  		= true,
	        passError  			= true,
	        c_passError  		= true,
	        addressError 		= true;

        } else {

            $(this).css('border-bottom', '1px solid #47c347').parent().find('.custom-alert').fadeOut(200)
            .end().find('.asterisx').fadeOut(100).end().find('.fa-check').fadeIn(100);

            fnameError   		= false,
	        lnameError  		= false,
	        emailError  		= false,
	        passError  			= false,
	        c_passError  		= false,
	        addressError 		= false;

        }

    });


	$(document).on('submit', '#form', function (e){
		if (fnameError === true || lnameError === true || emailError === true || passError === true || c_passError === true || addressError === true) {

			e.preventDefault();
			// Ajax Function To Get Info From Another Files
			$('.fname, .lname, .email, .pass, .c_pass, .address').blur();
			swal({
              	title: "Oops",
              	type:"warning",
              	text: "Complete Your Info !",
              	icon: "error",
			  	confirmButtonClass: "btn-danger",
              	dangerMode: true,
            });
			
		}else{
			e.preventDefault();
				var form_data 	= $('#form').serialize();
				var url 		= $(this).attr('action');
				var type 		= $(this).attr('method');
				var form 		= new FormData($(this)[0]);
			$.ajax({
				url: url,
				type: type,
				data: form,
				cache: false,
            	processData: false,
            	contentType: false,
				// When Success Get Informatio
				success:function(data){
					swal({
						title: "Good",
						text: "Registered Successfully!",
						type: "success"
					}, function(){
						window.location.reload();
					});

					$('#form')[0].reset();
					$('.data').html(data);
				},
				error : function(data){
					alert('Errorrrrrrrrrrrrrrrr');
				},
			});
		}
	});

	$(document).on('click', '#delete', function (e) {
		e.preventDefault();
		// confirm('Are you sure you want delete post ?');
		var id = $(this).attr("href");
		$.ajax({
			url:"delete.php",
			type:"post",
			data:{"userid": id},
			success:function(data){
				console.log(data);
				load_post();
			}
		});
	});

	function load_post()
	 {
	  $.ajax({
	   url:"index.php",
	   method:"POST",
	   success:function(data)
	   {
	    $('.page').html(data);
	    $('.page').load('index.php');
	   }
	  })
	 }

	 function previewImage(event){
	 	var render = new FileReader();
	 	var imageField = document.getElementById('image-field');

	 	render.onload = function(){
	 		if (render.readyState == 2) {
	 			imageField.src = render.result;
	 		}
	 	}

	 	render.readAsDataURL(event.target.files[0]);
	 }
</script>