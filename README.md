# Patient Monitoring Website
## Overview
This project is a prototype of a portal website wherein hospital clients can view their checkup records and hospital staff can manage patient records. 
Among its features include:
* A __responsive design layout__ that adapts to different screen sizes ranging from mobile to desktop screens. This was done using CSS breakpoints via media queries as well as relative units (i.e. rems, percentages).
* __Error handling features__ such as the ones implemented in the login and add new account systems where users are notified when they make input mistakes (e.g. an error message is shown when a wrong password is entered).
* __Security features__ including: 
  * Different __user access levels__ (e.g. Basic user accounts cannot access website elements only available for admin accounts)
  * Security against injection attacks using __Prepared Statements__
  * Prevents access to any part of the website when not logged in through the use of PHP session variables.
## How the Website Works
There are 2 access levels on the website depending on account type: __Admin__ and __User__. In the finished version...
### Users can:
  - [x] View their checkup records.
  - [ ] View their account details.
  - [ ] Change their password.
### Admins can:
  - [x] Add new user accounts.
  - [ ] Edit user profiles.
  - [ ] Add/edit user checkup records. 
  ## How to Use the Website
  The website was developed using phpMyAdmin and XAMPP client for running the Apache and MySQL modules. The instructions below are based on using the XAMPP client to run the website.
  Here are the steps on how to setup the website on your device:
  1. Install XAMPP.
  2. Run the XAMPP control panel. 
  3. Inside the control panel, start up the Apache and MySQL modules.
  4. Place the _"Patient-Monitoring-Website-master"_ folder inside _"xampp/htdocs"_.
  5. Open your trusty internet browser.
  6. In the address bar, type in _'localhost/phpmyadmin'_.
  7. Create a new database called _"patient_monitoring"_.
  8. Import the database tables from _'tools/patient_monitoring.sql'_.
  9. If you have set another password or username in phpMyAdmin, add it inside _'includes/dbconnect.inc.php'_. 
  10. __DONE.__
## Upcoming Improvements
- Implement checkup records and client profile editing for Admins.
- Improve security by adding client-side form validation.
