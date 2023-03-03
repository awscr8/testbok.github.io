<?php
/*
| -------------------------------------------------------------------------------
| Author            : G-silvers
| Template Name     : G-silvers V-red
| -------------------------------------------------------------------------------
*/
if ( empty( $_GET[page] ) ) { 
        $pathinfo = pathinfo ($uri);
        $dirname = str_replace('/'.config('category_url').'/','',$pathinfo['dirname']);
        $filename = $pathinfo['filename'];
        $page = 1;
}else{ 
        $dirname = $_GET[terms];
        $filename = $_GET[id];
        $page = $_GET[page];
        $hal = ' Pages ' .$page;
        $title_after = $hal;
        $description_after = $hal . ' on ' . site_path();
}

$hack_title = ucwords($filename) . ' Movies';
include('header.php');
?>


    <div class="jumbo-hero" style="background-image:url(<?php style_theme();?>/images/bg.jpg)">
        <div class="container">
            <div class="jumbo-hero__inner">
                <h1 class="header">Category for "<?php echo $filename;?>"<?php echo $hal;?></h1>
            </div>
        </div>
    </div>

<section class="mopie-fade">
        <div class="container">
            <div class="row">


			<?php 
        $Movies = unserialize( ocim_data_genre('home_genre_'.$dirname.'_',$dirname,$page) );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 18) as $row ) {
                ?>


         <article id="<?php echo $row['id'];?>" class="item col-6 col-md-2">
            <div class="thumb mb-4">
               <a href="<?php echo seo_movie($row['id'],$row['title']);?>" rel="bookmark" title="<?php echo $row['title'];?> (<?php echo date('Y', strtotime( $row['release_date'] ) );?>)">
                  <div class="_img_holder">
                     <img class="img-fluid rounded" src="<?php echo $row['poster_path'];?>?resize=300,450" alt="Image <?php echo $row['title'];?>" title="Image <?php echo $row['title'];?> (<?php echo date('Y', strtotime( $row['release_date'] ) );?>)">
                     <div class="_overlay_link">
                        <button class="play-button play-button--small" type="button"></button>
                        <div class="rate"><i class="fa fa-star text-warning"></i> <span class="small text-white">6.3/10</span></div>
                     </div>
                  </div>
               </a>
               <header class="entry-header">
                  <h2 class="entry-title">
                     <a href="<?php echo seo_movie($row['id'],$row['title']);?>" class="_title" rel="bookmark" title="<?php echo $row['title'];?> (<?php echo date('Y', strtotime( $row['release_date'] ) );?>)"><?php echo $row['title'];?> (<?php echo date('Y', strtotime( $row['release_date'] ) );?>)</a>
                  </h2>
               </header>
            </div>
         </article>



<?php 
                }
        endif; 
        ?>
						
				</div>






				<footer class="page-footer">
				    <nav class="text-center">
					<ul class="pagination pagination-sm">
						<?php 
                if ($Movies['total_results'][0] > 19) :
                        require_once( DOCUMENT_ROOT. '/app/class/CSSPagination.class.php');

                        if ($Movies['total_results'][0] > 1000) :
                                $totalResults = 1000;
                        else:
                                $totalResults = $Movies['total_results'][0];
                        endif;
                        $limit  = 20; 
                        $link   = '/?action=category&terms='.$dirname.'&id='.$filename;
                        $pagination = new CSSPagination($totalResults, $limit, $link );
                        $pagination->setPage($_GET[page]);
                       echo $pagination->showPage();
                endif;
                ?>
					</ul>
					</nav>
				</footer>





				
			</section>
	</div>
	</div>
<?php include('footer.php'); ?>