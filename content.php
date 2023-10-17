<div id="content">
    <div class="container">
        <div class="contenuprincipal">
            <hr class="divider">
            <h1 id="titreh1" class="text-center"> Formation PUB020&nbsp;: WordPress, 2023</h1>
            <hr class="divider bas">

            <div class="contenu">
                <div id="chapitresformation" data-formation-id="36">
                    <div class="boutonshaut">
                        <div class="float-left"></div>
                        <div class="float-right">
                            <a id="developperreduire" href="#" class="btn btn-secondary" role="button" data-developper="Tout développer" data-reduire="Tout réduire">Tout développer</a>
                        </div>
                        <div class="push"></div>
                    </div>
                    <div id="dragchapitres">
                        <?php
                            if (have_posts()) :
                                $counter = 1;
                                while (have_posts()) : the_post();
                                    $counterCom = 1;
                        ?>
                        <div class="card border-bottom-0" id="dragchapitre_<?php echo $counter; ?>">
                            <div class="card-header" id="chapitre-<?php echo sanitize_title(get_the_title()); ?>">
                                <a data-toggle="collapse">
                                    <span class="titrealigneboutons"><?php echo $counter; ?>. <?php the_title(); ?></span>
                                </a>
                                <div class="float-right boutonsalignes"></div>
                            </div>
                            <div id="comments_<?php echo get_the_ID() ?>" class="collapse show" aria-expanded="false">
                                <div class="card-body aucune-marge-haut-bas listefichesajax">
                                    <ul class="list-group list-group-flush">
                                    <?php  foreach (get_comments(array( 'post_id' => get_the_ID())) as $comment): ?>    
                                        <li class="list-group-item">
                                            <a href="<?php the_permalink() ?>" href="wordpress.html#fichesduchapitre-<?php echo sanitize_title(get_the_title()); ?>"><?php echo $counter . "." . $counterCom . ". " . $comment->comment_content . " --> " . $comment->comment_author;?></a>
                                        </li>
                                        <?php $counterCom++; endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php
                            $counter++;
                                endwhile; 
                            endif;
                        ?>
                    </div>
                    <div class="boutonsbas"></div>
                </div>
            </div>        
            <div cla    ss="push"></div>
        </div>
    </div>
</div>  