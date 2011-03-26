<h1>My Wish List</h1>

<p>[ <a href="/forms/wishlist/add">add new wish</a> ]</p>

<table>
<?php foreach ($wishes as $wish): ?>
    <tr>
        <td><a href="/forms/wishlist/edit/<?php echo $wish->id; ?>">edit</a></td>
        <td><a href="/forms/wishlist/delete/<?php echo $wish->id; ?>">delete</a></td>
        <td><?php echo $wish->item; ?></td>
        <td><?php echo $wish->description; ?></td>
    </tr>
<?php endforeach; ?>
</table>