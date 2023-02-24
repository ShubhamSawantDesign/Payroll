
<body class="hold-transition sidebar-mini layout-fixed">
	<div class="hold-transition login-page">
		<div class="login-box">
			<div class="login-logo">
				<b>Artaux</b> Admin Login
			</div>
		  	<div class="card">
		    	<div class="card-body login-card-body">
		    		
		      		<p class="login-box-msg">Sign in to start your session</p>
	      			<form action="{{ url('adminlogin') }}" method="post" id="loginForm">@csrf
				        <div class="input-group mb-3">
				          <input type="text" class="form-control" id="admin" name="admin" placeholder="Admin ID" required />
				          <div class="input-group-append">
				            <div class="input-group-text">
				              <span class="fas fa-envelope"></span>
				            </div>
				          </div>
				        </div>
                          <p id="display-message"></p>
				        <div class="input-group mb-3">
				          <input type="password" class="form-control" id="password" name="password" placeholder="Password" required />
				          <div class="input-group-append">
				            <div class="input-group-text">
				              <span class="fas fa-lock"></span>
				            </div>
				          </div>
				        </div>
						<!-- <p class="mb-1 mt-3">
							<a href="#">Forgot Password?</a>
						</p> -->
				        <div class="row">
				         	<div class="col-12 row">
							 <button type="submit" class="btn btn-primary btn-block ">Sign In</button>
				          	</div>
				        </div>
				        <a href="/"><i class="fa fa-angle-left"></i> Back to site</a>
	      			</form>
    			</div>
	  		</div>
		</div>
	</div>
