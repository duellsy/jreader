/*****************************************************
 * jReader, a jQuery plugin (coupled with PHP) to create a simple RSS feed reader
 * by Chris Duell aka @duellsy of Subooa Studios
 * 
 * Version 0.3
 * Full source available at http://github.com/duellsy/jreader
 * Copyright © 2011 Subooa Studios http://subooa.com.au
 *
 * MIT License, https://github.com/duellsy/jreader/blob/master/LICENSE.md
 ****************************************************/
(function($){  
	$.fn.jreader = function(options) { 

		var defaults = {
			loading: 'Loading',
			titleElement: '#jReaderTitle',
			fullArticle: "read full article",
			articlesElement: '#jReaderArticles',
			articleWrapClass: 'news-item',
			grabberLocation: './'
		};
		var options = $.extend(defaults, options);

		var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

		$(this).click(function(event){

    		event.stopPropagation();

    		$feed_title = $(this).html();

    		$(options.titleElement).text(options.loading + ' ' + $feed_title + ' items');
    		$(options.articlesElement).html('');		
    		
    		url = $(this).attr('href');

    		$.get(options.grabberLocation + 'rss_grab.php?url=' + url, function(data){  
    			$(options.titleElement).text($feed_title);
    			
    	        $(data).find('item,entry').each(function(){  

    				var $article = $(this);  
    				var title = $article.find("title").text();
    				var description = $article.find("description").text();
					var date = $article.find("pubDate").text();
					
					if(date == ''){
						date = $article.find("updated").text();
					}
    				
    				var jsDate = new Date(date);

    				var niceDate = '<span class="article-date">' + jsDate.toDateString() + '</span><span class="article-time"> at ' + jsDate.toTimeString() + '</span>';
    				
    				if(description == null || description == ''){
    					description = $article.find("summary").text();
    				}
    				var link = $article.find("link").text();
    				if(link == ''){
    					link = $article.find("link").attr('href');
    				}
    				
    				var new_item = '<div class="' + options.articleWrapClass + '">';
    				new_item += '<h3 class="title">' + title + '</h3>';
    				new_item += '<strong>' + niceDate + '</strong>';  
    				new_item += '<p class="description">' + description;  
    				new_item += ' <a href=" ' + link + '" target="_blank">' + options.fullArticle + '</a></p>' ;  
    				new_item += '</div>';
    					  
    				$(options.articlesElement).append($(new_item));
    	  
    	        }); 
    	       
    	    });
    	    return false;
    	    
    	});			

	}	

})(jQuery);