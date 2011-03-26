<h1>Add Wish List Item</h1>

<form method="post" action="/forms/wishlist/add">
    <ul>
        <li>
            <?php echo form_label('Item', 'wish_item'); ?>
            <?php echo form_input('wish_item'); ?>
        </li>
        <li>
            <?php echo form_label('Description', 'wish_description'); ?>
            <?php echo form_textarea('wish_description'); ?>
        </li>
        <li><?php echo form_submit('wish_submit', 'Add'); ?></li>
    </ul>
</form>
