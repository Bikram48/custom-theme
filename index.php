<h1>Custom Theme!</h1>
<?php
    
    if ( have_posts() ):
        while ( have_posts() ) : the_post();
            echo '<h2>'. the_title(). '</h2>';
            the_content();
        endwhile;
    else :
        echo '<p>There are no posts!</p>';
    endif;