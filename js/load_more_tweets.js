$('document').ready(function(){ 

	$('body').on('click','#load_more_hashtags', function(e){
		$(".ht_loader").removeClass('display_none');
		//e.preventDefault();
		$.ajax({
			url : 'load_more_hashtags.php',
			success: function(data){ 
				$(".load_more_hashtags").prepend(data);	
				$(".ht_loader").addClass('display_none');
				$('#load_more_hashtags').unbind('click');
			}
		});
	});	

	$('body').on('click','#load_more_rt_tweets', function(e){
		$(".rt_loader").removeClass('display_none');
		//e.preventDefault();
		$.ajax({
			url : 'load_more_rt_tweets.php',
			success: function(data){ 
				$(".load_more_rt_tweets").prepend(data);	
				$(".rt_loader").addClass('display_none');
				$('#load_more_rt_tweets').unbind('click');
			}
		});
	});

});