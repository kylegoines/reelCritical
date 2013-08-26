            <div class="sideBar">
                <div class="sidebarAbout">
                        <h3>hi im danielle</h3>
                </div>
                <p class="sidebarAboutInfo">
                   Reelcritical is my personal review blog. As the title suggests, I enjoy movies and puns. Here, I’ll publish my thoughts on both, but mostly movies. I’d love for you to do the same.
                </p>
                <div class="reviews">
                    <div class="sidebarTitleBlock">
                        <h3>Recent Reviews</h3>
                    </div>
                    <ul>
                        <?php
                            $recentPosts = new WP_Query();
                            $recentPosts->query('category_name=reviews');
                        ?>
                        <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>

                        <li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title() ?></a></li>
                        <?php endwhile; ?>
                    </ul>
                </div><!--reviews-->

                <div class="thoughts">
                    <div class="sidebarTitleBlock">
                        <h3>Recent Thoughts</h3>
                    </div>
                    <ul>


                        <?php
                            $recentPosts = new WP_Query();
                            $recentPosts->query('category_name=thoughts');
                        ?>
                        <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>

                        <li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title() ?></a></li>
                        <?php endwhile; ?>

                    </ul>
                </div><!--thoughts-->
                <div class="clearFix"></div>
            </div><!--sidebar-->