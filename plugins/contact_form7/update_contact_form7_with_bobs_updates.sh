#!/bin/bash

# this file resides on Cloudways servers at ../public_html/custom_cron_scripts/ folder (should already be there from Akeeba install!)
# it is expected that this file is invoked via CRON


# =============================================================================================
#  STEP 1: should we update the Contact Form7 plugin with Bob's updates?
# =============================================================================================

# -O- = return contents, do not actually download  (--output-document=FILE)
# -q  = suppress wget's progress output
do_update = wget -O- -q https://raw.githubusercontent.com/bbloom/suzan_contact_form7_spam_and_other_shit/master/plugins/contact_form7/is_update_contact_form7_with_bobs_updates.txt

# =============================================================================================
#  STEP 2: check if update is required... if so, perform the update
# =============================================================================================

if [ $do_update = 'YES' ]; then
echo "YES, DO THE UPDATE!
fi
