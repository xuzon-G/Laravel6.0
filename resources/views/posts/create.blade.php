

@extends('layouts.posts')
@section('title','Create new Post')
@section('content')
 <form method="post" action="{{ route('post.store') }}" enctype="multipart/form-data">
        @csrf
         <div class="form-group row">
             <label for="inputTitle" class="col-sm-1-12 col-form-label">Title</label>
             <div class="col-sm-1-12">
             <input type="text" class="form-control" name="title" id="inputName" placeholder="" value="{{old('title')}}">
             </div>
         </div>
         <div class="form-group row">
                <label for="inputBody" class="col-sm-1-12 col-form-label">Posts</label>
                <div class="col-sm-1-12">
                <textarea name="content" id="" cols="30" rows="10" >{{old('content')}}</textarea>
                </div>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="check[]" id="" value="Computer" >
                Computer
              </label>
              <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="check[]" id="" value="General" >
                    General
                  </label>
                <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="check[]" id="" value="Science" >
                        Science
                </label>
                <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="check[]" id="" value="Arts" >
                        Arts
                      </label>
                      <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="check[]" id="" value="Business" >
                            Business
                          </label>     
            </div>
            <div class="form-group row">
                    <label for="inputBody" class="col-sm-1-12 col-form-label">Upload an image</label>
                    <div class="col-sm-1-12">
                  <input type="file" name="image" id="">
                    </div>
                </div>
                <div class="form-group row">
                  <label for="inputBody" class="col-sm-1-12 col-form-label">Start Date</label>
                  <div class="col-sm-1-12">
                <input type="date" name="start_date" id="">
                  </div>
              </div>
              <div class="form-group row">
                <label for="inputBody" class="col-sm-1-12 col-form-label">End Date</label>
                <div class="col-sm-1-12">
              <input type="date" name="end_date" id="">
                </div>
            </div>
                
                <label for="">Enter your website Address</label>
                <input type="url" name="website" id="">
    
<div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="tos" id="" >
    Accept TOS     
  </label>
</div>
         <div class="form-group row">
             <div class="offset-sm-2 col-sm-10">
                 <button type="submit" class="btn btn-primary">Add new Post</button>
             </div>
         </div>
     </form>
     @endsection
