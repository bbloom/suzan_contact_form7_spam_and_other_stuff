# Modify source code directly in Contact Form 7 plugin to lessen spam

The file where the edits are in /public_html/wp-content/plugins/contact-form-7/includes/mail.php.
I am keeping a copy of this file in this repo.

My new file is: public_html/wp-content/plugins/contact-form-7/includes/bob.php

## UPDATE NOTES
Well, yes, when the plugin updates, my updates are erased completely.

The number of spam emails went up hugely once I did the updates.

These are the steps I took to get my mods back in there!

- SSH into the server
- cd into /wp-content/plugins/contact-form-7/includes
- make this repo public !!!
- `wget https://github.com/bbloom/suzan_contact_form7_spam/blob/master/bob.php`
- make this repo private again!!
- add https://github.com/bbloom/suzan_contact_form7_spam/blob/c1b2b93fa3e69d27ab524cbf76690885a0c9081c/mail.php#L259 to mail.php
