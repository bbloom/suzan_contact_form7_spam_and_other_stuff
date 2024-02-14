#!/bin/bash


echo "====================================================="
echo "Welcome to update_contact_form7_with_bobs_updates.sh"
echo "====================================================="



# if the file "bob.php" exists, then do NOT do the update!!
# https://linuxize.com/post/bash-check-if-file-exists/
FILE=../wp-content/plugins/contact-form-7/includes/bob
if test -f "$FILE"; then
    echo "==============================================="
    echo "$FILE exists. "
    echo "So, there is no reason to perform the update"
    echo "==============================================="
    exit 1
fi


# if my GitHub repository is private, then this update will fail
github_repo="bbloom/suzan_contact_form7_spam_and_other_stuff"
if ! curl -fsS "https://api.github.com/repos/${github_repo}" >/dev/null; then
    echo "user_slash_repo is private. Please make it public!"
    exit 1
fi


# Perform the update!
PLUGIN_PATH=../wp-content/plugins/contact-form-7/includes
curl -o  ..$PLUGIN_PATH/mail.php  https://raw.githubusercontent.com/bbloom/suzan_contact_form7_spam_and_other_stuff/master/plugins/contact_form7/mail_with_bobs_updates.php
curl -o  ..$PLUGIN_PATH//bob.php  https://raw.githubusercontent.com/bbloom/suzan_contact_form7_spam_and_other_stuff/master/plugins/contact_form7/bob.php


echo "====================================================="
echo " finished running update_contact_form7_with_bobs_updates.sh !!"
echo "====================================================="
