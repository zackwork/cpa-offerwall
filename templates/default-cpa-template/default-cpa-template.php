<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body>
  <?php if (current_user_can('administrator') || current_user_can('editor')) { wp_admin_bar_render(); } ?>
  <h1><?php the_title(); ?></h1>
  <h6><?php the_content(); ?></h6>
  <div class="container content-i">
    <div class="row g-3" id="content">
    </div>
  </div>
</body>
</html>