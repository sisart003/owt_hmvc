<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <?php $this->load->view('signup/include/load-styles'); ?>  
</head>
<body>

<div class="container">
    <div class="col-sm-12">
        <div class="col-sm-8">
        <h2>User Registration</h2>
        <?php
            if($this->session->flashdata('success')){
                echo "<h3>".$this->session->flashdata('success')."<h3>";
            }
            if($this->session->flashdata('error')){
                echo "<h3>".$this->session->flashdata('error')."<h3>";
            }
        ?>
        <form action="<?php echo site_url('signup/user-submit'); ?>" method='post' name='frm_add_user' id='frm_add_user'>
            <div class="form-group">
                <label for="txtname">Name:</label>
                <input type="text" class="form-control" id="txtname" placeholder="Enter name" name="txtname" value="<?php echo set_value('txtname'); ?>">
                <span class="error"><?php echo form_error('txtname'); ?></span>
            </div>

            <div class="form-group">
                <label for="txtemail">Email:</label>
                <input type="email" class="form-control" id="txtemail" placeholder="Enter email" value="<?php echo set_value('txtemail') ?>" name="txtemail">
                <span class="error"><?php echo form_error('txtemail'); ?></span>
            </div>
    
            <div class="form-group">
                <label for="txtmobile">Mobile:</label>
                <input type="number" min="1" class="form-control" id="txtmobile" placeholder="Enter mobile" name="txtmobile" value="<?php echo set_value('txtmobile'); ?>">
                <span class="error"><?php echo form_error('txtmobile'); ?></span>
            </div>

            <div class="form-group">
                <label for="txtdesignation">Select Designation:</label>
                <?php $old_value = set_value('txtdesignation'); ?>
                <select name="txtdesignation" id="txtdesignation" class="form-control">
                    <option value="python" <?php echo $old_value == 'python' ? 'selected' : ''; ?>>Python</option>
                    <option value="php" <?php echo $old_value == 'php' ? 'selected' : ''; ?>>PHP</option>
                    <option value="java" <?php echo $old_value == 'java' ? 'selected' : ''; ?>>Java</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
        </form>
        </div>
    </div>
  
</div>
<?php $this->load->view('signup/include/load-scripts'); ?>
</body>
</html>