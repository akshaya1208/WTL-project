@include('admin.admin-header')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Blog</h4>
              <form class="forms-sample" method="POST" action="{{ route('update-blog') }}">
                @csrf
                <input type="hidden" name="id" value="{{ $data->blog_id }}">
                <div class="form-group">
                  <label for="exampleInputName1">Date</label>
                  <input type="date" class="form-control" id="exampleInputName1" name="date"  value="{{ $data->date }}">
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">Textarea</label>
                  <textarea class="form-control" id="exampleTextarea1" name="content" placeholder="Enter the new content" rows="4" value={{ $data->content }}></textarea>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-dark">Cancel</button>
              </form>
            </div>
          </div>
        </div>
@include('admin.admin-footer')