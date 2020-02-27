<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Interface</title>

	<link rel="stylesheet" href="asset/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="asset/css/main.css">

	<script src="asset/js/jquery.min.js"></script>
	<script src="asset/js/popper.min.js"></script>
	<script src="asset/js/bootstrap.min.js"></script>
</head>
<body>
	<section id="wrapper">
		<main class="site-main">
			<section class="dash-panel-sec">
				<aside class="dash-sidebar">
					<div class="top-side-bx">
						
						<div class="contacts mb-5">
							<span class="icon">
								<img src="asset/img/logo-icon.png" alt="Logo">
							</span>
							<span class="txt">Valley OBGYN Contacts</span>
						</div><!-- contacts title -->

						<h3 class="dash-sidebar-title">Create</h3>
						<div class="create-contact create-folder">
							<a href="javascript:void(0);" class="c-contact-btn" data-toggle="modal" data-target="#createFolder">
								<span class="icon mr-2">
									<img src="asset/img/folder.png" alt="Icon">
								</span>
								<span class="txt">Create Folder</span>
							</a>
						</div><!-- create-folder -->

						<div class="create-contact create-user">
							<a href="javascript:void(0);" class="c-contact-btn" data-toggle="modal" data-target="#createContact">
								<span class="icon mr-2">
									<img src="asset/img/user.png" alt="Icon">
								</span>
								<span class="txt">Create Contact</span>
							</a>
						</div><!-- create-user -->

					</div><!-- top-side-bx -->

					<!-- Modal -->
					<section class="modal fade custom-modal" id="createFolder" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body text-center">
									<section class="custom-form-sec">
										<h2 class="modal-title mb-3">Create New Folder</h2>
										<form class="icon-form" action="" method="post">
											<div class="row folder-icon">
												<div class="col-sm-12">
													<div class="input-bx">
														<input type="text" name="folder_name" id="" class="form-control" autocomplete="off" required>
														<label>Folder Name</label>
													</div>
												</div><!-- col -->
											</div><!-- row -->

											<button type="submit" class="common-btn">Create</button>
										</form>
									</section><!-- custom-form-sec -->
								</div><!-- modal-body -->
							</div>
						</div>
					</section><!-- modal -->

					<!-- Modal -->
					<section class="modal fade custom-modal" id="createContact" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>

								<div class="modal-body text-center">
									<h2 class="modal-title mb-2">Create new Contact</h2>

									<section class="custom-form-sec">
										<form class="icon-form" action="" method="post">
											<div class="select-round">
												<select name="folder" id="">
													<option value="">Folder</option>
													<option value="">Folder 1</option>
													<option value="">Folder 2</option>
													<option value="">Folder 3</option>
												</select>
											</div>
											
											<div class="row user-icon">
												<div class="col-sm-6">
													<div class="input-bx">
														<input type="text" name="f_name" id="" class="form-control" autocomplete="off" required>
														<label>First Name</label>
													</div>
												</div><!-- col -->
												<div class="col-sm-6">
													<div class="input-bx">
														<input type="text" name="l_name" id="" class="form-control" autocomplete="off" required>
														<label>Sur Name</label>
													</div>
												</div><!-- col -->
											</div><!-- row -->

											<div class="row company-icon">
												<div class="col-sm-6">
													<div class="input-bx">
														<input type="text" name="company" id="" class="form-control" autocomplete="off" required>
														<label>Company</label>
													</div>
												</div><!-- col -->
												<div class="col-sm-6">
													<div class="input-bx">
														<input type="text" name="job_title" id="" class="form-control" autocomplete="off" required>
														<label>Job Title</label>
													</div>
												</div><!-- col -->
											</div><!-- row -->

											<div class="row phone-icon">
												<div class="col-sm-6">
													<div class="input-bx">
														<input type="tel" name="mobile" id="" class="form-control" autocomplete="off" required>
														<label>Mobile</label>
													</div>
												</div><!-- col -->
												<div class="col-sm-6">
													<div class="input-bx">
														<input type="tel" name="phone" id="" class="form-control" autocomplete="off" required>
														<label>Phone</label>
													</div>
												</div><!-- col -->
											</div><!-- row -->

											<div class="row email-icon">
												<div class="col-sm-6">
													<div class="input-bx">
														<input type="text" name="fex" id="" class="form-control" autocomplete="off" required>
														<label>Fax</label>
													</div>
												</div><!-- col -->
												<div class="col-sm-6">
													<div class="input-bx">
														<input type="email" name="email" id="" class="form-control" autocomplete="off" required>
														<label>Email</label>
													</div>
												</div><!-- col -->
											</div><!-- row -->

											<div class="row url-icon">
												<div class="col-sm-6">
													<div class="input-bx">
														<input type="url" name="website" id="" class="form-control" autocomplete="off" required>
														<label>Web Site</label>
													</div>
												</div><!-- col -->
												<div class="col-sm-6">
													<div class="input-bx">
														<input type="text" name="address" id="" class="form-control" autocomplete="off" required>
														<label>Address</label>
													</div>
												</div><!-- col -->
											</div><!-- row -->

											<div class="row">
												<div class="col-sm-12">
													<div class="input-bx">
														<textarea name="notes" id="" class="form-control" rows="2" autocomplete="off" required></textarea>
														<label>Notes</label>
													</div>
												</div><!-- col -->
											</div><!-- row -->

											<button type="submit" class="common-btn">Save</button>
										</form>
									</section><!-- custom-form-sec -->

								</div><!-- modal-body -->
							</div>
						</div>
					</section><!-- modal -->

					<div class="sidebar-links-bx">						
						<h3 class="dash-sidebar-title">Folder</h3>
						<ul class="link-ul">
							<li>
								<a class="active" href="javascript:void(0);">
									<span class="icon">
										<img src="asset/img/folder.png" alt="Icon">
									</span>
									<span class="txt">Folder Name</span>
									<span class="msg">1</span>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);">
									<span class="icon">
										<img src="asset/img/folder.png" alt="Icon">
									</span>
									<span class="txt">Folder Name</span>
									<span class="msg">2</span>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);">
									<span class="icon">
										<img src="asset/img/folder.png" alt="Icon">
									</span>
									<span class="txt">Folder Name</span>
									<span class="msg">3</span>
								</a>
							</li>
						</ul>
					</div><!-- sidebar-links bx -->
				</aside><!-- dash-sidebar -->

				<section class="dash-content-box">
					<div class="content-top-bx">
						<div class="search-dv">
							<form action="" id="search_form">
								<button type="submit">
									<img src="asset/img/search.png" alt="Search">
								</button>
								<input type="text" name="search" id="search" placeholder="Search">
							</form>
						</div><!-- search-dv -->

						<div class="right-links">
							<div class="btn-group admin-bx">
								<button type="button" class="dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
									<img src="asset/img/admin.png" alt="Admin">
								</button>
								<div class="dropdown-menu dropdown-menu-lg-right">
									<ul>
										<li>
											<a class="logout" href="javascript:void(0);">
												<span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
												<span>Logout</span>
											</a>
										</li>
										<li>
											<a class="setting" href="javascript:void(0);">
												<span class="icon"><i class="fa fa-cog" aria-hidden="true"></i></span>
												<span>Settings</span>
											</a>
										</li>
									</ul>
								</div>
							</div>							
						</div><!-- right-links -->
					</div><!-- content-top-bx -->

					<div class="content-main-dv">
						<section class="dash-table">
							<table class="table">
								<thead>
									<tr>
										<th>Name</th>
										<th>Company</th>
										<th>Email</th>
										<th>Phone Number</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr class="title-row">
										<th colspan="4">
											<span class="title-msg">Contacts (2,849)</span>
										</th>
									</tr>

									<tr class="border-top-none">
										<td>
											<a href="javascript:void(0);">
												<span>John smith</span>
											</a>
										</td>
										<td><span>JS & Co.</span></td>
										<td><span>john@no.com</span></td>
										<td><a href="tel:555-555-1212">555-555-1212</a></td>
										<td>
											<button class="ed-btn edit-btn">
												<img src="asset/img/edit.png" alt="Edit">
											</button>
											<button class="ed-btn delete-btn">
												<img src="asset/img/delete.png" alt="Edit">
											</button>
										</td>
									</tr>

									<?php for($tr=1; $tr<=6; $tr++){ ?>
										<tr>
											<td>
												<a href="javascript:void(0);">
													<span>Bob Doe</span>
												</a>
											</td>
											<td><span>JS & Co.</span></td>
											<td><span>john@no.com</span></td>
											<td><a href="tel:555-555-1212">555-555-1212</a></td>
											<td>
												<button class="ed-btn edit-btn">
													<img src="asset/img/edit.png" alt="Edit">
												</button>
												<button class="ed-btn delete-btn">
													<img src="asset/img/delete.png" alt="Edit">
												</button>
											</td>
										</tr>
									<?php } ?>

								</tbody>
							</table>
							
						</section>
					</div><!-- content-main-dv -->

				</section><!-- dash-content-box -->
			</section><!-- dash-panel-sec -->
		</main><!-- site-main -->		
	</section><!-- wrapper -->
	<script src="asset/js/custom.js"></script>
</body>
</html>