<html>
    <head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
	
		@keyframes animateMe {
  from {top: 0%;border:0PX SOLID RED;BORDER-RADIUS:0PX; background-color: yellow;opacity:0;height:100px}
  to {top: 50%;border:1PX SOLID GREEN;BORDER-RADIUS:10PX;opacity:1;height:465px;}
}
	@keyframes animateMe1 {
  from {opacity: 0;}
  to {opacity:1;}
}

input{
	margin:4px 0px 4px 0px;
	width:210px;
	height:26px;
	border:1px solid black;
	border-radius:3px;
}
.shadow{
box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
				
}
.next-button:hover{
	color:white !important;
	background-color:green !important;
	crusor:pointer;
}
	</style>
	</head>
    <body style="overflow: hidden;">
        <div style=" height: 100vh; background-color: rgb(255, 255, 255);" class="">
            <div
                style="
				padding:5px;
					opacity:0;
					height:100px;
                    max-width: 100%;
                    background-color: rgb(255, 255, 255);
                    width: 350.81px;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    position: relative;
                    top: 50%;
                    color: rgb(91, 173, 236);
                    font-size: 30.7892px;
                    text-align: center;
					animation-name:animateMe;
					animation-duration: 2s;  
					animation-delay: 2s;
					animation-fill-mode: both;
                "
                class="shadow"
            >
                Hi, Let's setup few things together.
				<hr>	<form method='post' >
				{{csrf_field()}}
				<div style='left: 50%;
                    transform: translate(-50%);position: relative;opacity:0;width:max-content;animation-name:animateMe1;animation-delay: 3s;
					animation-duration: 3s; 
					animation-fill-mode: both;font-size:16px;text-align:left;color:#009688!important;  letter-spacing: 1px;'>
				
					<label>Database Connection:</label>
					</br>
					<input name='db[db_connection]' VALUE='{{env('db_connection')}}' required>
					</br>
					<label>Database Host:</label>
					</br>
					<input name='db[db_host]' VALUE='{{env('db_host')}}' required>
					</br><label>Database Port:</label>
					</br>
					<input name='db[db_port]' VALUE='{{env('db_port')}}' required>
					</br><label>Database Name:</label>
					</br>
					<input name='db[db_database]' VALUE='{{env('db_database')}}' required>
					</br><label>Database Username:</label>
					</br>
					<input name='db[db_username]' VALUE='{{env('db_username')}}' required>
					</br><label>Database Password:</label>
					</br>
					<input name='db[db_password]' type='password' VALUE='' required > 
					</br>
					
					
				</div>
				<input type='submit' name='step1' value='Next' style='margin-top:8px;border-radius:5px;float:right;width:120px;font-size:28px;height:33px;color:green;animation-name:animateMe1;animation-delay: 3s;opacity:0;animation-duration: 3s; 
					animation-fill-mode: both;' class='shadow next-button'>
					
					</form>
            </div>
        </div>
    </body>
</html>
