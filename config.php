<?php

/*
  # Tatwerat Team FrameWork
  # By Abdo Hamoud
 */

// DB Conection
define('DB_Name', 'orders2'); // DB Name
define('DB_User', 'root'); // DB User Nme
define('DB_Password', ''); // DB  User Password
define('DB_Host', 'localhost'); // DB Server Name
define('DB_Charset', 'utf8'); // DB Charset Type
define('DB_autoreset', TRUE); // DB Autoreset

// SMTP Mailer Setting
# this toll allow when your server not support 'mail();' function
define('Allow_SMTP', FALSE); # to allow SMTP replace 'FALSE' with 'TRUE'
define('SMTP_Server', 'mail.yoursite.com');
define('SMTP_User', 'name@yoursite.com');
define('SMTP_Password', '123456');
if (Allow_SMTP)
    date_default_timezone_set('Etc/UTC');

// Social Login API
define('Facebook_APP_KEY', '');
define('Linkedin_APP_KEY', '');
define('Google_Client_ID', '');

define('Attach_Size', 2621440); //->Uploading Attach File Size = 2.5 MB 
//->Uploading Attach File Types (add from this types into Attach_Type)
/*
  - application/zip
  - application/x-zip-compressed
  - multipart/x-zip
  - application/x-compressed'
  - image/jpeg
  - image/jpg
  - image/gif
  - image/png
  - text/plain
  - audio/mpeg
  - application/mp4
  - video/mp4
  - video/flv
  - video/x-flv
 */
define('Attach_Type', 'image/jpeg,image/jpg,image/png,text/plain,application/zip,application/x-zip-compressed,multipart/x-zip,application/x-compressed');

define('Allow_Delete_Replies', TRUE); //->Allow Customer Delete Reply On His Ticket

define('Allow_Admin_Create', FALSE); //->Allow Administrator To Create Ticket

define('Site_URL', 'http://localhost/orders2'); //->Site URL

define('Site_Email', 'info@idoment.com'); //->Site Email

define('Activity_Email', '3arjun.r@idoment.com'); //->When Customers Add New Ticks And Replies

define('Site_Name', 'iDoment Order Management'); //->Site Title

define('Site_Description', 'Title Insurance Services , Mortgage Services, Indexing'); //->Your Site Description

define('Site_Logo', '<em>iDoment</em> inc'); //-> Logo Text
//->Logo Description
$des = 'Title Insurance Services , Mortgage Services, Indexing';
define('Site_Logo_Description', $des);

//->Register Privacy Policy Content
$pr = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam</p>' .
        '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam</p>' .
        '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam</p>' .
        '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam</p>' .
        '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam</p>'
        . '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam</p>';
define('Privacy_Policy', $pr);


define('Theme_Name', 'AH-Tickets'); //->Activate Theme

define('Language', 'en'); //->Set your Default Language | Available = [en,fr,es,it,de,nl]
    