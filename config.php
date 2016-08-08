<?
require(__DIR__ . '/api.php');
// Example config, replace as needed
$API = new XPro\API;
XPro\API::config(array(
  "staticImg" => array(
    "publicImgDir" => "/images/", // Change me for a different publically accessable direcory
    "defaultImg" => "cat.jpg", // Change me for a different default image
    "privateImgDir" => "images/", // This can be anything, as long as the directory exists. Relative to the API's directory
    "putImgUrl" => "https://api.td512.io/get/image/" // Change me for a different URL to spit out
  ),
  "staticVid" => array(
    "publicVidDir" => "/videos/", // Change me for a different publically accessable direcory
    "defaultVid" => "big_buck_bunny.mp4", // Change me for a different default video
    "privateVidDir" => "videos/", // This can be anything, as long as the directory exists. Relative to the API's directory
    "putVidUrl" => "https://api.td512.io/get/video/" // Change me for a different URL to spit out
  ),
  "staticAudio" => array(
    "publicAudioDir" => "/audio/", // Change me for a different publically accessable direcory
    "defaultAudio" => "AoLDS.mp3", // Change me for a different default audio file
    "privateAudioDir" => "audio/", // This can be anything, as long as the directory exists. Relative to the API's directory
    "putAudioUrl" => "https://api.td512.io/get/audio/" // Change me for a different URL to spit out
  ),
  "staticGeneric" => array(
    "publicGenericDir" => "/generic/", // Change me for a different publically accessable direcory
    "privateGenericDir" => "generic/",  // This can be anything, as long as the directory exists. Relative to the API's directory
    "putGenericUrl" => "https://api.td512.io/get/other/" // Change me for a different URL to spit out
  ),
  "mediaTypes" => array(
    // Don't change these. These are the only extensions that work so far
    "img" => array(
      "jpg",
      "jpeg",
      "jpe",
      "png"
    ),
    // Don't change these. These are the only extensions that work so far
    "vid" => array(
      "mp4",
      "webm",
      "mkv",
      "ogv"
    ),
    // Don't change these. These are the only extensions that work so far
    "audio" => array(
      "mp3",
      "ogg"
    ),
    // Disallowed generic file extensions (generally use whatever you specified before)
    "generic" => array(
      "jpg",
      "jpeg",
      "jpe",
      "png",
      "mp4",
      "webm",
      "mkv",
      "ogv",
      "mp3",
      "ogg",
      "pl",
      "php",
      "rb",
      "cgi",
      "py"
    )
  ),
    // Messages for errors
    "messages" => array(
      "notAnImg" => "File is not an accepted image type.\n",
      "notAVid" => "File is not a accepted video type.\n",
      "notAnAudio" => "File is not an accepted audio type.\n",
      "notAnExe" => "File is not an accepted file type.\n",
      "notAGeneric" => "File is not an accepted file type.\n"
    ),
	// Change Me!
	"logon" => array(
	   "dbuser" => "",
	   "dbpass" => "",
	   "dbhost" => "",
	   "dbname" => "",
	   "login_name" => "login.php",
	   "secret_page" => "private.php",
	   "edit_name" => "edit.php",
	   "register_name" => "register.php",
	   "logout_name" => "logout.php"
	   )
));