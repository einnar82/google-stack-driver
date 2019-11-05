## Google Stack Logger For Laravel

Instructions:

Install the package via composer 

    $ composer require einnar82/google-stack-driver

Next, go to **config/logging.php** and add the google stack logger in the options

    'channels' => [
        'stackdriver' => [       
              'driver' => 'custom',        
              'via' => RannieOllit\GoogleStackDriver\StackDriverLogger::class,        
              'level' => 'debug',    
        ],

Then set your **LOG_CHANNEL** into 'stackdriver' in your **.env**

Reference:

[Run Laravel on Google App Engine standard environment](https://cloud.google.com/community/tutorials/run-laravel-on-appengine-standard)
