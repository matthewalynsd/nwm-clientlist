<?php

/**
 * This file should be used to render each module instance.
 * You have access to two variables in this file: 
 * 
 * $module An instance of your module class.
 * $settings The module's settings.
 *
 * Example: 
 */


?>

<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!-- <link rel="stylesheet" ng-href="/wp-content/plugins/bb-mm/modules/database-frontend-test/includes/frontend-bootstrap-overrides.css"> -->

</head>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script>
$(document).ready(function () {

$('#sidebarCollapse').on('click', function () {
	$('#sidebar').toggleClass('active');
});

});
</script>

<!-- PAT Token 0/a69cfeedd9469dee3e524616236cda6c -->

<!-- Grid-Stack JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/gridstack@0.6.0/dist/gridstack.min.css" />
<script src="https://cdn.jsdelivr.net/npm/gridstack@0.6.0/dist/gridstack.all.js"></script>



<!-- Page Content -->
<div class="wrapper">

    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
			<form>
				<select name="client" class="form-selector input dark-mode dropdown-toggle" id="client-selector">
					<optgroup>
						<option class="client-option" value="client1" checked>Client 1</option>
						<option class="client-option" value="client2">Client 2</option>
						<option class="client-option" value="client3">Client 3</option>
						<option class="client-option" value="client4">Client 4</option>
						<option class="client-option" value="client5">Client 5</option>
					</optgroup>
				</select>
			</form>
            <strong>CN</strong>
        </div>

        <ul class="list-unstyled components">

			<!-- Menu -->
            <li id="dashboard" class="tablink active" onclick="openPage('dashboard-content', this)">
                <a href="#homeSubmenu" id="defaultOpen" data-toggle="collapse" aria-expanded="false" class="" >
                    <i class="fas fa-home"></i>
                    Dashboard
                </a>
                
			</li>
			
            <li id="info" class="tablink" onclick="openPage('client-info-content', this)">
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"  >
                    <i class="fas fa-info-circle"></i>
                    Client Info
				</a>
			</li>

			<li id="code" class="tablink" onclick="openPage('code-content', this)">
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="tablink">
                    <i class="fas fa-code"></i>
                    Code
				</a>
			</li>
			
			<li id="plugins" class="tablink" onclick="openPage('plugins-content', this)">
				<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="tablink">
                    <i class="fas fa-plug"></i>
                    Plugins
				</a>
			</li>

			<li id="analytics" class="tablink" onclick="openPage('analytics-content', this)">
				<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="tablink">
                    <i class="fas fa-chart-line"></i>
                    Analytics
				</a>
			</li>

			<li>
				<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="tablink">
                    <i class="fas fa-external-link-alt"></i>
                    WP Admin
				</a>
			</li>
			<!-- End Menu -->

			<li class="createTask">
				
					<a href="#pageSubmenu"  id="createTask" aria-expanded="false" data-toggle="modal" data-target="#taskModal">
							<i class="fas fa-check-square"></i>
							Create Task
					</a>

					<!-- Darkmode switch -->
					<p class="switch-label">Dark Mode</p>
					<label class="switch">
						<input id="darkSwitch" onclick="darkMode()" type="checkbox" checked>
						<span class="slider round"></span>
					</label>

					<!-- Collapse Button -->
					<button type="button" id="sidebarCollapse" class="btn btn-secondary sidebar-btn">
						<i class="fas fa-arrows-alt-h"></i>
					</button>
				
			</li>

		</ul>
    </nav>

	<!-- New Task Popup -->
	<div class="modal" id="taskModal" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div id="modalBody" class="modal-content dark-mode">
				<div class="modal-header">
					<h5 class="modal-title text-capitalize">New Task</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
						<!-- TODO build form for task creation  -->
					<form method="post" id="formFields" class="dark-mode">
					
						<p>Title:</p>
						
						<input type="text" name="task_title" value="Client Name" class="input dark-mode" required>
						<br>
						
						<p>Description:</p>
						
						<input type="text" name="task_desc" value=" " class="input dark-mode" required>
						<br>

						<p>Due Date:</p>
						<input type="date" name="task_due_date" value="<?php echo date('Y-m-d') ?>" class="input dark-mode" required>

						<br>
						<p>Assignee:</p>
						
						<select name="assignee" class="form-selector input dark-mode">
							<option value="1123853609251445" checked>Dan</option>
							<option value="949473128405669">Matt</option>
							<option value="352252120736100">Steven</option>
							<option value="352252120736111">Jenny</option>
							<option value="352252120736122">Darren</option>
						</select>
						
						<br><br>

						<input type="submit" value="Submit" onclick="generateTask('1148729522327844', task_title.value, task_desc.value, task_due_date.value, assignee.value)">
						</input>


						<!-- project, title, description, dueDate, assignee -->
					</form>

				</div>
				
			</div>
		</div>
	</div>

    <!-- Dashboard Page Content  -->
    <div id="dashboard-content" class="content dark-mode tabcontent">

		<!-- Card Grid -->
		<div class="grid-stack">
			
		<!-- Row 1 -->
			<div class="grid-stack-item" data-gs-width="4" data-gs-no-resize="true" data-gs-x="0" data-gs-y="0" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">Client Overview</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div>
			
			<div class="grid-stack-item" data-gs-width="4" data-gs-no-resize="true" data-gs-x="4" data-gs-y="0" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">Client Information</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div>

			<div class="grid-stack-item" data-gs-width="4" data-gs-no-resize="true" data-gs-x="8" data-gs-y="0" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">Info Box</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div>
			
			<!-- Row 2 -->
			<div class="grid-stack-item" data-gs-width="8" data-gs-no-resize="true" data-gs-x="0" data-gs-y="3" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">Custom Code</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div>
			
			<div class="grid-stack-item" data-gs-width="4" data-gs-no-resize="true" data-gs-x="8" data-gs-y="3" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">Info Box</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div>

			<!-- <div class="grid-stack-item" data-gs-width="4" data-gs-no-resize="true" data-gs-x="8" data-gs-y="3" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow">
					<h3 class="card-title text-capitalize">Card Title</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div> -->

			<!-- Row 3 -->
			<div class="grid-stack-item" data-gs-width="8" data-gs-no-resize="true" data-gs-x="0" data-gs-y="6" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">Traffic</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div>
			
			<div class="grid-stack-item" data-gs-width="4" data-gs-no-resize="true" data-gs-x="8" data-gs-y="6" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">Social Media Accounts</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div>

			<!-- <div class="grid-stack-item" data-gs-width="4" data-gs-no-resize="true" data-gs-x="8" data-gs-y="6" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">Card Title 8</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div> -->

		</div>

	</div>
	
	<!-- Client Info Page Content  -->
    <div id="client-info-content" class="content dark-mode tabcontent">

		<!-- Card Grid -->
		<div class="grid-stack">
			
		<!-- Row 1 -->
			<div class="grid-stack-item" data-gs-width="4" data-gs-no-resize="true" data-gs-x="0" data-gs-y="0" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">Client Overview</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div>
			
			<div class="grid-stack-item" data-gs-width="4" data-gs-no-resize="true" data-gs-x="4" data-gs-y="0" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">Client Information</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div>

			<div class="grid-stack-item" data-gs-width="4" data-gs-no-resize="true" data-gs-x="8" data-gs-y="0" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">Info Box</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div>
			
			<!-- Row 2 -->
			<div class="grid-stack-item" data-gs-width="4" data-gs-no-resize="true" data-gs-x="0" data-gs-y="3" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">Custom Code</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div>
			
			<div class="grid-stack-item" data-gs-width="4" data-gs-no-resize="true" data-gs-x="4" data-gs-y="3" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">Info Box</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div>

			<div class="grid-stack-item" data-gs-width="4" data-gs-no-resize="true" data-gs-x="8" data-gs-y="3" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">Card Title</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div>

			<!-- Row 3 -->
			<div class="grid-stack-item" data-gs-width="4" data-gs-no-resize="true" data-gs-x="0" data-gs-y="6" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">Traffic</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div>
			
			<div class="grid-stack-item" data-gs-width="4" data-gs-no-resize="true" data-gs-x="4" data-gs-y="6" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">Social Media Accounts</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div>

			<div class="grid-stack-item" data-gs-width="4" data-gs-no-resize="true" data-gs-x="8" data-gs-y="6" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">Card Title 8</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div>
		</div>
	<!-- End Page -->
	</div>
	
	<!-- Code Page Content  -->
    <div id="code-content" class="content dark-mode tabcontent">

		<!-- Card Grid -->
		<div class="grid-stack">
			
		<!-- Row 1 -->
			<div class="grid-stack-item" data-gs-no-resize="true" data-gs-x="0" data-gs-y="0" data-gs-width="8" data-gs-height="6">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">List of Custom Code</h3>
					<p class="card-text">
						<pre id="plugin-list" class="dark-mode"> 
							<hr>
							<hr>
							<hr>
							<hr>
							<hr>
							<hr>
							<hr>
							<hr>
						</pre>
					</p>
				</div>
			</div>
			
			<!-- <div class="grid-stack-item" data-gs-no-resize="true" data-gs-x="4" data-gs-y="0" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">Client Information</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div> -->

			<div class="grid-stack-item" data-gs-no-resize="true" data-gs-x="8" data-gs-y="0" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">Info Box</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div>
			
		<!-- Row 2 -->

			<!-- <div class="grid-stack-item" data-gs-no-resize="true" data-gs-x="0" data-gs-y="3" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">Custom Code</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div>
			
			<div class="grid-stack-item" data-gs-no-resize="true" data-gs-x="4" data-gs-y="3" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">Info Box</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div> -->

			<div class="grid-stack-item" data-gs-no-resize="true" data-gs-x="8" data-gs-y="3" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">Card Title</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div>

		<!-- Row 3 -->
			<div class="grid-stack-item" data-gs-no-resize="true" data-gs-x="0" data-gs-y="6" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">Traffic</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div>
			
			<div class="grid-stack-item" data-gs-no-resize="true" data-gs-x="4" data-gs-y="6" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">Social Media Accounts</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div>

			<div class="grid-stack-item" data-gs-no-resize="true" data-gs-x="8" data-gs-y="6" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">Card Title 8</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div>

		</div>
	<!-- End Page -->
	</div>
	
	<!-- Plugin Page Content  -->
    <div id="plugins-content" class="content dark-mode tabcontent">

		<!-- Card Grid -->
		<div class="grid-stack">
			
		<!-- Row 1 -->
			<div class="grid-stack-item" data-gs-width="4" data-gs-no-resize="true" data-gs-x="0" data-gs-y="0" data-gs-width="4" data-gs-height="9">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">List of Active Plugins</h3>
					<p class="card-text"> 
						<pre id="plugin-list" class="dark-mode"> <?php print_r( nwm_active_site_plugins() ) ?> </pre> 
					</p>
				</div>
			</div>
			
			<div class="grid-stack-item" data-gs-width="4" data-gs-no-resize="true" data-gs-x="4" data-gs-y="0" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">Client Information</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div>

			<div class="grid-stack-item" data-gs-width="4" data-gs-no-resize="true" data-gs-x="8" data-gs-y="0" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">Info Box</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div>
			
			<!-- Row 2 -->

			<!-- <div class="grid-stack-item" data-gs-width="4" data-gs-no-resize="true" data-gs-x="0" data-gs-y="3" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">Custom Code</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div> -->
			
			<div class="grid-stack-item" data-gs-width="4" data-gs-no-resize="true" data-gs-x="4" data-gs-y="3" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">Info Box</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div>

			<div class="grid-stack-item" data-gs-width="4" data-gs-no-resize="true" data-gs-x="8" data-gs-y="3" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">Card Title</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div>

			<!-- Row 3 -->

			<!-- <div class="grid-stack-item" data-gs-width="4" data-gs-no-resize="true" data-gs-x="0" data-gs-y="6" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">Traffic</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div> -->
			
			<div class="grid-stack-item" data-gs-width="4" data-gs-no-resize="true" data-gs-x="4" data-gs-y="6" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">Social Media Accounts</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div>

			<div class="grid-stack-item" data-gs-width="4" data-gs-no-resize="true" data-gs-x="8" data-gs-y="6" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">Card Title 8</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div>

		</div>
	<!-- End Page -->
	</div>
	
	<!-- Analytics Page Content  -->
    <div id="analytics-content" class="content dark-mode tabcontent">

		<!-- Card Grid -->
		<div class="grid-stack">
			
		<!-- Row 1 -->
			<div class="grid-stack-item" data-gs-width="4" data-gs-no-resize="true" data-gs-x="0" data-gs-y="0" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">Client Overview</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div>
			
			<div class="grid-stack-item" data-gs-width="4" data-gs-no-resize="true" data-gs-x="4" data-gs-y="0" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">Client Information</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div>

			<div class="grid-stack-item" data-gs-width="4" data-gs-no-resize="true" data-gs-x="8" data-gs-y="0" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">Info Box</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div>
			
			<!-- Row 2 -->
			<div class="grid-stack-item" data-gs-width="4" data-gs-no-resize="true" data-gs-x="0" data-gs-y="3" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">Custom Code</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div>
			
			<div class="grid-stack-item" data-gs-width="4" data-gs-no-resize="true" data-gs-x="4" data-gs-y="3" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">Info Box</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div>

			<div class="grid-stack-item" data-gs-width="4" data-gs-no-resize="true" data-gs-x="8" data-gs-y="3" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">Card Title</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div>

			<!-- Row 3 -->
			<div class="grid-stack-item" data-gs-width="4" data-gs-no-resize="true" data-gs-x="0" data-gs-y="6" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">Traffic</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div>
			
			<div class="grid-stack-item" data-gs-width="4" data-gs-no-resize="true" data-gs-x="4" data-gs-y="6" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">Social Media Accounts</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div>

			<div class="grid-stack-item" data-gs-width="4" data-gs-no-resize="true" data-gs-x="8" data-gs-y="6" data-gs-width="4" data-gs-height="3">
				<div class="grid-stack-item-content card card-shadow dark-card">
					<h3 class="card-title text-capitalize font-weight-bold">Card Title 8</h3>
					<p class="card-text">Content of the card.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- End Page -->

</div>

<!-- Scripts -->
<script type="text/javascript">
	// Initialize Grid-Stack
  	$('.grid-stack').gridstack( {column: 12, minWidth: 1200 } );

	// Dark Mode Function
	function darkMode() {
		//List of 'pages' with the class 'content'
		var pages = document.getElementsByClassName("content");
		var ii;
		
		//Toggle dark-mode on all content pages
		for (ii = 0; ii < pages.length; ii++) {
			pages[ii].classList.toggle("dark-mode");
		}

		//List of cards with the class 'card' 
		var cards = document.getElementsByClassName("card");
		var i;
		
		//Dark mode for cards
		for (i = 0; i < cards.length; i++) {
			cards[i].classList.toggle("dark-card");
		}

		//dark mode for inputs
		var inputs = document.getElementsByClassName("input");
		var iii;
		
		//Dark mode for inputs
		for (iii = 0; iii < inputs.length; iii++) {
			inputs[iii].classList.toggle("dark-mode");
		}
		
		//Toggle dark mode on task form
		var taskForm = document.getElementById("modalBody");
		taskForm.classList.toggle("dark-mode");
		var formFields = document.getElementById("formFields");
		formFields.classList.toggle("dark-mode");

		var pluginList = document.getElementById("plugin-list");
		pluginList.classList.toggle("dark-mode");

	}

	// Function to switch pseudo tabs 
	function openPage(pageName, elmnt) {

		// Hide all elements with class="tabcontent" by default
		var i, tabcontent, tablinks;
		tabcontent = document.getElementsByClassName("tabcontent");
		for (i = 0; i < tabcontent.length; i++) {
			tabcontent[i].style.display = "none";
		}

		// Remove the background color of all tablinks/buttons
		tablinks = document.getElementsByClassName("tablink");
		for (i = 0; i < tablinks.length; i++) {
			tablinks[i].classList.remove("active");
		}
		
		elmnt.classList.add("active");

		// Show the specific tab content
		document.getElementById(pageName).style.display = "block";

		document.getElementById(pageName).classList.toggle("active");
	}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

// Asana task generation function
function generateTask(project, title, description, dueDate, assignee){
	var myHeaders = new Headers();
	myHeaders.append("Content-Type", "application/javascript");
	myHeaders.append("Authorization", "Bearer 0/a69cfeedd9469dee3e524616236cda6c");

	var raw = "{\n    \"data\": {\n        \"name\": \"" + title + "\",\n        \"assignee\": \"" + assignee + "\",\n        \"assignee_status\": \"upcoming\",\n        \"completed\": false,\n        \"due_on\": \"" + dueDate + "\",\n        \"external\": {\n            \"gid\": \"my_gid\",\n            \"data\": \"A blob of information\"\n        },\n        \"html_notes\": \"<body>" + description + "</body>\",\n        \"notes\": \"It works!\",\n        \"projects\": [\n            \"1148729522327844\"\n        ],\n        \"workspace\": \"351094487330331\"\n    }\n}";

	var requestOptions = {
	method: 'POST',
	headers: myHeaders,
	body: raw,
	redirect: 'follow'
	};

	fetch("https://app.asana.com/api/1.0/tasks?opt_pretty=true", requestOptions)
	.then(response => response.text())
	.then(result => console.log(result))
	.catch(error => console.log('error', error));
}
</script>

<?php 

function nwm_active_site_plugins() {
    $the_plugins = get_option('active_plugins'); 
    echo '<ul>';
    foreach($the_plugins as $key => $value) {
        $string = explode('/',$value); // Folder name will be displayed
        echo '<li>'.$string[0] . '<hr>' . '</li>';
    }
    echo '</ul>';
}

