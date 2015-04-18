<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="<?php echo URL;?>public/css/login/demo.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo URL;?>public/css/login/style.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo URL;?>public/css/login/animate-custom.css" />
<div class="container">
	<section>				
		<div id="container_demo" >
			<a class="hiddenanchor" id="toregister"></a><a class="hiddenanchor" id="tologin"></a>
			<div id="wrapper">
           		<div id="login" class="animate form">
            		<form method="post" action="login/run">
   
						<h1>Log in</h1> 
						
                        <p>	<label for="username" class="uname" data-icon="u" > Your username </label>
							<input id="username" name="login" required type="text" placeholder="myusername"/>
                        </p>
                        <p>	<label for="password" class="youpasswd" data-icon="p"> Your password </label>
                            <input id="password" name="password" required type="password" placeholder="eg. X8df!90EO" /> 
                        </p>
                        <p class="login button"> 
                            <input type="submit" value="Login" /> 
						</p>
                        <p class="change_link">
						Not a member yet ?<a href="#toregister" class="to_register">Sign us</a>
						</p>
					</form>
				</div>
				<div id="register" class="animate form">
                	<form method="post" action="login/signup">
                		<h1> Sign up </h1> 
                        <p>	<label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                            <input id="usernamesignup" name="name" required type="text" placeholder="mysuperusername690" />
                        </p>
                        <p> <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                            <input id="emailsignup" name="email" required type="email" placeholder="mysupermail@mail.com"/> 
                        </p>
                        <p> <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                            <input id="passwordsignup" name="password" required type="password" placeholder="eg. X8df!90EO"/>
                        </p>
                        <p> <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                            <input id="passwordsignup_confirm" name="password_confirm" required type="password" placeholder="eg. X8df!90EO"/>
                        </p>
                        <p class="signin button"> 
							<input type="submit" value="Sign up"/> 
						</p>
                        <p class="change_link">  
						Already a member ?<a href="#tologin" class="to_register">log in </a>
						</p>
                    </form>
				</div>
			</div>
        </div>  
	</section>
</div>