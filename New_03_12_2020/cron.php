  <?php
    use Illuminate\Support\Facades\Artisan;
    //use Illuminate\Support\Facades\Redirect;
      
  
        // the message
            $msg = "Its from cron.php file which is root of my laravel project\nSecond line of text";
            
            // use wordwrap() if lines are longer than 70 characters
            $msg = wordwrap($msg,70);
            
            // send email
            mail("moinulibr@gmail.com","My subject",$msg);
            
           
            //The URL that we want to GET.
            $url = 'https://digilab.dotcoom.com/database-backup-run-cron';
             
            //Use file_get_contents to GET the URL in question.
            $contents = file_get_contents($url);
          
            // /usr/local/bin/php /home/dotcaayc/public_html/index.php
     ?>