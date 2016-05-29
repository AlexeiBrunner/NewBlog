
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Blog</title>
        <link rel="stylesheet" type="text/css" href="http://www.webdesignernews.com/css/main3.css?v=10.css" media="screen, print" />
        <link rel="stylesheet" type="text/css" href="/css/fancy/jquery.fancybox.css" media="screen, print" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700' rel='stylesheet' type='text/css'>

        

  </head>
    <body  class=" "  >
    
      <div id="gwrap">

        <div id="categories-menu">
          <nav id="categories-menu-content">
              <a class="cat-menu-lnk active" href="/" >All</a>
                <a class="cat-menu-lnk" href="/category/apps" >blabla</a>
           </nav>
        </div>


       <nav id="top-nav-links">
                <a href="/auth" id="login-url-lnk">Login</a>                                      
      </nav>


<header id="wdn-brief-wrap">
  <div id="wdn-brief">
    <div id="wdn-brief-content">
    
        
        <h1 id="logo-h1">
        <a href="/"  id="wdn-brief-lnk" title="MyBlog">
         <!--          <img src="/css/red/logored.png" alt="MyBlog" width="350" /> -->
    </a>
    
        </h1>
        
    
    
    <nav id="top-nav">
     
     <form id="search-form" method="get" action="/">
                 <div id="search-box-wrap">
                   <input  value="" type="text" name="s" id="search-field" placeholder="Search" />
                 </div>
                 <!--<input type="submit" value="Search" id="search-button" />-->
                 <a href="#" id="un-search-icon" class="icon-search"></a>
               </form>
     
               
               
     </nav>
     <div class="clr"></div>
     </div>            
  </div>
</header>  



 @yield("content")



<div id="footer-section">
         
         
         
          
          <div id="footer-wrap" >
            <footer id="footer" class="content-block">
              <div id="footer-left">
              <div class="clr"></div>
            </footer>
          </div>
        </div> 

   </body>
</html>
