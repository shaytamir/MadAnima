   @extends('cms.cms_master')
   @section('cms_content')
   <div class="row">
       <div class="col-md-12">
           <h1>Edit this content - </h1>
       </div>

   </div>
   <div class="row">
       <div class="col-md-6">
           <form action="{{ url('cms/categories/' . $category['id']) }}" method="POST" novalidate
               enctype="multipart/form-data">
               {{ csrf_field() }}
               {{method_field('PUT')}}
               <input type="hidden" name="item_id" value="{{$category['id']}}">


               <div class="mb-3">
                   <label for="title" class="form-label">Title</label>
                   <input type="text" name="title" placeholder="Title" value="{{ $category['title'] }}"
                       class="form-control origin_text" id="title">
               </div>
               <div class="mb-3">
                   <label for="url" class="form-label">Url</label>
                   <input type="text" name="url" placeholder="url" value="{{ $category['url'] }}"
                       class="form-control target_text" id="url">
               </div>
               <div class="mb-3 form-group">
                   <label for="article" class="form-label">Content:</label>
                   <textarea id="article" name="article" placeholder="Write your content here..."
                       class="form-control">{{$category['article'] }}</textarea>
               </div>

               <div class="mb-3">
                   <img width="80" src="{{asset('images/categories/' . $category['image'] ) }}" alt="">
                   <br><br>
                   <label for="image" class="form-label">Change Category Image</label>
                   <input type="file" name="image" id="image">
               </div>




               <a href="{{ url('cms/categories') }}" type="button" name="cencel" class="btn btn-secondary">Cencel</a>
               <button type="submit" name="submit" class="btn btn-primary">update</button>

           </form>
       </div>
   </div>


   @endsection