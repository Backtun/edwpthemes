<article class="Content">
    <h1>Creación de temas</h1>
    <?php if(have_posts()):while(have_posts()): the_post(); ?>
    <article>
        <h2><?php the_title(); ?></h2>
        <?php the_title('<h3 class="TitlePost">', '</h3>') ?>
        <?php 
        $titulo = 'Titulo: '. get_the_title();
        echo $titulo;
         ?>
        <?php permalink_link(); ?>
        <h2>
            <a href="<?php permalink_link(); ?>"><?php the_title(); ?></a>
        </h2>
        <?php the_excerpt(); ?>
        <?php the_category(); ?>
        <p><?php the_category(', '); ?></p>
        <p><?php the_category(', '); ?></p>
        <hr>
    </article>
    <?php endwhile; else: ?>
    <p>El contenido solicitado no existe</p>
    <?php endif; ?>
</article>