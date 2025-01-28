

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OWT - HMVC Tutorial</title>
    <?php $this->load->view('template/load-styles'); ?>
</head>
<body>
    
    <h2>This is header</h2>
    <p>Area to load Dynamic Content</p>
    <p><?php $this->load->view($page_content); ?></p>
    <h3>This is footer</h3>

    <?php $this->load->view('template/load-scripts'); ?>
</body>
</html>