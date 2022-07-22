@extends('Backend.Admin.Layout.mainlayout')
@section('remaining_content')
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Gallery</h4>
                    </div>
                </div>
                <div id="lightgallery" class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 m-b-20">
                        <a href="{{url('Backend/Admin/assets/img/blog/blog-01.jpg')}}">
                            <img class="img-thumbnail" src="{{url('Backend/Admin/assets/img/blog/blog-01.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 m-b-20">
                        <a href="{{url('Backend/Admin/assets/img/blog/blog-02.jpg')}}">
                            <img class="img-thumbnail" src="{{url('Backend/Admin/assets/img/blog/blog-02.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 m-b-20">
                        <a href="{{url('Backend/Admin/assets/img/blog/blog-03.jpg')}}">
                            <img class="img-thumbnail" src="{{url('Backend/Admin/assets/img/blog/blog-03.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 m-b-20">
                        <a href="{{url('Backend/Admin/assets/img/blog/blog-04.jpg')}}">
                            <img class="img-thumbnail" src="{{url('Backend/Admin/assets/img/blog/blog-04.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 m-b-20">
                        <a href="{{url('Backend/Admin/assets/img/blog/blog-01.jpg')}}">
                            <img class="img-thumbnail" src="{{url('Backend/Admin/assets/img/blog/blog-01.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 m-b-20">
                        <a href="{{url('Backend/Admin/assets/img/blog/blog-02.jpg')}}">
                            <img class="img-thumbnail" src="{{url('Backend/Admin/assets/img/blog/blog-02.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 m-b-20">
                        <a href="{{url('Backend/Admin/assets/img/blog/blog-03.jpg')}}">
                            <img class="img-thumbnail" src="{{url('Backend/Admin/assets/img/blog/blog-03.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 m-b-20">
                        <a href="{{url('Backend/Admin/assets/img/blog/blog-04.jpg')}}">
                            <img class="img-thumbnail" src="{{url('Backend/Admin/assets/img/blog/blog-04.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 m-b-20">
                        <a href="{{url('Backend/Admin/assets/img/blog/blog-01.jpg')}}">
                            <img class="img-thumbnail" src="{{url('Backend/Admin/assets/img/blog/blog-01.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 m-b-20">
                        <a href="{{url('Backend/Admin/assets/img/blog/blog-02.jpg')}}">
                            <img class="img-thumbnail" src="{{url('Backend/Admin/assets/img/blog/blog-02.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 m-b-20">
                        <a href="{{url('Backend/Admin/assets/img/blog/blog-03.jpg')}}">
                            <img class="img-thumbnail" src="{{url('Backend/Admin/assets/img/blog/blog-03.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 m-b-20">
                        <a href="{{url('Backend/Admin/assets/img/blog/blog-04.jpg')}}">
                            <img class="img-thumbnail" src="{{url('Backend/Admin/assets/img/blog/blog-04.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="notification-box">
                <div class="msg-sidebar notifications msg-noti">
                    <div class="topnav-dropdown-header">
                        <span>Messages</span>
                    </div>
                    <div class="drop-scroll msg-list-scroll" id="msg_list">
                        <ul class="list-box">
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">R</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Richard Miles </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item new-message">
                                        <div class="list-left">
                                            <span class="avatar">J</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">John Doe</span>
                                            <span class="message-time">1 Aug</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">T</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Tarah Shropshire </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">M</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Mike Litorus</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">C</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Catherine Manseau </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">D</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Domenic Houston </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">B</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Buster Wigton </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">R</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Rolland Webber </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">C</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Claire Mapes </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">M</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Melita Faucher</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">J</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Jeffery Lalor</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">L</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Loren Gatlin</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">T</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Tarah Shropshire</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="chat.html">See all messages</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
       @endsection