@extends('default')
@section('libsCSS')

    @endsection
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
@section('libsJS')
    <script src="{{ URL::asset('amaretti/html/assets/js/app-dashboard.js') }}" ></script>
    <script>
        var App = (function () {
            'use strict';

            App.dashboard = function( ){

                //Calendar Widget
                function calendar_widget() {
                    var widget = $(".widget-calendar");
                    var calNotes = $(".cal-notes", widget);
                    var calNotesDay = $(".day", calNotes);
                    var calNotesDate = $(".date", calNotes);

                    //Calculate the weekday name
                    var d = new Date();
                    var weekday = new Array(7);
                    weekday[0] = "Sunday";
                    weekday[1] = "Monday";
                    weekday[2] = "Tuesday";
                    weekday[3] = "Wednesday";
                    weekday[4] = "Thursday";
                    weekday[5] = "Friday";
                    weekday[6] = "Saturday";

                    var weekdayName = weekday[d.getDay()];

                    calNotesDay.html(weekdayName);

                    //Calculate the month name
                    var month = new Array();
                    month[0] = "January";
                    month[1] = "February";
                    month[2] = "March";
                    month[3] = "April";
                    month[4] = "May";
                    month[5] = "June";
                    month[6] = "July";
                    month[7] = "August";
                    month[8] = "September";
                    month[9] = "October";
                    month[10] = "November";
                    month[11] = "December";

                    var monthName = month[d.getMonth()];
                    var monthDay = d.getDate();

                    calNotesDate.html(monthName + " " + monthDay);

                    if (typeof jQuery.ui != 'undefined') {
                        $(".ui-datepicker").datepicker({
                            onSelect: function (s, o) {
                                var sd = new Date(s);
                                var weekdayName = weekday[sd.getDay()];
                                var monthName = month[sd.getMonth()];
                                var monthDay = sd.getDate();

                                calNotesDay.html(weekdayName);
                                calNotesDate.html(monthName + " " + monthDay);
                            }
                        });
                    }
                }
                calendar_widget();
            }
  return App;
})(App || {});
        App.dashboard();

    </script>
@endsection