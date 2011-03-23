<h1>Add Favorite</h1>

<form method="post" action="/forms/favorites/add">
    <ul>
        <li>
            <?php echo form_label('Name', 'favorite_name'); ?>
            <?php echo form_input('favorite_name'); ?>
        </li>
        <li>
            <?php echo form_label('Reason', 'favorite_reason'); ?>
            <?php echo form_textarea('favorite_reason'); ?>
        </li>
        <li><?php echo form_submit('favorite_submit', 'Add'); ?></li>
    </ul>
</form>
