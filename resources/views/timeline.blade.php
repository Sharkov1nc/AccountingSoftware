@extends('default')
@section('content')
    <div class="page-head">
        <h2 class="page-head-title">Timeline</h2>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Pages</a></li>
            <li class="active">Timeline</li>
        </ol>
    </div>
    <div class="main-content">
        <div class="row">
            <div class="col-md-12">
                <ul class="timeline timeline-variant">
                    <li class="timeline-month"><span>September, 2016</span></li>
                    <li class="timeline-item right">
                        <div class="timeline-content timeline-type file">
                            <div class="timeline-icon"><i class="icon s7-file"></i></div>
                            <div class="timeline-avatar"><img src="{{URL::asset('amaretti/html/assets/img/avatar2.jpg')}}" alt="Avatar" class="circle"></div>
                            <div class="timeline-header"><span class="timeline-autor">Penelope Thornton</span>
                                <p class="timeline-activity">Pellentesque imperdiet <a href="#">Amet nisl sed mattis</a>.</p><span class="timeline-time">September 16, 2016 - 4:34 PM</span>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-item timeline-item-detailed left">
                        <div class="timeline-content timeline-type comment">
                            <div class="timeline-icon"><i class="icon s7-comment"></i></div>
                            <div class="timeline-avatar"><img src="{{URL::asset('amaretti/html/assets/img/avatar3.jpg')}}" alt="Avatar" class="circle"></div>
                            <div class="timeline-header"><span class="timeline-autor">Kristopher Donny  </span>
                                <p class="timeline-activity">Mauris condimentum est <a href="#">Viverra erat fermentum</a>.</p><span class="timeline-time">September 13, 2016 - 9:54 AM</span>
                            </div>
                            <div class="timeline-summary">
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus sit amet tellus vel leo posuere fames commodo in eget ante. Vivamus vehicula sed velit at pulvinar.  </p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-month"><span>August, 2016</span></li>
                    <li class="timeline-item timeline-item-detailed timeline-item-gallery right">
                        <div class="timeline-content timeline-type gallery">
                            <div class="timeline-icon"><i class="icon s7-photo"></i></div>
                            <div class="timeline-avatar"><img src="{{URL::asset('amaretti/html/assets/img/avatar6.jpg')}}" alt="Avatar" class="circle"></div>
                            <div class="timeline-header"><span class="timeline-autor">Sherwood Clifford  </span>
                                <p class="timeline-activity">pellentesque tortor <a href="#">enim</a>.</p><span class="timeline-time">August 23, 2016 - 10:42 AM</span>
                            </div>
                            <div class="timeline-gallery"><img src="{{URL::asset('amaretti/html/assets/img/gallery1.jpg')}}" alt="Thumbnail" class="gallery-thumbnail"><img src="{{URL::asset('amaretti/html/assets/img/gallery3.jpg')}}" alt="Thumbnail" class="gallery-thumbnail"><img src="{{URL::asset('amaretti/html/assets/img/gallery4.jpg')}}" alt="Thumbnail" class="gallery-thumbnail"><img src="{{URL::asset('amaretti/html/assets/img/gallery5.jpg')}}" alt="Thumbnail" class="gallery-thumbnail"></div>
                        </div>
                    </li>
                    <li class="timeline-item timeline-item-detailed left">
                        <div class="timeline-content timeline-type comment">
                            <div class="timeline-icon"><i class="icon s7-comment"></i></div>
                            <div class="timeline-avatar"><img src="{{URL::asset('amaretti/html/assets/img/avatar8.jpg')}}" alt="Avatar" class="circle"></div>
                            <div class="timeline-header"><span class="timeline-autor">Benji Harper </span>
                                <p class="timeline-activity">Mauris condimentum est <a href="#">Vestibulum justo neque</a>.</p><span class="timeline-time">August 19, 2016 - 7:15 PM</span>
                            </div>
                            <div class="timeline-summary">
                                <p>Praesent luctus efficitur turpis, nec convallis mauris commodo a. Aliquam sed consectetur tellus, et condimentum diam. Sed efficitur augue urna, et lacinia ex dictum at. Nulla a molestie arcu. </p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-item right">
                        <div class="timeline-content timeline-type file">
                            <div class="timeline-icon"><i class="icon s7-file"></i></div>
                            <div class="timeline-avatar"><img src="{{URL::asset('amaretti/html/assets/img/avatar5.jpg')}}" alt="Avatar" class="circle"></div>
                            <div class="timeline-header"><span class="timeline-autor">Justine Myranda </span>
                                <p class="timeline-activity">Pellentesque imperdiet sit <a href="#">Amet nisl sed mattiss</a>.</p><span class="timeline-time">August 6, 2016 - 12:02 PM</span>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-item timeline-item-detailed left">
                        <div class="timeline-content timeline-type quote">
                            <div class="timeline-icon"><i class="icon s7-ribbon"></i></div>
                            <div class="timeline-avatar"><img src="{{URL::asset('amaretti/html/assets/img/avatar6.jpg')}}" alt="Avatar" class="circle"></div>
                            <div class="timeline-header"><span class="timeline-autor">Sherwood Clifford </span>
                                <p class="timeline-activity">pellentesque tortor <a href="#">Aliquam viverra</a>.</p><span class="timeline-time">August 1, 2016 - 6:25 AM</span>
                            </div>
                            <blockquote class="timeline-blockquote">
                                <p>Quisque condimentum enim nec porttitor egestas. </p>
                                <footer>Aliquam viverra ornare dolor.</footer>
                            </blockquote>
                        </div>
                    </li>
                    <li class="timeline-item timeline-loadmore"><a href="#" class="load-more-btn">Load more</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection