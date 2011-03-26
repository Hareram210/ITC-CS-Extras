<h1>Edit Wish List Item</h1>

<form method="post" action="/forms/wishlist/edit/<?php echo $wish->id; ?>">
    <?php echo form_hidden('wish_id', $wish->id); ?>
    <ul>
        <li>
            <?php echo form_label('Item', 'wish_item'); ?>
            <?php echo form_input('wish_item', $wish->item); ?>
        </li>
        <li>
            <?php echo form_label('Description', 'wish_description'); ?>
            <?php echo form_textarea('wish_description', $wish->description); ?>
        </li>
        <li><?php echo form_submit('wish_submit', 'Save'); ?></li>
    </ul>
</form>
