$('document').ready(function(){ 

	$('body').on('click','#load_more_hashtags', function(e){
		e.preventDefault(); //stops page reloading with ajax calls
		$(".ht_loader").removeClass('display_none'); /*Show loader*/
		$.ajax({
			url : 'load_more_hashtags.php',
			success: function(data){ 
				$(".load_more_hashtags").prepend(data);	/*Prepending data*/
				$(".ht_loader").addClass('display_none'); /*Hide Loader*/
				//$('#load_more_hashtags').unbind('click');
			}
		});
	});	

	$('body').on('click','#load_more_rt_tweets', function(e){
		e.preventDefault(); //stops page reloading with ajax calls
		$(".rt_loader").removeClass('display_none'); /*Show loader*/
		$.ajax({
			url : 'load_more_rt_tweets.php',
			success: function(data){ 
				$(".load_more_rt_tweets").prepend(data); /*Prepending data*/	
				$(".rt_loader").addClass('display_none'); /*Hide Loader*/
				//$('#load_more_rt_tweets').unbind('click');
			}
		});
	});

});