<h1>My Favorites</h1>

<p>[ <a href="/forms/favorites/add">add new favorite</a> ]</p>

<table>
<?php foreach ($favorites as $favorite): ?>
    <tr>
        <td><a href="/forms/favorites/edit/<?php echo $favorite->id; ?>">edit</a></td>
        <td><a href="/forms/favorites/delete/<?php echo $favorite->id; ?>">delete</a></td>
        <td><?php echo $favorite->name; ?></td>
        <td><?php echo $favorite->reason; ?></td>
    </tr>
<?php endforeach; ?>
</table>