# Project_2 of Sophomore's Level 2, Phase 4  

To see the CS50 appliance version of this app (that runs when pasted in the
cs50 appliance's vhosts/localhost/public/ folder) go to commit 87d0bf01024c78e47cbc76340281e550804dcb64.

The current version of the app is optimized for the online CS50 IDE (as of now
image uploads do not work due to this restriction).

It consists of four folders (We've highlighted the more important files only):

* controllers:
    - session.php -> If nobody is logged in, redirect to login.php
    - helpers.php -> Has helper functions

* models:
    - db.php -> Does all the database related work, and contains functions for each task 
      so that the files in public simply have to call parameterized functions instead of 
      writing full mysql queries.

* public:
    - img/usr/ -> Directory to store user uploaded pictures (doesn't work in CS50 IDE as of now)
    - js/scripts.js -> Front-End Javascript for validation of fields
    - index.php -> If user is logged in, render dashboard
    - login.php -> Login page
    - logout.php -> Script to logout user
    - register.php -> Page for user registration
    - sell.php -> Page for putting an item on sale
    - store.php -> Page to display the Storefront

* views:
    - header.php -> Header file, has all the formalities of an HTML document
    - cp_form.php -> Form for changing password
    - dashboard.php -> Dashboard of a logged in user, displays items that the user has put on sale
    - login_form.php -> HTML for the login page
    - registration_form.php -> HTML for the registration page
    - sell_form.php -> HTML for the item selling page
    - store.php -> HTML for the Storefront
    - footer.php -> Simply terminates the above HTML

All that is required to be done to run this app right now is:

1. Stop the apache server if already running by typing "apache50 stop" (without quotes)
   in a CS50 IDE terminal.
2. Type "apache50 start ~/Project_2/public" (without quotes).
3. Type "mysql50 start".
4. I've already set up the phpmyadmin requirements, but if someone wanted to do 
   the work themselves, they could do so by going to https://ide50-nickfury95.cs50.io/phpmyadmin/
   and signing in with the username and password "nickfury95" and "v1kCjsvLYytrBTGV" respectively, and adding a user
   with credentials "jharvard" and "crimson" for localhost respectively. The SQL required before the
   app is fully functional is given in the file "sql_required.sql". Run that in phpmyadmin and you're
   good to go.
5. Go to https://ide50-nickfury95.cs50.io/ to run the app.
   
