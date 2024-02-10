<?php
?>

SCRATCH NOTES
--> will end up deleting this file

* create a PHP for the Cloudways ../public_html/custom_cron_scripts/ folder (that should already be there!)
* add the PHP file
* move the files for this plugin from this repo's root to this subfolder
* the purpose is to run this thing in the Cloudways CRON, perhaps every 15 minutes or something???? 


=================================================================================================================================================
I want to add a file that is "wget", or otherwise read, or perhaps an easy API call, to indicate if the wget updates to the files should happen

* create a PHP in this repo, named something like "is_update_contact_form7_with_bobs_updates.php"
* this file returns "YES" or "NO"
* I directly edit this file within this Git repo 
* something like the following:
<?php
return "NO";
//return "YES";
?>


=================================================================================================================================================
The wget file to update:
<?
$server_name = "cloudways1120_blah_blah_blah";
$application_name = "abcdefghi";

$

?>

