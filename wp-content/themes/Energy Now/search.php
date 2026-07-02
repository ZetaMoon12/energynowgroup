<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="container text-center">
            <h2 class="page-title">
                <?php printf( esc_html__( 'Resultados de: %s', 'text-domain' ), '<span>' . get_search_query() . '</span>' ); ?>
            </h2>
        </div>
        
        <div class="row row-result mx-4">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="col-md-4 mb-4">
                        <div class="card-result card h-100 border rounded shadow">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail( 'medium', ['class' => 'card-img-top', 'alt' => get_the_title()] ); ?>
                                </a>
                            <?php endif; ?>
                            <div class="card-body">
                                <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                <p class="card-text"><?php the_excerpt(); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <div class="col">
                    <p><?php esc_html_e( 'No se encontraron resultados.', 'text-domain' ); ?></p>
                </div>
            <?php endif; ?>
        </div>

        <!-- Agregar navegacion entre paginas -->
        <div class="pagination my-4">
            <?php the_posts_pagination( array(
                'prev_text' => __( '&laquo; Anterior', 'text-domain' ),
                'next_text' => __( 'Siguiente &raquo;', 'text-domain' ),
                'screen_reader_text' => ' ',
            ) ); ?>
        </div>

    </main>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
