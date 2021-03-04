   @extends('cms.cms_master')
   @section('cms_content')
   <div class="row">
       <div class="col-md-12">
           <h1>Edit this content - </h1>
       </div>

   </div>
   <div class="row">
       <div class="col-md-6">
           <form action="{{ url('cms/content/' . $content['id']) }}" method="POST" novalidate>
               {{ csrf_field() }}
               {{method_field('PUT')}}
               <div class="mb-3 form-group">
                   <label for="menu-link" class="form-label">Menu Link:</label>
                   <select name="menu_id" id="menu-link" class="form-control">

                       @foreach($menu as $item)
                       <option @if($content['menu_id']==$item['id'] ) selected="selected" @endif
                           value="{{$item['id']}}">
                           {{$item['link']}}</option>
                       @endforeach
                   </select>

                   <!-- <span class="text-danger">{{$errors->first('title')}}</span> -->
               </div>
               <div class="mb-3 form-group">
                   <label for="title" class="form-label">Title:</label>
                   <input type="text" name="title" placeholder="Title" value="{{ $content['title'] }}"
                       class="form-control" id="title">
                   <!-- <span class="text-danger">{{$errors->first('title')}}</span> -->
               </div>
               <div class="mb-3 form-group">
                   <label for="article" class="form-label">Content:</label>
                   <textarea id="article" name="article" placeholder="Write your content here..."
                       class="form-control">{{ $content['article'] }}</textarea>
                   <!-- <span class="text-danger">{{$errors->first('article')}}</span> -->
               </div>




               <a href="{{ url('cms/content') }}" type="button" name="cencel" class="btn btn-secondary">Cencel</a>
               <button type="submit" name="submit" class="btn btn-primary">Update</button>

           </form>
       </div>
   </div>


   @endsection
