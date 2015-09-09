<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Веб камера");
?>
<div class="main container">
	<section class="section_header">
		<!--Хеебный крош-->
		<?$APPLICATION->IncludeComponent(
			"custom:breadcrumb",
			"",
			Array(
				"COMPONENT_TEMPLATE" => "oez",
				"START_FROM" => "0",
				"PATH" => "",
				"SITE_ID" => "s1"
			)
		);
		?>
		<!--Хлебные крошки-->
		<h1><?=$APPLICATION->GetTitle();?></h1>
	</section>
	<section class="text-center">
	<SCRIPT LANGUAGE="JavaScript">// Set the BaseURL to the URL of your camera
		var BaseURL = "http://79.140.96.230/";

		// DisplayWidth & DisplayHeight specifies the displayed width & height of the image.
		// You may change these numbers, the effect will be a stretched or a shrunk image
		var DisplayWidth = "704";
		var DisplayHeight = "576";

		// This is the path to the image generating file inside the camera itself
		var File = "axis-cgi/mjpg/video.cgi?resolution=4CIF&camera=1&compression=90&color=1&clock=0&date=1";
		// No changes required below this point
		var output = "";
		if ((navigator.appName == "Microsoft Internet Explorer") &&
			(navigator.platform != "MacPPC") && (navigator.platform != "Mac68k"))
		{
// If Internet Explorer under Windows then use ActiveX
			output = '<OBJECT ID="Player" width='
			output += DisplayWidth;
			output += ' height=';
			output += DisplayHeight;
			output += ' CLASSID="CLSID:DE625294-70E6-45ED-B895-CFFA13AEB044" ';
			output += 'CODEBASE="';
			output += BaseURL;
			output += 'activex/AMC.cab#version=5,3,20,0">';
			output += '<PARAM NAME="MediaURL" VALUE="';
			output += BaseURL;
			output += File + '">';
			output += '<param name="MediaType" value="mjpeg-unicast">';
			output += '<param name="ShowStatusBar" value="0">';
			output += '<param name="ShowToolbar" value="0">';
			output += '<param name="AutoStart" value="1">';
			output += '<param name="StretchToFit" value="1">';
// Remove the // for the ptz settings below to use the code for click-in-image.
// output += '<param name="PTZControlURL" value="';
// output += BaseURL;
// output += '/axis-cgi/com/ptz.cgi?camera=1">';
// output += '<param name="UIMode" value="ptz-relative">'; // or "ptz-absolute"
			output += '<BR><B>Axis Media Control</B><BR>';
			output += 'The AXIS Media Control, which enables you ';
			output += 'to view live image streams in Microsoft Internet';
			output += ' Explorer, could not be registered on your computer.';
			output += '<BR></OBJECT>';
		} else {
// If not IE for Windows use the browser itself to display
			theDate = new Date();
			output = '<IMG SRC="';
			output += BaseURL;
			output += File;
			output += '&dummy=' + theDate.getTime().toString(10);
			output += '" HEIGHT="';
			output += DisplayHeight;
			output += '" WIDTH="';
			output += DisplayWidth;
			output += '" ALT="Camera Image">';
		}
		document.write(output);
		document.Player.ToolbarConfiguration = "play,+snapshot,+fullscreen"

		// Remove the // below to use the code for Motion Detection.
		// document.Player.UIMode = "MDConfig";
		// document.Player.MotionConfigURL = "/axis-cgi/operator/param.cgi?ImageSource=0"
		// document.Player.MotionDataURL = "/axis-cgi/motion/motiondata.cgi";
	</SCRIPT>
	</section>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
