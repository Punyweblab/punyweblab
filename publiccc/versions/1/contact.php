 
<!-- Set the current -->
<?php $current_page = "contact";  ?>
<!-- INCLUDE HEADER -->
<?php include'inc/header.php'; ?>
<!-- ############  DO NOT WRITE ABOVE HERE  ###########  -->




<div id="formContainer" class="grid_12 omega">
	<div class="postResult grid_12 omega">
		<p></p>
	</div>

	<form id="POSTFORM" action="inc/process_message.php" method="post" autocomplete="on" >
		<h1>Feel free to contact me</h1>
		<input class="textInput" type="text" name="name" placeholder="Name:"><br>
		<input class="textInput" type="text" name="email" placeholder="Email:"><br>
		<input class="textInput" type="text" name="subject" placeholder="Subject:"><br>
		<textarea name="textarea"></textarea><br>
		<input id="sendButton" type="submit" value="Send">
	</form>
</div>






<!-- ############  DO NOT WRITE BELOW HERE  ###########  -->
<!-- INCLUDE FOOTER -->
<?php include 'inc/footer.php' ?>
