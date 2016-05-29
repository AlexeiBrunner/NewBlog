@extends('welcome')


@section('title')
<title>New article</title>
@endsection

@section('content')

<div id="main-wrap">
  
        <div id="wrap" class="content-block">
          
          <div id="content-wrap" >
            <div id="content" ></div>   
 
<div id="home-content">

<div id="rows-wrap">
 <div class="post-rows" id="post-rows" >
 
   <div class="clr"></div>
   
   <div id="post-rows-block-latest" class="posts-row-block active" >
             
     	
              <h1>Создать запись</h1>
<hr>
@include('partials.errorList')
<form method="post" action="{{ route('article.store') }}">
{{ csrf_field() }}
Title <input type="text" name="title" value="{{ old('title') }}"><br>
Short description <input type="text" name="short_description" value="{{ old('short_description') }}"><br>
Content <textarea name="content">{{ old('content') }}</textarea>
<input type="submit">
</form>

   
   <div id="post-rows-block-today" class="posts-row-block" data-current-page="1" data-next-url="/popular?page=2">
        </div>
   
   
    <div id="post-rows-block-clicks" class="posts-row-block" data-current-page="1" data-next-url="/most-clicked?page=2">
         </div>
   
   
    <div id="post-rows-block-voted" class="posts-row-block" data-current-page="1" data-next-url="/most-voted?page=2">
         </div>
   
    
   
   <div id="post-rows-block-bookmarks" class="posts-row-block" data-current-page="1" data-next-url="/bookmarks?page=2">
        </div>
   
   <div id="post-rows-block-comments" class="posts-row-block" data-current-page="1" data-next-url="/comments?page=2">
        </div>
   
   
      
      
   <div class="clr"></div>
   
 </div>
</div>

</div>
  <div class="clr"></div>
           </div> 
          </div>                
          <div class="clr"></div>
                  
        </div>
        <div class="clr"></div>
        
  <div class="clr"></div>          
</div>

</div> 

@endsection





