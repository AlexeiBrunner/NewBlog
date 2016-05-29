
@extends('welcome')


@section('title')
<title>Name post</title>
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
             
     	<div class="post">
       
         <div class="post-info">             
           
     	     <h2>
            <a class="post-title">blablabla</a>
           
           </h2>
         
          
                  
     	  <div class="post-meta">

         	<div class="post-meta-info">
            
            <span class="post-meta-icon icon-clock-1"></span>
            <span class="made-popuplar">
            
             
            <span class="p-time-label">
           
            1 min ago
            </span>
            </span>
                	    
           </div>                       
         </div>       
        </div>    
     	</div>
                <p><span style="font-weight: 400;">TLDR: The </span><i><span style="font-weight: 400;">wrong application of high-fidelity prototyping harms UX design more than you think</span></i><span style="font-weight: 400;">.</span></p>
<p><span style="font-weight: 400;">In this article, I’ll draw from my own experiences to explain the dangers of prototyping in high fidelity too early in the process. </span></p>
<h2><span style="font-weight: 400;">The Undeniable Growth of UX Design</span></h2>
<p><span style="font-weight: 400;">I feel extremely lucky to be part of the UX industry. I followed my passion in the early 2000s when the field was just taking off, and years later, the power of UX became universally understood.</span></p>
<p><span style="font-weight: 400;">Yes, we have many reasons to be optimistic about the future of UX. Ten years ago,  it was a hardly recognizable part of the digital product development. Today, UX plays a vital role in any product-oriented organization. We’ve earned our seat at the table.</span></p>
<p><span style="font-weight: 400;">The following Google Trends chart (keyword: UX) illustrates this amazing growth:</span></p>
<p><span style="font-weight: 400;">People do talk and ask about UX more and more. We definitely benefited from this growth at </span><a href="http://uxpin.com" target="_blank"><span style="font-weight: 400;">UXPin</span></a><span style="font-weight: 400;">. Six years ago, we were a company of three people selling paper prototyping notepads. Today, over 70 people help bring our design collaboration platform to customers in 150 countries. </span></p>
<p><span style="font-weight: 400;">Along the way, we’ve conducted plenty of user research. We’ve seen multiple Lean, Agile, and waterfall variations of the design process. We noticed that even the most Lean or Agile companies can still prematurely jump into high fidelity in hopes of shortening project timelines. </span></p>
<p><span style="font-weight: 400;">When that happens, the team might save some time in initial delivery, but they almost always pay it back multiple times over in fixes or teardowns. Do it long enough, and UX loses its real value in identifying the right idea through eliminating the wrong ones. </span></p>
<h2><span style="font-weight: 400;">The Danger of Prototyping the Wrong Way</span></h2>
  
      
 

   
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
   
   
      </div> 

      
   <div class="clr"></div>
   
 </div>
</div>

</div>
  <div class="clr"></div>
           </div> 
          </div>                
          <div class="clr"></div>
                <table border="0" width="100%" cellspacing="1" cellpadding="2" class="commTable"> 
<tr><td class="commTd2" colspan="2"></td></tr> 
<tr><td width="15%" class="commTd1" nowrap>Имя *:</td><td class="commTd2"><input class="commFl" type="text" name="name"  size="30" maxlength="60"></td></tr> 
<tr><td class="commTd1">Email:</td><td class="commTd2"><input class="commFl" type="text" name="email" size="30" maxlength="60"></td></tr> 
<tr><td class="commTd2" colspan="2"> 
  <table border="0" cellpadding="0" cellspacing="0" width="100%"> 
  <tr><td valign="top"> 
  <textarea class="commFl" style="margin-top:8px;height:100px;width:500px;background:#FFF;border-radius:7px;border:1px solid #00CCFF;font-size:12;text-shadow: 1px 1px 2px, gray 0 0 2em;color:#000"rows="8" name="message" id="message" cols="50"></textarea></td> 
<td class="commTd2" colspan="2" align="center"><input type="submit" class="commSbmFl" id="addcBut" name="submit" style="margin-top:8px;height:100px;width:65px;background:#00CCFF;border-radius:7px;border:1px solid #fff;font-size:10;text-shadow: 1px 1px 2px, gray 0 0 2em;color:#FFF" value="Добавить"> 
  </tr></td></tr></table> 
  <td class="commTd2"></td></tr></td></tr></table>  
        </div>
        <div class="clr"></div>

        
  <div class="clr"></div>          
</div>

<!-- <div class="md-overlay"></div>

<div class="popup-overlay"></div>
<div class="site-popup">
  <div class="site-popup-inner">
    <div class="site-popup-header"></div>
    <div class="site-popup-content">
          </div>
    
    <a href="#" class="site-popup-close icon-cancel-circled-outline"></a>
  </div>
  
  <div class="site-popup-back">
    
    <div class="site-popup-thanks">
       <div class="site-popup-ttext">
        Thank you!
       </div>
       
       <a href="#" class="site-popup-close-btn">Close</a>
       
     </div>
  </div>
  
</div>


<div id="submit-url-form-resident" style="display:none;">
  <form method="post" action="/submit-url" class="submit-post-form">
  <div class="site-popup-entry-text centered">
    <p>Please enter the url of your story below. We approve relevant news stories, editorials, case studies, quality demos and tutorials. Thank you.</p>
    </div>
  
  <div class="form-row">
    <input type="text" name="post_url" class="form-text" value="" required placeholder="Article URL" />
  </div>  
  
  <div class="form-row">
    <input type="text" name="post_title" class="form-text" value="" placeholder="Article Title" />
  </div>
   
  <div class="form-row-center">
        <button data-value="Submit" class="icon-right-small btn-icon-animation">Submit</button>
      </div>
  </form>
</div>

<div id="login-links-resident" style="display:none;">
  <div class="login-social-links">
    
    <div class="site-popup-entry-text centered"><p>Please login via Facebook and Twitter to upvote or downvote a story and to keep track of your favorites.</p></div>
    
    <a class="fb-sign-in-btn" href="/facebook-redirect-login" onclick="openFbLoginPopup(this); return false;">
      <span class="sign-in-icon icon-facebook"></span>
      <span class="label">Sign in using <strong>Facebook</strong></span>
    </a>
    <a class="tw-sign-in-btn" href="/twitter-login" onclick="openFbLoginPopup(this); return false;">
    <span class="sign-in-icon icon-twitter"></span>
    
    <span class="label">Sign in using <strong>Twitter</strong></span>
    </a>
  </div>
</div>    


<div id="report-form-resident" style="display:none;">
  <form method="post" action="/report-link" class="report-form">
      
      <div class="form-rep-text-notice centered"><p>If you found a bad link, such as a non functioning link or unsuitable content, please report it below.</p></div>
      <div class="form-report-text"></div>
      
      
      <input type="hidden" name="id" value="">
      
     <div class="form-row-left">
      
      <div class="form-row">
        <div class="form-row-label">Name</div>
        <input type="text" name="name" value="" class="form-text" required placeholder="" />
      </div>
    
     </div>   
     
     <div class="form-row-right">
      
      <div class="form-row">
        <div class="form-row-label">Email</div>
        <input type="email" name="email" value="" class="form-text" required placeholder="" />
      </div>
      
     </div>
     <div class="clr"></div> 
    
      <div class="form-row">
       <div class="form-row-label">Comment</div>
       <textarea name="msg" placeholder="" ></textarea>
      </div>
      
      <div class="form-row">
        <div id="g-report-recaptcha" ></div>
      </div>
      
      <div class="form-row-center">
        <input type="submit" value="Submit">
      </div>
  </form>
</div> -->
@endsection





