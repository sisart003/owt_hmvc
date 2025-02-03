<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
        
        <div class="container">
        <br><br>
        <a href="<?php echo base_url('converters/export_csv'); ?>" class="btn btn-info">Export to CSV</a>
        <a href="<?php echo base_url('converters/export_pdf'); ?>" class="btn btn-info">Export to PDF</a>        
        <br><br>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Country</th>
                    <th scope="col">Number Range</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($mytable as $table): ?>
                <tr>
                    <td><?php echo $table->id; ?></td>
                    <td><?php echo $table->name; ?></td>
                    <td><?php echo $table->phone; ?></td>
                    <td><?php echo $table->email; ?></td>
                    <td><?php echo $table->country; ?></td>
                    <td><?php echo $table->numberrange; ?></td>
                    <!-- <td>
                        <a href="<?php #echo site_url('products/edit/'.$product->id); ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="<?php #echo site_url('products/delete/'.$product->id); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                    </td> -->
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>