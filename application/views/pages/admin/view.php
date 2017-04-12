
<table class="table table-striped table-hover" > 
<thead>
<th>ID </th>
<th>Name </th>
<th>email </th>
<th>Role </th>
</thead>
<tbody>
<?php foreach ($users as $user): ?>
<?php echo "<tr>
<td> {$user['ID']} </td>
<td> {$user['Name']} </td>
<td> {$user['E-mail']}</td>
<td> {$user['Role']} </td>
</tr>" ?>
<?php endforeach; ?>
</tbody>
</table>