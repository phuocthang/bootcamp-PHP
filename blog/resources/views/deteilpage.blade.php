@extends('layout.index')
@section('titles','blog')
@section('content')
   <!--================News Area =================-->
   <section class="news_area single-post-area p_100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
            @foreach ($blog as $key=> $blogs)
                {{ $blogs->titleBlog }}
            @endforeach
                 <div class="main_blog_details">
                        <img class="img-fluid" src="{{ asset('storage/images/') }}" alt="">
                        <a href="#"><h4> <br /> A Discount Toner</h4></a>
                        <div class="user_details">
                            <div class="float-left">
                                <a href="#">Lifestyle</a>
                                <a href="#">Gadget</a>
                            </div>
                            <div class="float-right">
                                <div class="media">
                                    <div class="media-body">
                                        <h5>Mark wiens</h5>
                                        <p>12 Dec, 2017 11:21 am</p>
                                    </div>
                                    <div class="d-flex">
                                        <img src="img/blog/user-img.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower</p>
                        <p>MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed MCSE training.</p>
                     <blockquote class="blockquote">
                         <p class="mb-0">MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training.</p>
                     </blockquote>
                     <p>MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower</p>
                     <p>MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower</p>
                       <div class="news_d_footer">
                           <a href="#"><i class="lnr lnr lnr-heart"></i>Lily and 4 people like this</a>
                           <a class="justify-content-center ml-auto" href="#"><i class="lnr lnr lnr-bubble"></i>06 Comments</a>
                           <div class="news_socail ml-auto">
                             <a href="#"><i class="fa fa-facebook"></i></a>
                             <a href="#"><i class="fa fa-twitter"></i></a>
                             <a href="#"><i class="fa fa-youtube-play"></i></a>
                             <a href="#"><i class="fa fa-pinterest"></i></a>
                             <a href="#"><i class="fa fa-rss"></i></a>
                         </div>
                       </div>
                    </div>
                          
                   <div class="navigation-area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                            <div class="thumb">
                                <a href="#"><img class="img-fluid" src="img/blog/prev.jpg" alt=""></a>
                            </div>
                            <div class="arrow">
                                <a href="#"><span class="lnr text-white lnr-arrow-left"></span></a>
                            </div>
                            <div class="detials">
                                <p>Prev Post</p>
                                <a href="#"><h4>Space The Final Frontier</h4></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                            <div class="detials">
                                <p>Next Post</p>
                                <a href="#"><h4>Telescopes 101</h4></a>
                            </div>
                            <div class="arrow">
                                <a href="#"><span class="lnr text-white lnr-arrow-right"></span></a>
                            </div>
                            <div class="thumb">
                                <a href="#"><img class="img-fluid" src="img/blog/next.jpg" alt=""></a>
                            </div>										
                        </div>									
                    </div>
                </div> 
                 
                  
                    <div class="comments-area">
                        <h4>05 Comments</h4>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c1.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Emilly Blunt</a></h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                       <a href="" class="btn-reply text-uppercase">reply</a> 
                                </div>
                            </div>
                        </div>	
                        <div class="comment-list left-padding">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c2.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Elsie Cunningham</a></h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                       <a href="" class="btn-reply text-uppercase">reply</a> 
                                </div>
                            </div>
                        </div>	
                        <div class="comment-list left-padding">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c3.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Annie Stephens</a></h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                       <a href="" class="btn-reply text-uppercase">reply</a> 
                                </div>
                            </div>
                        </div>	
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c4.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Maria Luna</a></h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                       <a href="" class="btn-reply text-uppercase">reply</a> 
                                </div>
                            </div>
                        </div>	
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c5.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Ina Hayes</a></h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                                <div class="reply-btn">
                                       <a href="" class="btn-reply text-uppercase">reply</a> 
                                </div>
                            </div>
                        </div>	                                             				
                    </div>
                    <div class="comment-form">
                        <h4>Leave a Reply</h4>
                        <form>
                            <div class="form-group form-inline">
                              <div class="form-group col-lg-6 col-md-6 name">
                                <input type="text" class="form-control" id="name" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
                              </div>
                              <div class="form-group col-lg-6 col-md-6 email">
                                <input type="email" class="form-control" id="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
                              </div>										
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                            </div>
                            <a href="#" class="primary-btn submit_btn">Post Comment</a>	
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="right_sidebar">
                        <aside class="r_widgets news_widgets">
                            <div class="main_title2">
                                <h2>Most Popular News</h2>
                            </div>
                            <div class="choice_item">
                                <img class="img-fluid" src="img/blog/popular-post/pp-1.jpg" alt="">
                                <div class="choice_text">
                                    <div class="date">
                                        <a class="gad_btn" href="#">Gadgets</a>
                                        <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                    </div>
                                    <a href="#"><h4>Dealing With Technical Support with 10 Useful Tips</h4></a>
                                    <p>It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving great heights</p>
                                </div>
                            </div>
                               <div class="news_slider owl-carousel">
                                   <div class="item">
                                       <div class="choice_item">
                                        <img src="img/blog/popular-post/pp-2.jpg" alt="">
                                        <div class="choice_text">
                                            <a href="#"><h4>Dealing With Technical Support 10 with Useful Tips around</h4></a>
                                            <div class="date">
                                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                            </div>
                                        </div>
                                    </div>
                                   </div>
                                   <div class="item">
                                       <div class="choice_item">
                                        <img src="img/blog/popular-post/pp-3.jpg" alt="">
                                        <div class="choice_text">
                                            <a href="#"><h4>An Ugly Myspace Profile Will Sure Ruin Your Reputation</h4></a>
                                            <div class="date">
                                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                            </div>
                                        </div>
                                    </div>
                                   </div>
                                   <div class="item">
                                       <div class="choice_item">
                                        <img src="img/blog/popular-post/pp-2.jpg" alt="">
                                        <div class="choice_text">
                                            <a href="#"><h4>Dealing With Technical Support 10 with Useful Tips around</h4></a>
                                            <div class="date">
                                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                            </div>
                                        </div>
                                    </div>
                                   </div>
                                   <div class="item">
                                       <div class="choice_item">
                                        <img src="img/blog/popular-post/pp-3.jpg" alt="">
                                        <div class="choice_text">
                                            <a href="#"><h4>An Ugly Myspace Profile Will Sure Ruin Your Reputation</h4></a>
                                            <div class="date">
                                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                            </div>
                                        </div>
                                    </div>
                                   </div>
                                   <div class="item">
                                       <div class="choice_item">
                                        <img src="img/blog/popular-post/pp-2.jpg" alt="">
                                        <div class="choice_text">
                                            <a href="#"><h4>Dealing With Technical Support 10 with Useful Tips around</h4></a>
                                            <div class="date">
                                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                            </div>
                                        </div>
                                    </div>
                                   </div>
                                   <div class="item">
                                       <div class="choice_item">
                                        <img src="img/blog/popular-post/pp-3.jpg" alt="">
                                        <div class="choice_text">
                                            <a href="#"><h4>An Ugly Myspace Profile Will Sure Ruin Your Reputation</h4></a>
                                            <div class="date">
                                                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                            </div>
                                        </div>
                                    </div>
                                   </div>
                               </div>
                        </aside>
                        <aside class="r_widgets add_widgets text-center">
                            <img class="img-fluid" src="img/blog/add-1.jpg" alt="">
                        </aside>
                        <aside class="r_widgets social_widgets">
                            <div class="main_title2">
                                <h2>Social Networks</h2>
                            </div>
                            <ul class="list">
                                <li><a href="#"><i class="fa fa-facebook"></i> 983Likes <span>Like our page</span></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i> 983Followers <span>Follow Us</span></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play"></i> 9835Subscriber <span>Subscribe</span></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i> 59874Subscriber <span>Subscribe</span></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i> 36958Followers <span>Follow Us</span></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i>RSS Subscribe <span>Subscribe</span></a></li>
                            </ul>
                        </aside>
                        <aside class="r_widgets newsleter_widgets">
                            <div class="main_title2">
                                <h2>Newsletter</h2>
                            </div>
                            <div class="nsl_inner">
                                <i class="fa fa-envelope"></i>
                                <h4>Subscribe to our Newsletter</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua adipisicing</p>
                                <div class="form-group d-flex flex-row">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter your email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
                                    </div>
                                    <a href="#" class="bbtns">Subcribe</a>
                                </div>	
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End News Area =================-->
@endsection