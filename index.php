<?php
require_once('config.php');
include(ROOT_PATH. '/includes/head_section.php');
include(ROOT_PATH. '/includes/public_functions.php') ?>

<!-- Récupération de tous les articles de la base de données  -->
<?php $posts = getPublishedPosts(); ?>
<html>
<head>
    <title>TAÏGA</title>
    <link rel="icon" type="image/png" sizes="16x16"  href="static\images\favicons\favicon-16x16.png">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="theme-color" content="#ffffff">
	</head>

<body>

<!-- Contenu de la page -->

<article class="container">

<!-- Barre de navigation -->

<?php include(ROOT_PATH.'/includes/navbar.php') ?>

<!-- // Barre de navigation-->

<!-- bannière -->

<?php include(ROOT_PATH.'/includes/banner.php') ?>

<!-- // bannière -->

<!-- Contenu -->

<section class="content">

</br>

<h2 class="content-title">Nos produits </h2>

<hr>

<!-- Traitment de la liste de publications ... -->
<?php foreach ($posts as $post): ?>
					<section class="post" >
						<img src="<?php echo $post['image_produit']?>"  class="post_image" alt="">
						<?php if (isset($post['categorie']['nom_categorie'])): ?>
							<a href="<?php echo BASE_URL . '/filtered_posts.php?topic=' . $post['topic']['id'] ?>"
							class="btn category">
							<?php echo $post['categorie']['nom_categorie'] ?>
							</a>
						<?php endif ?>

					<a href="<?php echo BASE_URL . '/single_post.php?post-slug=' . $post['slug']; ?>">
					<section class="post_info">
						<h3><?php echo $post['title'] ?></h3>
						<section class="info">
							<span><?php echo $post['nom_produit'] ?></span> <!-- date("F j, Y ", strtotime($post["created_at"])); -->
							<span class="read_more">Vers l'article &#10145 </span>
						</section>
					</section>
					</a>
					</section>
				<?php endforeach ?>
			</section>
<!-- Plus de contenu ... -->

</section>

<!-- // Contenu -->

<!-- footer -->

<?php include(ROOT_PATH.'/includes/footer.php') ?>

<!-- // footer -->

</article>

<!-- // Contenu de la page -->

</body>

</html>