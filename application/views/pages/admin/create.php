
<?php echo validation_errors(); ?>
<?php echo form_open(base_url(uri_string())); ?>
<div class="form-group">
    <label for="name">Name</label>
    <input type="input" name="name"  id="name" class="form-control"/>
</div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="input" name="email"  id="email" class="form-control"/>
</div>
<div class="form-group">
    <label for="password">password</label>
    <input type="input" name="password" id="password" class="form-control"/>
</div>

    <input type="submit" class="btn btn-primary" value="Create a new user" />

</form>