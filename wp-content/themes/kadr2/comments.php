<div class="comment-form">
  <div class="container">
    <?php $post_id = null;
    $comments_args = array(
      'submit_button' => '<input name="%1$s" type="submit" id="%2$s" class="%3$s " value="%4$s" /><span class="position-aware"></span>',
      'label_submit' => 'ОТПРАВИТЬ КОММЕНТАРИЙ',
      'title_reply_after' => '</h3><div class="underline-block"></div>',
      'comment_field' => '<p class="comment-form-comment">
            <label for="comment">' . _x('Comment', 'noun') . '</label>
		        <textarea id="comment" name="comment" cols="45" rows="8"  ></textarea>
	        </p>',
      'submit_field' => '<p class="form-submit btn-position-aware">%1$s %2$s</p>'
    );
    comment_form($comments_args); ?>
  </div>
</div>
<div class="comment-list">
  <div class="container">
    <h3>Предыдущие комментарии</h3>
    <div class="underline-block"></div>
    <?php
    if (have_comments()) {
      ?>

      <?php
      wp_list_comments('type=comment&callback=kadr_comment&style=div&avatar_size=0');
      ?>

    <?php } else { ?>
      <p>Нет комментариев к этой публикации</p>
    <?php } ?>

  </div>
</div>
<?php
function kadr_comment($comment, $args, $depth)
{
  if ('div' === $args['style']) {
    $tag = 'div';
    $add_below = 'comment';
  } else {
    $tag = 'li';
    $add_below = 'div-comment';
  }

  $classes = ' ' . comment_class(empty($args['has_children']) ? '' : 'parent', null, null, false);
  ?>

  <<?php echo $tag, $classes; ?> id="comment-
    <?php comment_ID() ?>">
    <?php if ('div' != $args['style']) { ?>
      <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
        <?php
    } ?>

      <div class="comment-author vcard">
        <?php
        if ($args['avatar_size'] != 0) {
          echo get_avatar($comment, $args['avatar_size']);
        }
        printf(
          __('<cite class="fn">%s</cite>'),
          get_comment_author_link()
        );
        ?>
      </div>

      <?php if ($comment->comment_approved == '0') { ?>
        <em class="comment-awaiting-moderation">
          <?php _e('Your comment is awaiting moderation.'); ?>
        </em><br />
      <?php } ?>

      <div class="comment-meta commentmetadata">
        <a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)); ?>">
          <?php
          printf(
            get_comment_date('d/m/y')
          ); ?>
        </a>

        <?php edit_comment_link(__('(Edit)'), '  ', ''); ?>
      </div>

      <div class="comment-text">
        <?php comment_text(); ?>
      </div>

      <div class="reply">
        <?php
        comment_reply_link(
          array_merge(
            $args,
            array(
              'add_below' => $add_below,
              'depth' => $depth,
              'max_depth' => $args['max_depth']
            )
          )
        ); ?>
      </div>

      <?php if ('div' != $args['style']) { ?>
      </div>
    <?php }
} ?>