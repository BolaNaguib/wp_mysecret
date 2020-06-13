<!-- START section-musthave --><section class="section-musthave"><!-- START uk-container --><div class="uk-container"><!-- START uk-grid --><div class="uk-grid uk-grid-match"> <?php
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    global $product;
            ?> sssss <?php endwhile;
            endif; ?> </div><!-- END uk-grid --></div><!-- END uk-container --></section><!-- END section-musthave -->