<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<div class="container bpink">
	<h1 class="bred cwht">Welcome to <sup class="fa-subscript">CodeIgniter</sup>CodeIgniter!</h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<samp>If you would like to edit this page you'll find it located at:</samp>
		<code>application/views/welcome_message.php</code>

		<kbd>The corresponding controller for this page is found at:</kbd>
		<p>
			<label for="date">Example date</label>
			<input type="date" id="date">
		</p>
		<p>
			<label for="time">Example time</label>
			<input type="time" id="time">
		</p>
		<code>application/controllers/Welcome.php<span><i class="fa fa-facebook">facebook</i> </span></code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

