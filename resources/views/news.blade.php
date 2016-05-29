@extends('welcome')

@section('title')
<title>All article</title>
@endsection

@section('content')
  
<div id="main-wrap">
  
        <div id="wrap" class="content-block">
          
          <div id="content-wrap" >
            <div id="content" >

  <div id="top-menu" >
                <a data-block="latest" href="/" class="active">Latest</a>
                <a data-block="today"  href="/popular"  >Most shared</a>
                <a href="/user-login" class="fav-login-link" >My favorites</a>
              
</div>     
<!-- <div id="top-filter-wrap">
   <div id="filter-drop">
  <span id="filter-drop-label"><span id="fidl-place">
      All
    
  </span><span class="icon-down-dir"></span></span> 
  <ul id="filter-drop-list">
     <li id="time-link-all" data-range="" data-block="latest" data-href="/" class="active">All</a>
     <li id="time-link-24" data-range="1" data-block="latest" data-href="/?range=1" >24 hours</a>
     <li data-range="7" data-block="latest" data-href="/?range=7" >7 days</a>
     <li data-range="30" data-block="latest" data-href="/?range=30" >30 days</a>  
  </ul>
  
</div> -->
</div>   
 
<div id="home-content">

<div id="rows-wrap">
 <div class="post-rows" id="post-rows" data-url="/" >
 
   <div class="clr"></div>
   
   <div id="post-rows-block-latest" class="posts-row-block active" data-current-page="1" data-next-url="/page/2">

  
       <div class="post-row">
            
               <div class="post-thumb">   
            <a 
                           href="article/comment"        
              <img src="http://scooshy.com/silver-mountain-water-creed/" class="post-thumb-img" alt="blablalbla" />
            </a>
                         
           
        </div>
                
         
     	<div class="post">
         
         
           
         
         <div class="post-info">
             
           
     	     <h2>
            <a class="post-title" 
            href="comment">blablabla</a>
           
           </h2>
         
          
                  
     	  <div class="post-meta">

         <div class="post-meta-info">


           <span class="post-meta-icon icon-comment-empty"></span> 
           <a class="comment-meta-lnk" title="Add/view comments" href="article/comment" >
                      Comments
           </a>


           <span class="meta-sep"></span> 
            
            <span class="post-meta-icon icon-clock-1"></span>
            <span class="made-popuplar">
            
             
            <span data-time="2016-05-28T04:04:00-07:00" class="p-time-label">
           
            1 min ago
            </span>
            </span>
                	    
           </div>                       
         </div>       
        </div>    
     	</div>

           <!--    <div class="post-fav-cell">
          <a title="Add to favorites" rel="nofollow" class="meta-large favorite-switch-lnk icon-star-circled fav-login-link" href="/user-login"></a>
        </div> -->
            
    </div>    
 

      <div id="pagination-wrap">
     
                
                
        <nav class="pagination">
            
                         <span  class="current"><span class="insp">1</span></span>

                                    <a class="next-pg-lnk" href="/page/2"><span class="insp">2</span></a>
                                    <a  href="/page/3"><span class="insp">3</span></a>
                                    <a  href="/page/4"><span class="insp">4</span></a>
                                    <!-- <a  href="/page/5"><span class="insp">5</span></a>
                
                                    <span class="sep-dots">&hellip;</span>
                
                                    <a  href="/page/5"><span class="insp">497</span></a> -->
                

          </nav>
      </div> 
    </div>
   
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