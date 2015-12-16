<?php
            function ago($timestamp) {
                $difference = time() - $timestamp;

                if ($difference < 60)
                    return $difference . " seconds ago";
                else {
                    $difference = round($difference / 60);
                    if ($difference < 60)
                        return $difference . " minutes ago";
                    else {
                        $difference = round($difference / 60);
                        if ($difference < 24)
                            return $difference . " hours ago";
                        else {
                            $difference = round($difference / 24);
                            if ($difference < 7)
                                return $difference . " days ago";
                            else {
                                $difference = round($difference / 7);
                                return $difference . " weeks ago";
                            }
                        }
                    }
                }
            }
            ?>

            <?php
                function linkify_text($raw_text, $tweet = NULL)
{
    // first set output to the value we received when calling this function
    $output = $raw_text;

    // create xhtml safe text (mostly to be safe of ampersands)
    $output = htmlentities(html_entity_decode($raw_text, ENT_NOQUOTES, 'UTF-8'), ENT_NOQUOTES, 'UTF-8');

    // parse urls
    if ($tweet == NULL)
    {
        // for regular strings, just create <a> tags for each url
        $pattern        = '/([A-Za-z]+:\/\/[A-Za-z0-9-_]+\.[A-Za-z0-9-_:%&\?\/.=]+)/i';
         $replacement    = '';
//        $replacement    = '<br /><a href="${1}" rel="external">${1}</a>';
        $output         = preg_replace($pattern, $replacement, $output);
    } else {
        // for tweets, let's extract the urls from the entities object
        foreach ($tweet->entities->urls as $url)
        {
            $old_url        = $url->url;
            $expanded_url   = (empty($url->expanded_url))   ? $url->url : $url->expanded_url;
            $display_url    = (empty($url->display_url))    ? $url->url : $url->display_url;
            $replacement    = '<br /><a href="'.$expanded_url.'" rel="external">'.$display_url.'</a>';
            $output         = str_replace($old_url, $replacement, $output);
        }

        // let's extract the hashtags from the entities object
        foreach ($tweet->entities->hashtags as $hashtags)
        {
            $hashtag        = '#'.$hashtags->text;
            $replacement    = '<br /><a href="http://twitter.com/search?q=%23'.$hashtags->text.'" rel="external">'.$hashtag.'</a>';
            $output         = str_ireplace($hashtag, $replacement, $output);
        }

        // let's extract the usernames from the entities object
        foreach ($tweet->entities->user_mentions as $user_mentions)
        {
            $username       = '@'.$user_mentions->screen_name;
            $replacement    = '<br /><a href="http://twitter.com/'.$user_mentions->screen_name.'" rel="external" title="'.$user_mentions->name.' on Twitter">'.$username.'</a>';
            $output         = str_ireplace($username, $replacement, $output);
        }

        // if we have media attached, let's extract those from the entities as well
        if (isset($tweet->entities->media))
        {
            foreach ($tweet->entities->media as $media)
            {
                $old_url        = $media->url;
                $replacement    = '<br /><span class="glyphicon glyphicon-picture" style="color:#fff;"></span> <a href="'.$media->expanded_url.'" rel="external" class="twitter-media" data-media="'.$media->media_url.'">'.$media->display_url.'</a>';
                $output         = str_replace($old_url, $replacement, $output);
            }
        }
    }

    return $output;
}
?>

<?php
 ini_set('display_errors', 0);
require_once('TwitterAPIExchange.php');

/** Set cache file **/
$tweet_file = 'includes/TweetCache.json';

/** Set cache time in minutes **/
$cache_time = 15;

/** Set access tokens here **/
$settings = array(
            'oauth_access_token' => "532281996-yQL9nsAqhepvuvuiQighcfpnvsU8HChGF1fiMpAk",
            'oauth_access_token_secret' => "nWMs6w4jUtAnxAaoRc0gp5nakBHIPUfATQlkMAI",
            'consumer_key' => "KFqoSfG7CjtKYCbczvRGwg",
            'consumer_secret' => "Sb2DSBMt9FulkxY8C6kxwjJop4N1ua4oAEucEuU"
);

ReadLatestUpdate();

 function ReadLatestUpdate(){
   global $tweet_file;
    global $cache_time;

   if(!file_exists($tweet_file)){
      UpdateTimeline();
      return;
   }
   $handle = fopen($tweet_file,'r');
   $strUpdateDate = fgets($handle);
   fclose($handle);
   if(empty($strUpdateDate)){
      //file is empty
      UpdateTimeline();
   }
   else{
      $updateDate = new DateTime($strUpdateDate);
      $now = new DateTime("now");
      $since = $updateDate->diff($now);

      $minutes = $since->i;

      if($minutes > $cache_time){
         //reload feed
         UpdateTimeline();
      }
      else{
         //read cache
         ReadFromCache();
      }

   }
 }

 function ReadFromCache(){
   global $tweet_file;
   $handle = fopen($tweet_file,'r');
   $data = fgets($handle); //skip first line
   $data = '';
   while(!feof($handle)){
      $data.= fgets($handle);
   }
   fclose($handle);
   //echo results;
//   echo "Cache <p class='tweet'>$data</p>";

   $string = json_decode($data, $assoc = TRUE);

//               echo "<pre>";
//               print_r($string);
//               echo "</pre>";

      foreach($string as $items)
                   {
                        //$content = $items['text'];
                        $time = ago(strtotime($items['created_at']));
                        $content = linkify_text($items['text']);
//                        $keav = linkify_text($items['user']['entities']['url']['urls']['0']['expanded_url']);
                        $link = ($items['entities']['urls']['0']['expanded_url']);
                        $display = ($items['user']['entities']['url']['urls']['0']['display_url']);
                    }

                    echo "<p class='tweet'>$content<br><a href='$link' rel='external'>$display</a></p>";
                    echo "<p class='time'>$time</p>";
}

 function UpdateCache($timeline){
   global $tweet_file;
   $handle = fopen($tweet_file,'w') or die ('Cannot open cache file');
   $data = date('m/d/Y h:i:s a', time())."\r\n".$timeline;
   fwrite($handle,$data);
   fclose($handle);
 }

 function UpdateTimeline(){
 global $settings;
 /** Perform a GET request and echo the response **/
$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$getfield = '?username=BarryRailway&count=1';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);

$timeline = $twitter->setGetfield($getfield)
         ->buildOauth($url, $requestMethod)
             ->performRequest();

          //save to cache
          UpdateCache($timeline);

          //echo results;
//         echo "Timeline <p class='time'>$timeline</p>";

         $string = json_decode($timeline, $assoc = TRUE);

//               echo "<pre>";
//               print_r($string);
//               echo "</pre>";

               foreach($string as $items)
                   {
                        //$content = $items['text'];
                        $time = ago(strtotime($items['created_at']));
                        $content = linkify_text($items['text']);
//                        $keav = linkify_text($items['user']['entities']['url']['urls']['0']['expanded_url']);
                        $link = ($items['user']['entities']['url']['urls']['0']['expanded_url']);
                        $display = ($items['entities']['urls']['0']['display_url']);
                    }

                    echo "<p class='tweet'>$content<br><a href='$link' rel='external'>$display</a></p>";
                    echo "<p class='time'>$time</p>";
         }
?>
