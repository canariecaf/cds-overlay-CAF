<?php // Copyright (c) 2016, SWITCH 
// CAF 2016 ?>
<!DOCTYPE HTML>
<html>
<head>
	<title><?php echo getLocalString('title') ?></title> 
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="keywords" content="Home Organisation, Discovery Service, WAYF, Shibboleth, Login, AAI">
	<meta name="description" content="Choose your home organisation to authenticate">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
	<link rel="stylesheet" href="<?php echo $_SERVER['SCRIPT_NAME'] ?>/styles.css" type="text/css">
	<link rel="stylesheet" href="<?php echo $_SERVER['SCRIPT_NAME'] ?>/ImprovedDropDown.css" type="text/css">
	<script type="text/javascript" src="<?php echo $javascriptURL ?>/jquery.js"></script>
	<script type="text/javascript" src="<?php echo $javascriptURL ?>/improvedDropDown.js"></script>
	<script type="text/javascript">
	<!--
	
	// Prevent that WAYF is loaded in an IFRAME
	function preventIframeEmbedding(){
		if (top != self) {
			top.location = self.location;
		}
	}
	
	// Set focus to submit button or drop down list
	function setFocus(){
		// Skip this if we cannot access the form elements
		if (
			!document.IdPList || 
			!document.IdPList.Select
			){
			return;
		}
		
		if (
				document.IdPList.user_idp && 
				document.IdPList.user_idp.selectedIndex == 0
			){
			// Set focus to select
			document.IdPList.user_idp.focus();
		} else {
			// Set focus to submit button
			document.IdPList.Select.focus();
		}
	}
	
	// Perform input validation on WAYF form
	function checkForm(){
		if(
			document.IdPList.user_idp && 
			document.IdPList.user_idp.selectedIndex == 0
		){
			alert(unescape('<?php echo getLocalString('make_selection', 'js') ?>'));
			return false;
		} else {
			return true;
		}
	}
	
	// Init WAYF
	function init(){
		preventIframeEmbedding();
		
		setFocus();
		
		if (<?php echo ($useImprovedDropDownList) ? 'true' : 'false' ?>){
			
			var searchText = '<?php echo getLocalString('search_idp', 'js') ?>';
			$("#userIdPSelection:enabled option[value='-']").text(searchText);
			
			// Convert select element into improved drop down list
			$("#userIdPSelection:enabled").improveDropDown({
				iconPath:'<?php echo $imageURL ?>/drop_icon.png',
				noMatchesText: '<?php echo getLocalString('no_idp_found', 'js') ?>',
				noItemsText: '<?php echo getLocalString('no_idp_available', 'js') ?>',
				disableRemoteLogos: <?php echo ($disableRemoteLogos) ? 'true' : 'false' ?>
			});
		}
	}
	
	// Call init function when DOM is ready
	$(document).ready(init);
	
	-->
	</script>
</head>

<body>

<div id="container">
	<div class="box">
		<div id="header">
		 <a href="<?php echo sprintf($federationURL, $language) ?>"><img src="./images/logo.png" alt="Federation Logo" id="federationLogo"></a>
		
			
		</div>
			<div id="content">
			
<!-- Body: Start -->
