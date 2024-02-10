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

==> can just use a bash script... because you can fetch the results of a file with the --output-document=FILE option. 
** https://linuxhandbook.com/if-else-bash/
** https://linuxhandbook.com/if-else-bash/
** https://www.howtogeek.com/884039/how-to-use-bash-if-statements-with-examples/

** https://www.digitalocean.com/community/tutorials/how-to-use-wget-to-download-files-and-interact-with-rest-apis
** https://linuxize.com/post/wget-command-examples/

---
HOW ABOUT THIS?  ==> THIS IS PROBABLY THE ONE TO DO, AND THEN PUT IT IN THE CRON

#!/bin/bash

// -O-  save results from remote file, instead of downloading it
// -q   suppress wget's status output
do_update = wget -O- -q https://jsonplaceholder.typicode.com/posts?_limit=2

if [ $do_update = 'YES' ]; then

    # When downloading a file, Wget stores it in the current directory by default. You can change that by using the -P option to specify the name of the directory where you want to save the file.
    # download from code.jquery.com/jquery-3.6.0.min.js, and save it to the Downloads folder (which I assume is a subfolder)
    # -q turns off output
    # -o overwrite existing file (small letter oh)
    #  wget file_goes_here   file_comes_from_this_remote_location
    wget -o -P /path/contact_form7/ -q https://cdn.pixabay.com/photo/2016/12/13/05/15/puppy-1903313__340.jpg 
fi






