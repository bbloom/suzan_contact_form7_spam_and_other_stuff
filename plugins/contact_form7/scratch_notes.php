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
* this file is going to be either YES or NO, nothing else
* designed to be called by // designed to work with https://www.php.net/manual/en/function.file-get-contents.php


=================================================================================================================================================
The wget file to update:
<?
$server_name = "cloudways1120_blah_blah_blah";
$application_name = "abcdefghi";

// read the remote file to see if updates are needed
$do_the_update = file_get_contents(
    string $filename_of_my_file_on_this_github_repo,
    bool $use_include_path = false,
    ?resource $context = null,
    int $offset = 0,
    ?int $length = null
): string|false

if ($do_the_update == "YES") {
  // https://linuxize.com/post/wget-command-examples/
  // wget from_here  place_the_file_over_here
}


//---
// example from https://stackoverflow.com/questions/31572189/read-a-remote-file-in-php
// Don't forget, that for "Option 2" the configuration variable 'allow_url_fopen' must be set to on. 

    $string = file_get_contents("http://www.example.com");

    if($string === FALSE) {
         echo "Could not read the file.";
    } else {
         echo $string;
    }
//--

// use PHP;s EXEC command to do the WGETs
// https://www.php.net/manual/en/function.exec.php

  
?>

