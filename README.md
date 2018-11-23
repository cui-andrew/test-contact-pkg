# Andrew Cui Test Laravel Plus-in

This is for testing how to make the laravel package 

[![Stars](https://img.shields.io/github/stars/cui-andrew/test-contact-pkg.svg?style=flat-square)](https://github.com/cui-andrew/test-contact-pkg/stargazers)
##


1 In the /config/app.php 
add code

   Andrew\Contact\ContactServiceProvider::class,
   
 2 add config file
 
 
php artisan vendor:publish --provider="Andrew\Contact\ContactServiceProvider"
