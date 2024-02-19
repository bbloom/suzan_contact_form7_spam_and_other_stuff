# I assume that:
- Akeeba is installed
- on Cloudways

# Merge my custom mods with the original /includes/main.php
- https://github.com/rocklobster-in/contact-form-7
- merge them into mail_with_bobs_updates.php
- my mods are in mail_with_updates_for_reference_do_not_change.php
- when Contact Form7 updates, update this file
- get the Contact Form7 source from []()


# Installation Step 1: create update_contact_form7_with_bobs_updates.sh:
- cd to ../public_html/custom_cron_scripts
- ```touch update_contact_form7_with_bobs_updates.sh```
- ```nano update_contact_form7_with_bobs_updates.sh```
- copy paste file contents!

# Installation Step 2: create CRON:
- use the advanced cron editor
- I suggest once an hour
```
0  *  *  *  *       cd /home/1140098.cloudwaysapps.com/dmvwhsksgf/public_html && php /home/1140098.cloudwaysapps.com/dmvwhsksgf/public_html/custom_cron_scripts/update_contact_form7_with_bobs_updates.sh > /home/1140098.cloudwaysapps.com/dmvwhsksgf/tmp/update_contact_form7_with_bobs_updates.txt 2>&1 #CloudwaysApps
```



DONE!
