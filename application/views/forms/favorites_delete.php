<h1>Delete Favorite</h1>

<form method="post" action="/forms/favorites/delete">
    <?php echo form_hidden('favorite_id', $favorite->id); ?>
    <ul>
        <li>
            <?php echo form_label('Name', 'favorite_name'); ?>
            <?php echo $favorite->name; ?>
        </li>
        <li>
            <?php echo form_label('Reason', 'favorite_reason'); ?>
            <?php echo $favorite->reason; ?>
        </li>
        <li>
            <?php echo form_submit('favorite_submit', 'Delete'); ?>
            [ <a href="/forms/favorites">cancel</a> ]
        </li>
    </ul>
</form>
