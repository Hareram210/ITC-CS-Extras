<h1>Edit Favorite</h1>

<form method="post" action="/forms/favorites/edit/<?php echo $favorite->id; ?>">
    <?php echo form_hidden('favorite_id', $favorite->id); ?>
    <ul>
        <li>
            <?php echo form_label('Name', 'favorite_name'); ?>
            <?php echo form_input('favorite_name', $favorite->name); ?>
        </li>
        <li>
            <?php echo form_label('Reason', 'favorite_reason'); ?>
            <?php echo form_textarea('favorite_reason', $favorite->reason); ?>
        </li>
        <li><?php echo form_submit('favorite_submit', 'Save'); ?></li>
    </ul>
</form>
