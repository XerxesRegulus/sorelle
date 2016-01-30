<?php get_header(); ?>
<section class="index-blog-posts dark-bg">
  <article class="index-blog-card">
    <div class="blog-card-contents">
      <a href="#"><h2>Cayman Islands</h2></a>
      <p>12 December 2014</p>
      <img src="<?= get_template_directory_uri()?>/library/images/blog-post-sample-1.jpg?>" alt="" />
      <img src="<?= get_template_directory_uri()?>/library/images/blog-post-sample-2.jpg?>" alt="" />
      <a href="#" class="card-read-more">read more</a>
    </div>
  </article>
</section>
<section class="index-magazine-posts dark-bg">
  <div class="magazine-posts-header">
    <h2>Volume 03</h2>
    <p >contents</p>
  </div>
  <article class="index-magazine-card">
    <div class="index-magazine-card-contents">
      <div class="image-container">
        <img src="<?= get_template_directory_uri()?>/library/images/magazine-image.jpg?>" alt="" />
      </div>
      <div class="content-list">
        <p class="title">Cayman Islands | Carribean</p>
        <ul>
          <li><p><a href="#">Cayman Islands</a> | Carribean Cruise</p></li>
          <li><p><a href="#">Cayman Islands</a> | Carribean Cruise</p></li>
          <li><p><a href="#">Cayman Islands</a> | Carribean Cruise</p></li>
          <li><p><a href="#">Cayman Islands</a> | Carribean Cruise</p></li>
        </ul>
      </div>
    </div>
  </article>
  <article class="index-magazine-card">
    <div class="index-magazine-card-contents">
      <div class="image-container">
        <img src="<?= get_template_directory_uri()?>/library/images/magazine-image.jpg?>" alt="" />
      </div>
      <div class="content-list">
        <p class="title">Cayman Islands | Carribean</p>
        <ul>
          <li><p><a href="#">Cayman Islands</a> | Carribean Cruise</p></li>
          <li><p><a href="#">Cayman Islands</a> | Carribean Cruise</p></li>
          <li><p><a href="#">Cayman Islands</a> | Carribean Cruise</p></li>
          <li><p><a href="#">Cayman Islands</a> | Carribean Cruise</p></li>
        </ul>
      </div>
    </div>
  </article>
</section>
<section class="index-instagram-wall">
  <article>
      <div class="header">
        <p><i class="ion-social-instagram-outline"></i>THEFLAGPURSUIT</p>
      </div>
      <img src="<?= get_template_directory_uri()?>/library/images/theflagpursuit.jpg?>" alt="" class="wall-image" />
  </article>
</section>
<?php get_footer(); ?>
