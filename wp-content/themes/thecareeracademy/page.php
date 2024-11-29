<?php
get_header();
?>

<main>
	<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus sunt maxime nulla voluptatum at quia! Voluptate, hic. Perferendis, voluptatem neque! Optio voluptatum ut eos debitis, veniam neque consequuntur culpa omnis nam sed, autem fuga natus vero fugiat sequi beatae pariatur tempora qui nobis dicta ab necessitatibus. Odit earum iure quod necessitatibus, quo blanditiis esse mollitia eaque tempora provident. Ad fuga aperiam officia qui reprehenderit quae, cupiditate inventore quis doloribus? Ab vitae laboriosam quis accusantium? Culpa, voluptatem sed maxime doloremque voluptas quaerat iste voluptate impedit error eos enim nam et quam. Soluta laboriosam ipsa repellat doloribus rerum distinctio maiores illo unde?</div>
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
