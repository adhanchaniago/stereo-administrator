<div class="mb-4">
  <h1 class="h3 mb-2 text-gray-800">Add New Division</h1>
  <a href="<?= base_url('/division') ?>"><i class="fas fa-arrow-left"></i> Back to List Page</a>
</div>

<div class="card shadow mb-4">
  <div class="card-body">
    <form method="post" action="<?= base_url('/division/create') ?>">
      <div class="form-group">
        <label for="name">Division Name</label>
        <input required type="text" class="form-control" autocomplete="off" id="name" name="name">
      </div>
      <button type="submit" class="mt-3 btn btn-success">Submit</button>
      <a href="<?= base_url('/division') ?>" class="mt-3 btn btn-danger">Cancel</a>
    </form>
  </div>
</div>
