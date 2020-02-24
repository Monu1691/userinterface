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
						<div class="contacts text-center">
							<a class="txt" href="javascript:void(0);" title="Logo">
								<div class="img">
									<img src="asset/img/dummy.png" alt="Logo">
								</div>
							</a>

						</h3>
					</div>
				</div><!-- top-side-bx -->

				<div class="sidebar-links-bx">
					<div class="create-contact create-folder">
						<button class="c-contact-btn" data-toggle="modal" data-target="#createFolder">
							<span class="icon mr-1"><i class="fa fa-folder-o" aria-hidden="true"></i></span>
							<span class="txt">Create Folder</span>
						</button>

						<!-- Modal -->
						<section class="modal fade custom-modal" id="createFolder" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h3 class="modal-title">
											<span class="alfabet mr-2">J</span> 
											<span>Create Folder</span>
										</h3>

										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<form action="">
										<div class="modal-body">
											<div class="input-bx">
												<input type="text" name="" id="" class="form-control" placeholder="Folder Name">
											</div>										
										</div><!-- modal-body -->
										<div class="modal-footer">
											<button type="button" class="common-btn" data-dismiss="modal">Cancel</button>
											<button type="submit" class="common-btn">Create Folder</button>
										</div>
									</form>
								</div>
							</div>
						</section><!-- modal -->
					</div>

					<div class="create-contact create-user">
						<button class="c-contact-btn" data-toggle="modal" data-target="#createUser">
							<span class="icon mr-1"><i class="fa fa-folder-o" aria-hidden="true"></i></span>
							<span class="txt">Create user</span>
						</button>

						<!-- Modal -->
						<section class="modal fade custom-modal" id="createUser" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h3 class="modal-title">
											<span class="alfabet mr-2">J</span> 
											<span>Create User</span>
										</h3>

										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<form action="">
										<div class="modal-body">
											<div class="input-bx mb-3">
												<input type="text" name="" id="" class="form-control" placeholder="Username">
											</div>
											<div class="input-bx mb-3">
												<input type="password" name="" id="" class="form-control" placeholder="Password">
											</div>
											<div class="input-bx">
												<label>
													<input type="checkbox" name="canedit"> Edit permission
												</label>
											</div>
										</div><!-- modal-body -->
										<div class="modal-footer">
											<button type="button" class="common-btn" data-dismiss="modal">Cancel</button>
											<button type="submit" class="common-btn">Create Folder</button>
										</div>
									</form>
								</div>
							</div>
						</section><!-- modal -->
					</div>

					<ul class="link-ul">
						<li>
							<a class="active" href="javascript:void(0);">
								<span class="icon"><i class="fa fa-user" aria-hidden="true"></i></span>
								<span class="txt">Contacts</span>
								<span class="msg">1</span>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="icon"><i class="fa fa-user" aria-hidden="true"></i></span>
								<span class="txt">Vendors</span>
								<span class="msg">4</span>
							</a>
						</li>
					</ul>
				</div><!-- sidebar-links bx -->
			</aside><!-- dash-sidebar -->

			<section class="dash-content-box">
				<div class="content-top-bx">
					<div class="search-dv">
						<form action="" id="search_form">
							<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
							<input type="text" name="search" id="search" placeholder="Search">
						</form>
					</div><!-- search-dv -->

					<div class="right-links">
						<a class="arrow" href="javascript:void(0);">
							<img src="asset/img/exchange.png" alt="Exchange">
						</a>
						<div class="btn-group admin-bx">
							<button type="button" class="dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
								<img src="asset/img/user.png" alt="User">
							</button>
							<div class="dropdown-menu dropdown-menu-lg-right">
								<ul>
									<li><a href="javascript:void(0);">Settings</a></li>
									<li><a href="javascript:void(0);">Login</a></li>
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
									<th>Option</th>
								</tr>
							</thead>
							<tbody>
								<tr class="title-row">
									<th colspan="4">
										<span class="title-msg">Contacts (1)</span>
									</th>
								</tr>
								<tr class="border-top-none">
									<td>
										<a href="javascript:void(0);" data-toggle="modal" data-target="#contact_detail">
											<span class="alfabet mr-2">J</span> 
											<span>John smith</span>
										</a>
									</td>
									<td><span>JS & Co.</span></td>
									<td><span>john@no.com</span></td>
									<td><a href="tel:555-555-1212">555-555-1212</a></td>
									<td>
										<button class="ed-btn edit" data-toggle="modal" data-target="#editModal">
											<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
										</button>
										<button class="ed-btn delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
									</td>
								</tr>
								<tr>
									<td>
										<a href="javascript:void(0);" data-toggle="modal" data-target="#contact_detail">
											<span class="alfabet mr-2">J</span> 
											<span>John smith</span>
										</a>
									</td>
									<td><span>JS & Co.</span></td>
									<td><span>john@no.com</span></td>
									<td><a href="tel:555-555-1212">555-555-1212</a></td>
									<td>
										<button class="ed-btn edit" data-toggle="modal" data-target="#editModal">
											<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
										</button>
										<button class="ed-btn delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
									</td>
								</tr>

							</tbody>
						</table>

						<!-- Modal -->
						<section class="modal fade custom-modal" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h3 class="modal-title">
											<span>Edit user: email123@yahoo.com</span>
										</h3>

										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<form action="">
										<div class="modal-body">
											<div class="input-bx mb-3">
												<input type="text" name="" id="" class="form-control" placeholder="Username">
											</div>
											<div class="input-bx mb-3">
												<input type="password" name="" id="" class="form-control" placeholder="Password">
											</div>
											<div class="input-bx">
												<label>
													<input type="checkbox" name="canedit"> Edit permission
												</label>
											</div>
										</div><!-- modal-body -->
										<div class="modal-footer">
											<button type="button" class="common-btn" data-dismiss="modal">Cancel</button>
											<button type="submit" class="common-btn">Create Folder</button>
										</div>
									</form>
								</div>
							</div>
						</section><!-- modal -->

						<!-- Modal -->
						<section class="modal fade custom-modal contact_detail_modal" id="contact_detail" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h2 class="modal-title">
											<span class="alfabet mr-2">J</span> 
											<span>John smith</span>
										</h2>

										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<div class="contact-detal-dv">
											<h3>Contact Detals</h3>

											<ul class="info-list">
												<li>
													<span class="icon"><i class="fa fa-address-card-o" aria-hidden="true"></i></span>
													<a href="javascript:void(0);">Js Co</a>
												</li>
												<li>
													<span class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
													<a href="javascript:void(0);">john@no.com</a>
												</li>
												<li>
													<span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
													<a href="javascript:void(0);">555-555-1212</a>
												</li>
											</ul>
										</div>
									</div><!-- modal-body -->
								</div>
							</div>
						</section><!-- modal -->

					</section>
				</div><!-- content-main-dv -->

			</section><!-- dash-content-box -->
		</section><!-- dash-panel-sec -->
	</main><!-- site-main -->		
</section><!-- wrapper -->
<script src="assets/js/custom.js"></script>
</body>
</html>