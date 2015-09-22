<?php
//wp-content\themes\ascent\content.php
?>
<div class="col-sm-12 col-md-9">
	<article id="post-{{post.ID}}" ng-repeat="post in posts" class="post-1 post type-post status-publish format-standard hentry category-uncategorized">
		<div class="row">
			<div class="post-meta-info col-sm-12 col-md-2">
			<div class="entry-meta" ng-if="post.type == 'post'">
			<time class="entry-time updated" itemprop="datePublished" datetime="{{post.date}}">{{post.date | date: 'MMM'}}<strong>{{post.date | date: 'd'}}</strong></time>
			<span class="comments_count clearfix entry-comments-link"><?php //comments_popup_link(__('0', 'ascent'), __('1', 'ascent'), __('%', 'ascent')); ?></span>
		    </div><!-- .entry-meta -->
		    </div>
		
			<div class="post-content-wrap col-sm-12 col-md-10">
				<header class="page-header">
					<h1 class="entry-title">
						<a href="{{post.link}}" rel="bookmark">{{post.title}}</a>
					</h1>
					<span class="entry-author">
					    Posted by
					    <span class="author vcard entry-author-link">
						<a href="http://localhost/wpnews/author/{{post.author.name}}/" title="Posts by {{post.author.name}}" rel="author">{{post.author.name}}</a>
					    </span>
					</span>
			    </header><!-- .entry-header -->

			    <?php
			    //TODO: is_search & is_archive
			    //display read-more
			    //else
			    ?>
			    <div class="entry-content">
		    		<figure ng-if="post.feature_image != null">
			    		<a class="swipebox" href="" title="{{post.title}}">
			    			{{post.feature_image}}
			    		</a>
		    		</figure>
			    	<div ng-bind-html="post.content | sanitize"></div>

			    	<a class="read-more" href="{{post.link}}">Read More →</a>
			    </div>

			    <footer class="footer-meta" ng-if="post.type == 'post'">
			    	<div class="cat-tag-meta-wrap">
			    		<span class="tags-meta" ng-if="post.terms.post_tag.length > 0">
			    			<i class="fa fa-tags"></i>
			    			<a ng-repeat="tag in post.terms.post_tag" href="{{tag.link}}">{{tag.name}} <span>,</span></a>
			    		</span>
			    	</div>
			    </footer>
			</div>
		</div>
	</article>
</div>

<div class="col-sm-12 col-md-3">
</div>