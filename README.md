# Patient Monitoring Website
## Overview:
This project is a prototype of a portal website where hospital clients can view their checkup records. 
<br>Among its features include:<br>
* A responsive design layout that adapts to different screen sizes ranging from mobile to desktop screens. This was done using CSS breakpoints and media queries as well as relative units (i.e. rems, percentages).
* Error handling features such as that implemented in the login and add new account system where users are notified when they make input mistakes (e.g. an error message is shown when a wrong password is entered).
* Security features including:<br> 
  * Different user access levels (e.g. Basic user accounts cannot access HTML elements only available for admin accounts)
  * Security against injection attacks using __Prepared Statements__
  * User sessions using PHP that prevent access to any part of the website when not logged in.
## How the Website Works:
There are 2 access levels on the website depending on account type: __Admin__ and __User__<br>
Users can:<br>
  * View their checkup records.
  * View their account details.
  * Change their password (WIP)
Admins can:
  * Add new user accounts.
  * Edit user profiles. (WIP.
  * Edit user checkup records. (WIP)
  ## How to Use the Website
  The website was developed using phpMyAdmin and XAMPP client for running the Apache and MySQL modules. Instructions will be based on using the XAMPP client.<br>
  Here are the steps on how to setup the website on your device:
  1. Install XAMPP.
  2. Run the XAMPP control panel. 
  3. Inside the control panel, start up the Apache and MySQL modules.
  4. Place the "Patient-Monitoring-Website-master" folder inside xampp/htdocs.
  5. Open your trusty internet browser.
  6. In the address bar, type in "localhost/Patient-Monitoring-Website-master".
  7. DONE.
