<!DOCTYPE html>
<html>
<head>
	<title>View Tweets</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/style.css" type="text/css">
</head>
<body>
<div class="container">

	<div class="row profile_css">
		<img src="<?php echo $user->profile_image_url; ?>">
		<label class="profile_text_css"><?php echo 'Hi '.$user->name.'!'; ?></label>
		<a href="<?php echo "http://twitter.com/".$user->screen_name; ?>"><?php echo '@'.$user->screen_name; ?></a>
		<a href="./logout.php" class="logout_css">Logout</a>
	</div>

	<div class="row">
	<div class="col-md-6 rt_tweets_css">
		<h3>Retweeted atleast once Tweets</h3><br>
		<a href="" id="load_more_rt_tweets" class="load_tweets_css">Load more such tweets</a><br><br><br>
		<div class="rt_loader display_none"><img src="./images/loader.gif">Loading Tweets</div>

		<div class="load_more_rt_tweets">
			
		</div>

		<?php foreach($retweeted_once_tweets->statuses as $key=>$tweet){

			if($tweet->retweet_count > 1){ ?>
				<div class="tweets_css">
				<img src="<?php echo $tweet->user->profile_image_url;//Displaying Profile Image of user logged in?>"><br>
				<label class="tweet_user_name"><?php echo $tweet->user->name; //Displaying user name of user logged in ?>
				</label>
				<?php echo $tweet->text.'<br>'; //Displaying non-repeated Tweets texts with #CustServ hashtag?>
				<label class="rt_tweet_count_css">
				<?php echo 'Retweeted['.$tweet->retweet_count.'] ';?>
				</label>
				<strong><small><?php echo $tweet->created_at.'<br><br><br>';?></small></strong>
				</div>
				<?php
			} 
		} ?>
	</div>
	<div class="col-md-6 hashtag_tweets_css">
		<h3>Tweets with Hashtag #CustServ</h3><br>
		<a href="" id="load_more_hashtags" class="load_tweets_css">Load more such tweets</a><br><br><br>
		<div class="ht_loader display_none"><img src="./images/loader.gif">Loading Tweets</div>

		<div class="load_more_hashtags">
			
		</div>

		<?php foreach($hashtags->statuses as $key=>$tweet){ ?>
		<div class="tweets_css">
		<img src="<?php echo $tweet->user->profile_image_url; //Displaying Profile Image of user logged in ?> "><br>

		<label class="tweet_user_name"><?php echo $tweet->user->name; //Displaying user name of user logged in ?>
		</label>

		<?php echo $tweet->text.'<br>'; //Displaying non-repeated Tweets texts with #CustServ hashtag ?>
		<strong><small><?php echo $tweet->created_at.'<br><br>'; ?></small></strong>
		</div>
		<?php

		}?>
	</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

<script type="text/javascript" src="./js/load_more_tweets.js"></script>
</body>
</html>