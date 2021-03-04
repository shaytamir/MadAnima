   @extends('cms.cms_master')
   @section('cms_content')
   <div class="row">
       <div class="col-md-12">
           <h1>Add new category - </h1>
       </div>

   </div>
   <div class="row">
       <div class="col-md-6">
           <form action="{{ url('cms/categories') }}" method="POST" novalidate enctype="multipart/form-data">
               {{ csrf_field() }}


               <div class="mb-3">
                   <label for="title" class="form-label">Title</label>
                   <input type="text" name="title" placeholder="Title" value="{{ old('title') }}"
                       class="form-control origin_text" id="title">
               </div>
               <div class="mb-3">
                   <label for="url" class="form-label">Url</label>
                   <input type="text" name="url" placeholder="url" value="{{ old('url') }}"
                       class="form-control target_text" id="url">
               </div>
               <div class="mb-3 form-group">
                   <label for="article" class="form-label">Content:</label>
                   <textarea id="article" name="article" placeholder="Write your content here..."
                       class="form-control">{{ old('article') }}</textarea>
               </div>

               <div class="mb-3">
                   <label for="image" class="form-label">Category Image</label>
                   <input type="file" name="image" id="image">
               </div>




               <a href="{{ url('cms/categories') }}" type="button" name="cencel" class="btn btn-secondary">Cencel</a>
               <button type="submit" name="submit" class="btn btn-primary">Save</button>

           </form>
       </div>
   </div>

   @endsection
