<section id="comments">
	<?php if (post_password_required()) : ?>
	<p><?php _e( 'Post is password protected. Enter the password to view any comments.', 'html5blank' ); ?></p>


	<?php return; endif; ?>

<?php if (have_comments()) : ?>

	<h2><?php comments_number(); ?></h2>

	<ul>
		<?php wp_list_comments('type=comment&callback=html5blankcomments'); // Custom callback in functions.php ?>
	</ul>

<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
	
	<p><?php _e( 'Comments are closed here.', 'html5blank' ); ?></p>
	
<?php endif; ?>

<?php $comments_args = array(
        // change the title of the reply section
        'title_reply'=>'<h2>Write a Comment</h2>',
        // remove "Text or HTML to be displayed after the set of comment fields"
        'comment_notes_after' => '',
        // redefine your own textarea (the comment body)
        'comment_field' =>  '<p><label for="comment">' . _x( 'Comment:', 'noun' ) .
    '</label></p><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true">' .
    '</textarea>',
);

comment_form($comments_args); ?>

</section>