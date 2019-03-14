<div class="container-fluid title">
  <div class="container">
    <div class="col-md-4 wow fadeInLeft">
      <h2>Stay up to date</h2>
      <h1>News</h1>
    </div>
    <div class="col-md-8 wow fadeInRight">
      <div class="filter">
        <div class="dropdown show">
          <a class="btn btn-secondary dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Section <img src="<?php echo get_template_directory_uri() ?>/images/filter_dropicon_blue.svg" alt="Filter by type">
          </a>

          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="/news/">All</a></li>
            <?php wp_list_categories(array( 'title_li' => '' )); ?>
          </div>
        </div>
      </div><!-- /.col-md-4 -->

      <div class="filter">
        <div class="dropdown show">
          <a class="btn btn-secondary dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Year <img src="<?php echo get_template_directory_uri() ?>/images/filter_dropicon.svg" alt="Filter by type">
          </a>

          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="/news/">All Years</a></li>
            <?php wp_get_archives('type=yearly&format=html'); ?>
          </div>
        </div>

      </div><!-- /.col-md-4 -->
    </div>
  </div>
</div>
