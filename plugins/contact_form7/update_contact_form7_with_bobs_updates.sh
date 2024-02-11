#!/bin/bash

# this file resides on Cloudways servers at ../public_html/custom_cron_scripts/ folder (should already be there from Akeeba install!)
# it is expected that this file is invoked via CRON

# =============================================================================================
#  STEP 1: define the Cloudways path
# =============================================================================================
# eg: /blah/blah/applications/abcdefghij
cloudways_path=""

# =============================================================================================
#  STEP 2: should we update the Contact Form7 plugin with Bob's updates?
# =============================================================================================

# -O- = return contents, do not actually download  (--output-document=FILE)
# -q  = suppress wget's progress output
do_update=$(wget -O- -q https://raw.githubusercontent.com/bbloom/suzan_contact_form7_spam_and_other_shit/master/plugins/contact_form7/is_update_contact_form7_with_bobs_updates.txt)

# =============================================================================================
#  STEP 3: check if update is required... if so, perform the update
# =============================================================================================


if [ $do_update = 'YES' ]; then
    # When downloading a file, Wget stores it in the current directory by default. You can change that by using the -P option to specify the name of the directory where you want to save the file.
    # download from code.jquery.com/jquery-3.6.0.min.js, and save it to the Downloads folder (which I assume is a subfolder)
    # -q turns off output
    # -o overwrite existing file (small letter oh)  (in case this bash file is run again, after an update, 
    #     and is_update_contact_form7_with_bobs_updates.txt has not yet been changed to "NO"
    #  wget file_goes_to_here_locally file_comes_from_this_remote_location
    wget -q -o $cloudways_path/public_html/plugins/contact_form7/includes/bob.php https://raw.githubusercontent.com/bbloom/suzan_contact_form7_spam_and_other_shit/master/bob.php
    wget -q -o $cloudways_path//public_html/plugins/contact_form7/includes/main.php https://raw.githubusercontent.com/bbloom/suzan_contact_form7_spam_and_other_shit/master/main_with_bobs_updates.php

fi
