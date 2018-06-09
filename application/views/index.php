
<!DOCTYPE HTML>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="author" content="Jelena Nikolić" />
        <meta name="description" content="<?php echo (isset($meta['description'])) ? $meta['description'] : ''; ?>" />
        <meta name="keywords" content="<?php echo (isset($meta['keywords'])) ? $meta['keywords'] : ''; ?>" />

        <link rel="stylesheet" type="text/css" href="<?php echo site_url()."/public/css/$page.css"; ?>" />
        <?php echo link_tag("css/$page.css"); ?>"
    </head>
    <body class="container-fluid">
        <?php $this->load->view("partials/header"); ?>
        <?php $this->load->view($page); ?>
        <?php if(isset($poruka)){ echo $poruka;} ?>
        <?php $this->load->view("partials/footer"); ?>
    </body>
</html>