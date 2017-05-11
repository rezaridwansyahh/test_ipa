<form class="form-horizontal">
<legend><b>SEARCH</b></legend>
  <div class="form-group">
    <label class="col-sm-2 control-label">Title</label>
    <div class="col-sm-10">
      <input type="text" name="title" class="form-control" placeholder="Title">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label">Author</label>
    <div class="col-sm-10">
      <input type="text" name="author" class="form-control" placeholder="Author">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label">Abstract</label>
    <div class="col-sm-10">
      <input type="text" name="abstract" class="form-control" placeholder="Abstract">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label">ISBN</label>
    <div class="col-sm-10">
      <input type="text" name="isbn" class="form-control" placeholder="ISBN">
    </div>
  </div>


  {{-- <div class="form-group">
    <label class="col-sm-2 control-label">Year</label>
    <div class="col-sm-4">
      <input type="text" name="year_start" class="form-control" placeholder="Year">
    </div>
    <div class="col-sm-1">
      <p style="padding-top: 15px">to</p>
    </div>
    <div class="col-sm-4">
      <input type="text" name="year_end" class="form-control" placeholder="Year">
    </div>
  </div> --}}

  <div class="form-group">
    <label class="col-sm-2 control-label">Keyword</label>
    <div class="col-sm-10">
      <input type="text" name="keyword" class="form-control" placeholder="Keyword">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Cari</button>
    </div>
  </div>
</form>