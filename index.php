<?php
include_once(dirname(__FILE__).'/users/users.php');
include_once(dirname(__FILE__).'/header.php');
?>
<style>
.status {
	border-bottom: 1px dotted silver;
}

.status img {
	float: left; margin: 0.5em;
}

.message {
	
}

.tool {
	font-size: xx-small;
	color: silver;
}
</style>
<?php

$current_user = User::get();

if (is_null($current_user)) {
	$statusnet_module = UserBaseModule::get('statusnet');
	$statusnet_module->renderRegistrationForm(true, null, array('returnto' => UserConfig::$SITEROOTURL));
} else {
	$statusnet_creds = $current_user->getUserCredentials('statusnet');

	$result = $statusnet_creds->makeOAuthRequest($statusnet_APIRootURL.'/statuses/friends.json', 'GET');

	$statuses= json_decode($result["body"], true);

	foreach ($statuses as $status) {
		?>
		<p class="status">
		<img src="<?php echo $status["profile_image_url"]; ?>" />
		<div class="message"><?php echo $status["status"]["statusnet_html"];?></div>
		<div class="tool">Posted using <?php echo $status["status"]["source"];?></div>
		</p>
		<div style="clear: both"/>
		<?php
	}
	
}

include_once(dirname(__FILE__).'/footer.php');
