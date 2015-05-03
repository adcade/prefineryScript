#Prefinery Script
This is a script that curls against a refinery API for `x` times, can be extrapolated to do `a` script for `b` times.

**NOTE:** Start with # 100 or above, betauser+(1-100)@adcade.com were used to test the script :)

###Dependancies
Download the 4 dependancies below **ONLY IF** if you stumble upon any errors from [Get Started](./#GetStarted). Given you have, try installing and setting up the below dependancies:

* [cURL](http://curl.haxx.se/download.html)
* On Mac, **make sure to** Download or Update [XCode](https://developer.apple.com/xcode/downloads/) & [Developer Tools](http://stackoverflow.com/questions/9329243/xcode-4-4-and-later-install-command-line-tools)
* Current Stable version of [PHP](http://php-osx.liip.ch/) *just incase*, should be covered by composer install. 
* [WAMP](http://www.wampserver.com/en/) `Windows Only` *if your want to suck at life and use a Windows machine*


##Get Started
1. From the root of the installation, run:
	
		curl -sS https://getcomposer.org/installer | php
2. Then run:

		php composer.phar install
		
	This should take a little bit. It should squelch something similar to the below:
	
		Loading composer repositories with package information
		Installing dependencies (including require-dev)
		  - Installing symfony/filesystem (2.8.x-dev 41b7d35)
		    Cloning 41b7d35d812653a54fd931a6c8cf139767a95abb
		
		  - Installing symfony/process (2.8.x-dev 8382bc5)
		    Cloning 8382bc54f1d83ee36fb3983bb1b6b307d238622b
		
		  - Installing ...
		  
	And at the end you should see:
	
		Writing lock file
		Generating autoload files
				
3. From here, Robo takes control. Run:

		bin/robo init
		
	This will ask a few questions to update your script.
	
	1. What's the API Url? (Your `API URL`)  
	2. What number do you want to start with? (For betauser+`X`@adcade.com)  
	3. How many times do you want to run this curl?  
	
4. And lastly,

		bin/robo run
		
	This will run it for the number of time you set it for in the previous command.


##Issues
Currently the script will only work once unless the values are manually reset in `curlIt.php` in lines `4-6` to:

	$y = 0;
	$b = 0;
	$url = 'varapi';