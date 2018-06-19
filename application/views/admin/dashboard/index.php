<div class="row clearfix">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="body bg-dark profile-header">
                <div class="row">
                    <div class="col-lg-10 col-md-12">
                        <img src="assets/images/profile_av.jpg" class="user_pic rounded img-raised" alt="User">
                        <div class="detail">
                            <div class="u_name">
                                <h4>Welcome <?= $this->session->userdata['name']; ?></h4>
                                <span><?= $this->session->userdata['role']; ?></span>
                            </div>
                            <div id="m_area_chart" style="position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="250" version="1.1" width="254.188" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.2.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="none" stroke="none" d="M25,225H229.188" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="none" d="M25,175H229.188" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="none" d="M25,125H229.188" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="none" d="M25,75H229.188" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="none" d="M25,25H229.188" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="#79c477" stroke="none" d="M25,195C33.50007071167883,180.83333333333334,50.5002121350365,141.24601003191975,59.00028284671533,138.33333333333334C67.52364142335766,135.4126766985864,84.57035857664233,167.32740538075697,93.09371715328467,171.66666666666669C101.5937878649635,175.99407204742363,118.59392928832116,181.33333333333334,127.094,173C135.59407071167882,164.66666666666666,152.59421213503649,107.25,161.09428284671532,105C169.59435355839415,102.75,186.5944949817518,157.49658002735978,195.09456569343064,155C203.617924270073,152.49658002735978,220.66464142335764,102.5,229.188,85L229.188,225L25,225Z" fill-opacity="0.03" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 0.03;"></path><path fill="none" stroke="#50b94d" d="M25,195C33.50007071167883,180.83333333333334,50.5002121350365,141.24601003191975,59.00028284671533,138.33333333333334C67.52364142335766,135.4126766985864,84.57035857664233,167.32740538075697,93.09371715328467,171.66666666666669C101.5937878649635,175.99407204742363,118.59392928832116,181.33333333333334,127.094,173C135.59407071167882,164.66666666666666,152.59421213503649,107.25,161.09428284671532,105C169.59435355839415,102.75,186.5944949817518,157.49658002735978,195.09456569343064,155C203.617924270073,152.49658002735978,220.66464142335764,102.5,229.188,85" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="25" cy="195" r="2" fill="#50b94d" stroke="#50b94d" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="59.00028284671533" cy="138.33333333333334" r="2" fill="#50b94d" stroke="#50b94d" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="93.09371715328467" cy="171.66666666666669" r="2" fill="#50b94d" stroke="#50b94d" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="127.094" cy="173" r="2" fill="#50b94d" stroke="#50b94d" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="161.09428284671532" cy="105" r="2" fill="#50b94d" stroke="#50b94d" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="195.09456569343064" cy="155" r="2" fill="#50b94d" stroke="#50b94d" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="229.188" cy="85" r="2" fill="#50b94d" stroke="#50b94d" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><path fill="#f49373" stroke="none" d="M25,175C33.50007071167883,169.16666666666669,50.5002121350365,150.4183766529868,59.00028284671533,151.66666666666669C67.52364142335766,152.9183766529868,84.57035857664233,192.92749658002737,93.09371715328467,185C101.5937878649635,177.09416324669402,118.59392928832116,93.66666666666667,127.094,88.33333333333334C135.59407071167882,83.00000000000001,152.59421213503649,133.58333333333334,161.09428284671532,142.33333333333334C169.59435355839415,151.08333333333334,186.5944949817518,162.9936160510716,195.09456569343064,158.33333333333334C203.617924270073,153.66028271773826,220.66464142335764,118.33333333333334,229.188,105L229.188,225L25,225Z" fill-opacity="0.03" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 0.03;"></path><path fill="none" stroke="#f96332" d="M25,175C33.50007071167883,169.16666666666669,50.5002121350365,150.4183766529868,59.00028284671533,151.66666666666669C67.52364142335766,152.9183766529868,84.57035857664233,192.92749658002737,93.09371715328467,185C101.5937878649635,177.09416324669402,118.59392928832116,93.66666666666667,127.094,88.33333333333334C135.59407071167882,83.00000000000001,152.59421213503649,133.58333333333334,161.09428284671532,142.33333333333334C169.59435355839415,151.08333333333334,186.5944949817518,162.9936160510716,195.09456569343064,158.33333333333334C203.617924270073,153.66028271773826,220.66464142335764,118.33333333333334,229.188,105" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="25" cy="175" r="2" fill="#f96332" stroke="#f96332" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="59.00028284671533" cy="151.66666666666669" r="2" fill="#f96332" stroke="#f96332" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="93.09371715328467" cy="185" r="2" fill="#f96332" stroke="#f96332" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="127.094" cy="88.33333333333334" r="2" fill="#f96332" stroke="#f96332" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="161.09428284671532" cy="142.33333333333334" r="2" fill="#f96332" stroke="#f96332" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="195.09456569343064" cy="158.33333333333334" r="2" fill="#f96332" stroke="#f96332" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="229.188" cy="105" r="2" fill="#f96332" stroke="#f96332" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="left: 40.8437px; top: 82px; display: none;"><div class="morris-hover-row-label">2013</div><div class="morris-hover-point" style="color: #50b94d">
                                        Earnings:
                                        80
                                    </div><div class="morris-hover-point" style="color: #f96332">
                                        Sales:
                                        60
                                    </div></div></div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 user_earnings">
                        <h6>Total Earnings</h6>
                        <h4>$<small class="number count-to" data-from="0" data-to="2124" data-speed="1500" data-fresh-interval="1000">2124</small></h4>
                        <div style="display:inline;width:80px;height:80px;"><canvas width="80" height="80"></canvas><input type="text" class="knob" value="39" data-width="80" data-height="80" data-thickness="0.1" data-bgcolor="#485058" data-fgcolor="#f97c53" style="width: 44px; height: 26px; position: absolute; vertical-align: middle; margin-top: 26px; margin-left: -62px; border: 0px; background: none; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; font-size: 16px; line-height: normal; font-family: Arial; text-align: center; color: rgb(249, 124, 83); padding: 0px; -webkit-appearance: none;"></div>
                        <span>Average 39% <i class="zmdi zmdi-caret-up text-success"></i></span>
                    </div>
                </div>
            </div>
            <ul class="nav nav-tabs profile_tab">
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#overview">Overview</a></li>
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#schedule">Schedule</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#usersettings">Settings</a></li>
            </ul>
        </div>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane" id="overview">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="card text-center">
                            <div class="body">
                                <i class="zmdi zmdi-thumb-up zmdi-hc-2x"></i>
                                <h5 class="m-b-0 number count-to" data-from="0" data-to="1203" data-speed="1000" data-fresh-interval="700">1203</h5>
                                <small>Likes</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="card text-center">
                            <div class="body">
                                <i class="zmdi zmdi-comment-text zmdi-hc-2x"></i>
                                <h5 class="m-b-0 number count-to" data-from="0" data-to="324" data-speed="1000" data-fresh-interval="700">324</h5>
                                <small>Comments</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="card text-center">
                            <div class="body">
                                <i class="zmdi zmdi-eye zmdi-hc-2x"></i>
                                <h5 class="m-b-0 number count-to" data-from="0" data-to="1980" data-speed="1000" data-fresh-interval="700">1980</h5>
                                <small>Views</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="card text-center">
                            <div class="body">
                                <i class="zmdi zmdi-attachment zmdi-hc-2x"></i>
                                <h5 class="m-b-0 number count-to" data-from="0" data-to="52" data-speed="1000" data-fresh-interval="700">52</h5>
                                <small>Attachment</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Info</strong></h2>
                                <ul class="header-dropdown">
                                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else</a></li>
                                            <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <small class="text-muted">Address: </small>
                                <p>795 Folsom Ave, Suite 600 San Francisco, 94107</p>
                                <div>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1923731.7533500232!2d-120.39098936853455!3d37.63767091877441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1522391841133" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                                </div>
                                <hr>
                                <small class="text-muted">Email address: </small>
                                <p>michael@gmail.com</p>
                                <hr>
                                <small class="text-muted">Phone: </small>
                                <p>+ 202-555-9191</p>
                                <hr>
                                <small class="text-muted">Mobile: </small>
                                <p>+ 202-555-2828</p>
                                <hr>
                                <small class="text-muted">Birth Date: </small>
                                <p class="m-b-0">October 22th, 1990</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h2><strong>Who</strong> to follow</h2>
                                <ul class="header-dropdown">
                                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else</a></li>
                                            <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <ul class="follow_us list-unstyled m-b-0">
                                    <li class="online">
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object " src="assets/images/xs/avatar4.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Chris Fox</span>
                                                    <span class="message">Designer, Blogger</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="online">
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Joge Lucky</span>
                                                    <span class="message">Java Developer</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="offline">
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Isabella</span>
                                                    <span class="message">CEO, Thememakker</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="offline">
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object " src="assets/images/xs/avatar1.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Folisise Chosielie</span>
                                                    <span class="message">Art director, Movie Cut</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="online">
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object " src="assets/images/xs/avatar3.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Alexander</span>
                                                    <span class="message">Writter, Mag Editor</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Add</strong> Post</h2>
                                <ul class="header-dropdown">
                                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="blog-post.html">New Post</a></li>
                                            <li><a href="blog-details.html">Post Detail</a></li>
                                            <li><a href="blog-dashboard.html">Dashboard</a></li>
                                            <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body m-b-10">
                                <div class="form-group">
                                    <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                </div>
                                <div class="post-toolbar-b">
                                    <button class="btn btn-warning btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-attachment"></i></button>
                                    <button class="btn btn-warning btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-camera"></i></button>
                                    <button class="btn btn-primary btn-round">Post</button>
                                </div>
                            </div>
                            <div class="body">
                                <div class="post-img">
                                    <img src="assets/images/image1.jpg" class="img-fluid" alt="">
                                </div>
                                <h5 class="m-t-20 m-b-0 post_title">It is a long established fact that a be distracted</h5>
                                <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text</p>
                                <div class="form-group m-b-0">
                                    <button class="btn btn-info btn-round">Like 5</button>
                                    <button class="btn btn-primary btn-simple btn-round">Reply</button>
                                    <span class="date m-l-20"><i class="zmdi zmdi-alarm"></i> 7min ago</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div role="tabpanel" class="tab-pane page-calendar active" id="schedule">
                <div class="row">
                    <div class="col-md-12 col-lg-4">
                        <div class="card">
                            <div class="body m-b-20">
                                <div class="event-name b-lightred row">
                                    <div class="col-3 text-center">
                                        <h4>09<span>Dec</span><span>2017</span></h4>
                                    </div>
                                    <div class="col-9">
                                        <h6>Repeating Event</h6>
                                        <p>It is a long established fact that a reader will be distracted</p>
                                        <address><i class="zmdi zmdi-pin"></i> 123 6th St. Melbourne, FL 32904</address>
                                    </div>
                                </div>
                                <hr>
                                <div class="event-name b-greensea row">
                                    <div class="col-3 text-center">
                                        <h4>16<span>Dec</span><span>2017</span></h4>
                                    </div>
                                    <div class="col-9">
                                        <h6>Repeating Event</h6>
                                        <p>It is a long established fact that a reader will be distracted</p>
                                        <address><i class="zmdi zmdi-pin"></i> 123 6th St. Melbourne, FL 32904</address>
                                    </div>
                                </div>
                            </div>
                            <div class="body m-b-20 l-blue">
                                <div class="event-name row">
                                    <div class="col-3 text-center">
                                        <h4>28<span>Dec</span><span>2017</span></h4>
                                    </div>
                                    <div class="col-9">
                                        <h6>Google</h6>
                                        <p>It is a long established fact that a reader will be distracted</p>
                                        <address><i class="zmdi zmdi-pin"></i> 123 6th St. Melbourne, FL 32904</address>
                                    </div>
                                </div>
                            </div>
                            <div class="body m-b-5 l-green">
                                <div class="event-name row">
                                    <div class="col-3 text-center">
                                        <h4>13<span>Dec</span><span>2017</span></h4>
                                    </div>
                                    <div class="col-9">
                                        <h6>Birthday</h6>
                                        <p>It is a long established fact that a reader will be distracted</p>
                                        <address><i class="zmdi zmdi-pin"></i> 123 6th St. Melbourne, FL 32904</address>
                                    </div>
                                </div>
                            </div>
                            <div class="body l-green">
                                <div class="event-name row">
                                    <div class="col-3 text-center">
                                        <h4>11<span>Dec</span><span>2017</span></h4>
                                    </div>
                                    <div class="col-9">
                                        <h6>Conference</h6>
                                        <p>It is a long established fact that a reader will be distracted</p>
                                        <address><i class="zmdi zmdi-pin"></i> 123 6th St. Melbourne, FL 32904</address>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-round btn-primary m-t-15" data-toggle="modal" data-target="#addevent">Add Events</button>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-8">
                        <div class="card">
                            <div class="body">
                                <div id="calendar" class="fc fc-unthemed fc-ltr"><div class="fc-toolbar fc-header-toolbar"><div class="fc-left"><div class="fc-button-group"><button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left" aria-label="prev"><span class="fc-icon fc-icon-left-single-arrow"></span></button><button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right" aria-label="next"><span class="fc-icon fc-icon-right-single-arrow"></span></button></div><button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right">today</button></div><div class="fc-right"><div class="fc-button-group"><button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">month</button><button type="button" class="fc-agendaWeek-button fc-button fc-state-default">week</button><button type="button" class="fc-agendaDay-button fc-button fc-state-default">day</button><button type="button" class="fc-listWeek-button fc-button fc-state-default fc-corner-right">list</button></div></div><div class="fc-center"><h2>March 2018</h2></div><div class="fc-clear"></div></div><div class="fc-view-container" style=""><div class="fc-view fc-month-view fc-basic-view" style=""><table class=""><thead class="fc-head"><tr><td class="fc-head-container fc-widget-header"><div class="fc-row fc-widget-header" style="border-right-width: 1px; margin-right: 14px;"><table class=""><thead><tr><th class="fc-day-header fc-widget-header fc-sun"><span>Sun</span></th><th class="fc-day-header fc-widget-header fc-mon"><span>Mon</span></th><th class="fc-day-header fc-widget-header fc-tue"><span>Tue</span></th><th class="fc-day-header fc-widget-header fc-wed"><span>Wed</span></th><th class="fc-day-header fc-widget-header fc-thu"><span>Thu</span></th><th class="fc-day-header fc-widget-header fc-fri"><span>Fri</span></th><th class="fc-day-header fc-widget-header fc-sat"><span>Sat</span></th></tr></thead></table></div></td></tr></thead><tbody class="fc-body"><tr><td class="fc-widget-content"><div class="fc-scroller fc-day-grid-container" style="overflow-x: hidden; overflow-y: scroll; height: 320px;"><div class="fc-day-grid fc-unselectable"><div class="fc-row fc-week fc-widget-content fc-rigid" style=""><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2018-02-25"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2018-02-26"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2018-02-27"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-past" data-date="2018-02-28"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2018-03-01"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2018-03-02"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2018-03-03"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-past" data-date="2018-02-25"><span class="fc-day-number">25</span></td><td class="fc-day-top fc-mon fc-other-month fc-past" data-date="2018-02-26"><span class="fc-day-number">26</span></td><td class="fc-day-top fc-tue fc-other-month fc-past" data-date="2018-02-27"><span class="fc-day-number">27</span></td><td class="fc-day-top fc-wed fc-other-month fc-past" data-date="2018-02-28"><span class="fc-day-number">28</span></td><td class="fc-day-top fc-thu fc-past" data-date="2018-03-01"><span class="fc-day-number">1</span></td><td class="fc-day-top fc-fri fc-past" data-date="2018-03-02"><span class="fc-day-number">2</span></td><td class="fc-day-top fc-sat fc-past" data-date="2018-03-03"><span class="fc-day-number">3</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style=""><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2018-03-04"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2018-03-05"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2018-03-06"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2018-03-07"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2018-03-08"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2018-03-09"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2018-03-10"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2018-03-04"><span class="fc-day-number">4</span></td><td class="fc-day-top fc-mon fc-past" data-date="2018-03-05"><span class="fc-day-number">5</span></td><td class="fc-day-top fc-tue fc-past" data-date="2018-03-06"><span class="fc-day-number">6</span></td><td class="fc-day-top fc-wed fc-past" data-date="2018-03-07"><span class="fc-day-number">7</span></td><td class="fc-day-top fc-thu fc-past" data-date="2018-03-08"><span class="fc-day-number">8</span></td><td class="fc-day-top fc-fri fc-past" data-date="2018-03-09"><span class="fc-day-number">9</span></td><td class="fc-day-top fc-sat fc-past" data-date="2018-03-10"><span class="fc-day-number">10</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end l-coral fc-draggable"><div class="fc-content"><span class="fc-time">4p</span> <span class="fc-title">Repeating Event</span></div></a></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style=""><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2018-03-11"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2018-03-12"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2018-03-13"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2018-03-14"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2018-03-15"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2018-03-16"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2018-03-17"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2018-03-11"><span class="fc-day-number">11</span></td><td class="fc-day-top fc-mon fc-past" data-date="2018-03-12"><span class="fc-day-number">12</span></td><td class="fc-day-top fc-tue fc-past" data-date="2018-03-13"><span class="fc-day-number">13</span></td><td class="fc-day-top fc-wed fc-past" data-date="2018-03-14"><span class="fc-day-number">14</span></td><td class="fc-day-top fc-thu fc-past" data-date="2018-03-15"><span class="fc-day-number">15</span></td><td class="fc-day-top fc-fri fc-past" data-date="2018-03-16"><span class="fc-day-number">16</span></td><td class="fc-day-top fc-sat fc-past" data-date="2018-03-17"><span class="fc-day-number">17</span></td></tr></thead><tbody><tr><td class="fc-event-container fc-limited" colspan="3"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end l-blue fc-draggable fc-resizable"><div class="fc-content"> <span class="fc-title">Conference</span></div><div class="fc-resizer fc-end-resizer"></div></a></td><td class="fc-more-cell" rowspan="1"><div><a class="fc-more">+1 more</a></div></td><td class="fc-more-cell" rowspan="1"><div><a class="fc-more">+5 more</a></div></td><td class="fc-more-cell" rowspan="1"><div><a class="fc-more">+2 more</a></div></td><td rowspan="5"></td><td rowspan="5"></td><td rowspan="5"></td><td rowspan="5"></td></tr><tr class="fc-limited"><td rowspan="4"></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end l-parpl fc-draggable"><div class="fc-content"><span class="fc-time">10:30a</span> <span class="fc-title">Meeting</span></div></a></td><td class="fc-event-container" rowspan="4"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end l-green fc-draggable"><div class="fc-content"><span class="fc-time">7a</span> <span class="fc-title">Birthday Party</span></div></a></td></tr><tr class="fc-limited"><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end l-coral fc-draggable"><div class="fc-content"><span class="fc-time">12p</span> <span class="fc-title">Lunch</span></div></a></td></tr><tr class="fc-limited"><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end l-amber fc-draggable"><div class="fc-content"><span class="fc-time">2:30p</span> <span class="fc-title">Meeting</span></div></a></td></tr><tr class="fc-limited"><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end l-coral fc-draggable"><div class="fc-content"><span class="fc-time">5:30p</span> <span class="fc-title">Happy Hour</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style=""><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2018-03-18"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2018-03-19"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2018-03-20"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2018-03-21"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2018-03-22"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2018-03-23"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2018-03-24"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2018-03-18"><span class="fc-day-number">18</span></td><td class="fc-day-top fc-mon fc-past" data-date="2018-03-19"><span class="fc-day-number">19</span></td><td class="fc-day-top fc-tue fc-past" data-date="2018-03-20"><span class="fc-day-number">20</span></td><td class="fc-day-top fc-wed fc-past" data-date="2018-03-21"><span class="fc-day-number">21</span></td><td class="fc-day-top fc-thu fc-past" data-date="2018-03-22"><span class="fc-day-number">22</span></td><td class="fc-day-top fc-fri fc-past" data-date="2018-03-23"><span class="fc-day-number">23</span></td><td class="fc-day-top fc-sat fc-past" data-date="2018-03-24"><span class="fc-day-number">24</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style=""><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2018-03-25"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2018-03-26"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2018-03-27"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2018-03-28"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2018-03-29"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2018-03-30"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2018-03-31"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2018-03-25"><span class="fc-day-number">25</span></td><td class="fc-day-top fc-mon fc-past" data-date="2018-03-26"><span class="fc-day-number">26</span></td><td class="fc-day-top fc-tue fc-past" data-date="2018-03-27"><span class="fc-day-number">27</span></td><td class="fc-day-top fc-wed fc-past" data-date="2018-03-28"><span class="fc-day-number">28</span></td><td class="fc-day-top fc-thu fc-past" data-date="2018-03-29"><span class="fc-day-number">29</span></td><td class="fc-day-top fc-fri fc-past" data-date="2018-03-30"><span class="fc-day-number">30</span></td><td class="fc-day-top fc-sat fc-past" data-date="2018-03-31"><span class="fc-day-number">31</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end l-blue fc-draggable fc-resizable" href="http://google.com/"><div class="fc-content"> <span class="fc-title">Click for Google</span></div><div class="fc-resizer fc-end-resizer"></div></a></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style=""><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2018-04-01"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2018-04-02"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2018-04-03"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-past" data-date="2018-04-04"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-past" data-date="2018-04-05"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-past" data-date="2018-04-06"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-past" data-date="2018-04-07"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-past" data-date="2018-04-01"><span class="fc-day-number">1</span></td><td class="fc-day-top fc-mon fc-other-month fc-past" data-date="2018-04-02"><span class="fc-day-number">2</span></td><td class="fc-day-top fc-tue fc-other-month fc-past" data-date="2018-04-03"><span class="fc-day-number">3</span></td><td class="fc-day-top fc-wed fc-other-month fc-past" data-date="2018-04-04"><span class="fc-day-number">4</span></td><td class="fc-day-top fc-thu fc-other-month fc-past" data-date="2018-04-05"><span class="fc-day-number">5</span></td><td class="fc-day-top fc-fri fc-other-month fc-past" data-date="2018-04-06"><span class="fc-day-number">6</span></td><td class="fc-day-top fc-sat fc-other-month fc-past" data-date="2018-04-07"><span class="fc-day-number">7</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div role="tabpanel" class="tab-pane" id="usersettings">
                <div class="card">
                    <div class="header">
                        <h2><strong>Security</strong> Settings</h2>
                    </div>
                    <div class="body">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Current Password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="New Password">
                        </div>
                        <button class="btn btn-info btn-round">Save Changes</button>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2><strong>Account</strong> Settings</h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="City">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="E-mail">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Country">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea rows="4" class="form-control no-resize" placeholder="Address Line 1"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <input id="procheck1" type="checkbox">
                                    <label for="procheck1">Profile Visibility For Everyone</label>
                                </div>
                                <div class="checkbox">
                                    <input id="procheck2" type="checkbox">
                                    <label for="procheck2">New task notifications</label>
                                </div>
                                <div class="checkbox">
                                    <input id="procheck3" type="checkbox">
                                    <label for="procheck3">New friend request notifications</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-primary btn-round">Save Changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>