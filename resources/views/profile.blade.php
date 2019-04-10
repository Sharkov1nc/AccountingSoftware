@extends('default')
@section('content')
   <div class="main-content">
       <div class="user-profile">
           <div class="user-display">
               <div class="photo"><img src="{{URL::asset('amaretti/html/assets/img/profile.jpg')}}"></div>
               <div class="bottom">
                   <div class="user-avatar"><span class="status"></span><img src="{{URL::asset('amaretti/html/assets/img/avatar.jpg')}}"></div>
                   <div class="user-info">
                       <h4> @guest Samantha Amaretti @else {{\Illuminate\Support\Facades\Auth::user()->name}} @endguest </h4><span>I am a web developer and designer based in Montreal - Canada, I like read books, good music and nature.</span>
                   </div>
               </div>
           </div>
           <div class="row">
               <div class="col-md-4 col-sm-12">
                   <div class="info-block panel panel-default" id="user-information-panel">
                       <div class="panel-heading">
                           <h4>About me</h4>
                       </div>
                       <div class="panel-body"><span class="description">I am a web developer and designer based in Montreal - Canada, I like read books, good music and nature.</span>
                           <table class="no-border no-strip skills">
                               <tbody class="no-border-x no-border-y">
                               <tr>
                                   <td class="item">Ocupation:<span class="icon s7-portfolio"></span></td>
                                   <td>Developer and designer</td>
                               </tr>
                               <tr>
                                   <td class="item">Birthday:<span class="icon s7-gift"></span></td>
                                   <td>16 September 1989</td>
                               </tr>
                               <tr>
                                   <td class="item">Mobile:<span class="icon s7-phone"></span></td>
                                   <td>(999) 999-9999</td>
                               </tr>
                               <tr>
                                   <td class="item">Location:<span class="icon s7-map-marker"></span></td>
                                   <td>Montreal, Canada</td>
                               </tr>
                               </tbody>
                           </table>
                       </div>
                   </div>
               </div>
               <div class="col-md-8">
                   <div class="widget widget-calendar">
                       <div class="cal-container">
                           <div class="cal-notes"><span class="day">Thursday</span><span class="date">September 24</span><span class="title">Notes<span class="icon s7-plus"></span></span>
                               <ul>
                                   <li><span class="hour">14h</span><span class="event-name">Meeting with investors</span></li>
                                   <li><span class="hour">8h</span><span class="event-name">Dentist date</span></li>
                               </ul>
                           </div>
                           <div class="cal-calendar">
                               <div class="ui-datepicker"></div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           </div>
   </div>

@endsection