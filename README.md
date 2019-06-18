WARNING!
========

<h3>Please be informed that this library has been obsoleted and marked as End-of-Life product. 


------------------------------------------------------



MOLPay X-Cart Plugin
=====================

MOLPay Plugin for X-Cart Shopping Cart developed by MOLPay technical team.


Supported version
-----------------

X-Cart version 4.6.3 Gold

[Click Here for X-Cart version 5.2.x](https://github.com/MOLPay/X-Cart_Plugin/wiki/X-Cart_Plugin-5.2.x) 


Notes
-----

MOLPay Sdn. Bhd. is not responsible for any problems that might arise from the use of this module. 
Use at your own risk. Please backup any critical data before proceeding. For any query or 
assistance, please email support@molpay.com 


Installations
-------------

- Download this plugin, Extract/Unzip the files. 

- Upload or copy those file and folder into your X-Cart root folder

- (Skip this if your X-Cart is not hosted in UNIX environment). 
Please ensure the file permission is correct. It's recommended to CHMOD to 644

- Go to any browser (Mozilla, Google Chrome, Internet Explorer, etc), 
copy and paste the URL shown below into address bar on your browser. 
(The purpose of this action is to register MOLPay Payment plugin into the database).
    
     `http://www.your-xcart.com/setup_molpay.php`

    ***Replace `www.your-xcart.com` with URL address of your shopping cart.

- Login as xcart store Admin, go to `Content` > `Edit templates` , click on `common_files` folder,
 and then click on folder name `payments` from the list.

- Scroll to the bottom of your page, and upload file name `cc_molpay.tpl` from the folder
name upload in this pack and then upload the file.

- On the top menu, click on `Settings` tab, and choose `Payment Methods` from the list.

- Scroll to the bottom of the page, you will see a drop down menu for the list of payment
method available for your xcart. Choose `MOLPay Online Payment Gateway` from the list
and click `[Add]` to enable this payment module on your shopping cart.

- At the same page, you will see MOLPay Online Payment Gateway has been activated on
your xcart. Click on `checkbox` beside MOLPay Online Payment Gateway field name and
click `[Apply Changes]` button.

- Click on `Configure` link to start configure this payment module. Provide your MOLPay
Merchant ID, Verify Key and Return URL to the respective fields. Click `[Update]` button to
save all changes. You’re Done!
 
Reminder
-------------
Please use below url for return url

http://www.storedomain.com/payment/cc_molpay_process.php

Replace www.storedomain.com with your own xcart URL

Contribution
------------

You can contribute to this plugin by sending the pull request to this repository.


Issues
------------

Submit issue to this repository or email to our support@molpay.com


Support
-------

Merchant Technical Support / Customer Care : support@molpay.com <br>
Sales/Reseller Enquiry : sales@molpay.com <br>
Marketing Campaign : marketing@molpay.com <br>
Channel/Partner Enquiry : channel@molpay.com <br>
Media Contact : media@molpay.com <br>
R&D and Tech-related Suggestion : technical@molpay.com <br>
Abuse Reporting : abuse@molpay.com
