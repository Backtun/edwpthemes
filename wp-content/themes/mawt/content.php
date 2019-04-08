<article class="Content">
    <h1>Creación de temas</h1>
    <?php if(have_posts()):while(have_posts()): the_post(); ?>
    <article>
        <!-- Obtiene el titulo de la entrada, se puede configurar -->
        <h2><?php the_title(); ?></h2>
        <?php the_title('<h3 class="TitlePost">', '</h3>') ?>
        <?php 
        $titulo = 'Titulo: '. get_the_title();
        echo $titulo;
         ?>
        <?php permalink_link(); ?>
        <?php the_post_thumbnail(); ?>
        <?php echo get_the_post_thumbnail_url(); ?>
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
        <h2>
            <a href="<?php permalink_link(); ?>"><?php the_title(); ?></a>
        </h2>
        <!-- Muestra el extracto o descripción de la entrada -->
        <?php the_excerpt(); ?>
        <!-- Categorias de entradas (si existen) -->
        <?php the_category(); ?>
        <p><?php the_category(', '); ?></p>
        <!-- Etiquetas de las entradas(si existen) -->
        <p><?php the_tags(); ?></p>
        <!-- Tiempo con distintos formatos -->
        <p><?php //the_date(); ?></p>
        <p><?php the_time(); ?></p>
        <p><?php the_time('d-M-Y'); ?></p>
        <!-- Obtiene el formato que el usuario eliga en el dashboard -->
        <p><?php the_time(get_option('date_format')); ?></p>
        <!-- Muestra el autor de la entrada -->
        <p><?php the_author(); ?></p>
        <!-- Muestra el link del autor de la entrada -->
        <?php the_author_posts_link(); ?>
        <!-- Contenido de la entrada -->
        <div class="the-content">
            <?php the_content(); ?>
        </div>
        <hr>
    </article>
    <?php endwhile; else: ?>
    <p>El contenido solicitado no existe</p>
    <?php endif; ?>
</article>

<section class="Pagination">
    <?php //previous_post_link(); ?>
    <?php //next_post_link(); ?>
    <?php echo paginate_links(); ?>
</section>