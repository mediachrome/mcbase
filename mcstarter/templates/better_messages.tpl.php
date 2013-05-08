<?php 
/*
Available variables are:
$content	The messages to put inside Better Messages. Drupal originally calls theme_status_messages() to theme this output.
			With this module enabled you'll always have to call theme_better_messages_content() instead of theme_status_messages().
*/
?><div id="better-messages-default">
	 <div id="messages-inner">
  	 <div class="content">
	<?php /* If you want to theme further.. theme_better_messages_content() */ ?>
	<?php print $content ?>
	   </div>
	   <div class="footer">
	   <p><span class="message-timer"></span><a class="message-close" href="#"></a></p>
	   </div>
	</div><!--/ #inner -->
	</div><!--/ #better-messages-default -->
