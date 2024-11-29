<?php
get_header();
?>

<main>
	<div>this is a race</div>
	<?php
	while (have_posts()) :
		the_post();
		get_template_part('template-parts/content', 'page');
	endwhile;
	?>

	<div x-data="{ count: 0 }">
		<button x-on:click="count++">Increment</button>

		<span x-text="count"></span>
	</div>
</main>

<?php
get_sidebar();
get_footer();
