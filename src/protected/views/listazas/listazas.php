<br/>
<h3>Raktáron lévő áruk</h3>

<?php if($result === NULL || empty($result)): ?>
<p>Nincs rögzítve rekord</p>
<?php else: ?>
    <table>
        <thead>
            <tr>
                <th>Terméknév</th>
                <th>Kategória</th>
                <th>Mennyiség</th>
		<th>Mennyiségi egység</th>
		<th>Ár</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($result as $row): ?>
            <tr>
                <td><?=$row['termeknev']?></td>
                <td><?=$row['kategoria']?></td>
                <td><?=$row['mennyiseg']?></td>
		<td><?=$row['mennyisegi_egyseg']?></td>
		<td><?=$row['ar']?></td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
<?php endif; ?>