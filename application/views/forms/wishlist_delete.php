<h1>Delete Wish List Item</h1>

<form method="post" action="/forms/wishlist/delete">
    <?php echo form_hidden('wish_id', $wish->id); ?>
    <ul>
        <li>
            <?php echo form_label('Item', 'wish_item'); ?>
            <?php echo $wish->item; ?>
        </li>
        <li>
            <?php echo form_label('Description', 'wish_description'); ?>
            <?php echo $wish->description; ?>
        </li>
        <li>
            <?php echo form_submit('wish_submit', 'Delete'); ?>
            [ <a href="/forms/wishlist">cancel</a> ]
        </li>
    </ul>
</form>
