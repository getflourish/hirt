<?php snippet("header") ?>


<main class="main">
	<!-- Kirby Content -->
    <?php echo $page->text()->kirbytext() ?>

	<table>
		<thead>
			<tr>
				<th>Angebot</th>
				<th>Preis</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach(page('services')->children()->visible() as $service): ?>
			<tr>
			  <td><?php echo $service->title()->html() ?></td>
			  <td><?php echo $service->price() ?></td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>



</main>


<!-- Footer snippet -->

<?php snippet('footer') ?>