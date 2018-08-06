(function( $ ) {
	var calenderTpl = '<div id="calTitle"><button class="month-mover prev"><svg fill="#000" height="30" viewBox="0 0 24 24" width="30" xmlns="http://www.w3.org/2000/svg"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/><path d="M0 0h24v24H0z" fill="none"/></svg></button><div id="monthYear"></div><button class="month-mover next"><svg fill="#000" height="30" viewBox="0 0 24 24" width="30" xmlns="http://www.w3.org/2000/svg"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/><path d="M0 0h24v24H0z" fill="none"/></svg></button></div><div><div id="calThead"><div>Lu</div><div>Ma</div><div>Me</div><div>Gi</div><div>Ve</div><div>Sa</div><div>Do</div></div><div id="calTbody"></div></div><div id="calTFooter"><h3 id="eventTitle">No events today.</h3><a href="javascript:void(0);" id="calLink">ALL EVENTS</a></div>';
	var short_months = ["Gennaio", "Febbraio", "Marzo", "Aprile", "Maggio", "Giugno", "Luglio","Agosto", "Settembre", "Ottobre", "Novembre", "Dicembre"];
	var today = new Date();
	var cur_month = today.getMonth();
	var cur_year = today.getFullYear();

    $.fn.miniEventCalendar = $.fn.MEC = function(options) {
    	var settings = $.extend({
    		calendar_link : "",
    		events: []
        }, options );

        var mini_cal = this;

        mini_cal.addClass('mini-cal').html(calenderTpl);

        var tbody = mini_cal.find("#calTbody");
				var cal_title = mini_cal.find("#monthYear");
				var cal_footer = mini_cal.find("#calTFooter");
        var event_title = mini_cal.find("#eventTitle");
				var events_link = mini_cal.find("#calLink");

				cal_title.text("Feb 2018");
		    event_title.text("Nessun evento oggi.");
				events_link.text("Vedi eventi");
				events_link.attr("href", settings.calendar_link);

				//if(!settings.calendar_link.length && !settings.events.length)
				cal_footer.css("display", "none");

				mini_cal.find(".month-mover").each(function(){
					var mover = $(this);
					mover.bind("click", function(){
						if(mover.hasClass("next"))
							viewNextMonth();
						else
							viewPrevMonth();
					});
				});

				mini_cal.on("click, focusin", ".a-date", function(){
				    if(!$(this).hasClass('blurred')) {

			        showEvent($(this).data('event'));
						}
				});

		function populateCalendar(month, year) {
			tbody.html("");
			cal_title.text(short_months[month] + " " + year);

			cur_month = month;
			cur_year = year;

			var ldate = new Date(year, month);
			var dt = new Date(ldate);
			var wday = dt.getDay()-1;
			if(wday < 0) { wday = 6; }
			if(ldate.getDate() === 1 && wday != 0)
					tbody.append(last_prev_month_days(wday));

			while (ldate.getMonth() === month) {
     			dt = new Date(ldate);

     			var isToday = areSameDate(ldate, new Date());
     			var event = null;
     			var event_index = settings.events.findIndex(function(ev) {
		     		return areSameDate(dt, new Date(ev.date));
		     	});

		        if(event_index != -1){
		        	event = settings.events[event_index];

		        	//if(isToday)
		        	//	showEvent(event);
		        }

     			tbody.append(date_tpl(false, ldate.getDate(), isToday, event));

     			ldate.setDate(ldate.getDate() + 1);

     			var buffer_days = 43 - mini_cal.find(".a-date").length;


		        if(ldate.getMonth() != month)
		        	for (var i = 1; i < buffer_days; i++)
		     			tbody.append(date_tpl(true, i));
     		}
 		}

 		function last_prev_month_days(day){
 			if(cur_month > 0){
     			var month_idx = cur_month - 1;
     			var year_idx = cur_year;
     		}else{
     			if(cur_month < 11){
     				var month_idx = 0;
     				var year_idx = cur_year + 1;
     			}else{
     				var month_idx = 11;
     				var year_idx = cur_year - 1;
     			}
     		}

     		var prev_month = getMonthDays(month_idx, year_idx);
     		var last_days = "";
        	for (var i = day; i > 0; i--)
     			last_days += date_tpl(true, prev_month[ prev_month.length - i]);

        	return last_days;
 		}

		function date_tpl(blurred, date, is_today, event){
			var tpl = "<div class='a-date blurred'><span>"+date+"</span></div>";

			if(!blurred){
		        var cls = is_today ? "current " : "";
		        cls += event && event !== null ? "event " : "";

		        var tpl ="<button class='a-date "+cls+"' data-event='"+JSON.stringify(event)+"'><span>"+date+"</span></button>";
			}

			return tpl;
		}

		function showEvent(event){
			console.log(event);
			if(event && event !== null && event !== undefined){
				$(".eventi").css("height", $(".mini-cal").css("height"));

				$(".evento").find("b").html(event.title);
				$(".evento").find(".data").html(event.strdata);
				$(".evento").find(".luogo").html(event.luogo);
				$(".evento").find(".ora").html("Ore "+event.ora);
				$(".evento").find("p").html(event.desc);

				$("#agenda").animate({
			    "opacity": 0,
			  }, 500, function() {
					$("#agenda").css("display", "none");
					$(".eventi").css("display", "block");
			    $(".eventi").animate({
			      "opacity": "1" }, 500 )});

			}

		}

		function viewNextMonth(){
			var next_month = cur_month < 11 ? cur_month + 1 : 0;
			var next_year = cur_month < 11 ? cur_year : cur_year + 1;

			populateCalendar(next_month, next_year);
		}

		function viewPrevMonth(){
			var prev_month = cur_month > 0 ? cur_month - 1 : 11;
			var prev_year = cur_month > 0 ? cur_year : cur_year - 1;

			populateCalendar(prev_month, prev_year);
		}

		function areSameDate(d1, d2) {
			return d1.getFullYear() == d2.getFullYear()
		        && d1.getMonth() == d2.getMonth()
		        && d1.getDate() == d2.getDate();
		}

		function getMonthDays(month, year) {
		     var date = new Date(year, month, 1);
		     var days = [];
		     while (date.getMonth() === month) {
		        days.push(date.getDate());
		        date.setDate(date.getDate() + 1);
		     }
		     return days;
		}

		populateCalendar(cur_month, cur_year);

        return mini_cal;
    };

}( jQuery ));

/* calendario mobile */
/* n => giorno della settimana ( progressivo 0-6 ) */
function activeDay(nDay) {
	$(".days .day-box").removeClass("active");
	$(".days .day-box").eq(nDay).addClass("active");
}

function showEvents(nDay) {
	clearEvents();
	activeDay(nDay);
	var ws = getStartOfWeek();
	var we = getEndOfWeek();
	var edayS = new Date();
	var edayE = new Date();
	edayS.setHours(0,0,0,0);
	edayS.setDate(ws.getDate()+nDay);
	edayE.setHours(23,59,59,0);
	edayE.setDate(ws.getDate()+nDay);
	//console.log(eday);
	for(var e=0; e<EVENTI.length; e++) {
		var d = new Date(EVENTI[e].date);
		//console.log(d+" "+EVENTI[e].title);
		if(d.getTime() > edayS.getTime() && d.getTime() < edayE.getTime()) {
		 setEvent(EVENTI[e]);
		 Enum++;
	 	}
	}
}

var Enum = 0;

function clearEvents() {
	Enum = 0;
	while( $(".event-list .evento" ).length > 1) {
		$(".event-list .evento").last().remove();
	}
	$(".event-list .evento b").html('');
	$(".event-list .evento .luogo").html('');
	$(".event-list .evento .ora").html('');
	$(".event-list .evento p").html('');
}

function setEvent(event) {
	if(Enum > 0 ) {
		var ne = $(".event-list .evento").clone();
		$(".event-list").append(ne);
	}

	$(".event-list .evento b").last().html(event.title);
	$(".event-list .evento .luogo").last().html(event.luogo);
	$(".event-list .evento .ora").last().html(event.ora);
	$(".event-list .evento p").last().html(event.desc);
}

function getStartOfWeek(date) {

  // Copy date if provided, or use current date if not
  date = date? new Date(+date) : new Date();
  date.setHours(0,0,0,0);

  // Set date to previous monday
  date.setDate(date.getDate() - (date.getDay()-1));

  return date;
}

function getEndOfWeek(date) {
  date = getStartOfWeek(date);
  date.setDate(date.getDate() + 6);
	date.setHours(23, 59, 59, 999);
  return date;
}

$("#agenda-mobile").click( function() {
	clearInterval(swd);
});

$(".day-box").click( function() {
	clearInterval(swd);
	var idx = $(this).index();
	showEvents(idx);
});

if (typeof EVENTI !== 'undefined') {
	var nDay = 0;
	showEvents(nDay);
	nDay++;

	var swd = setInterval(function() {
		showEvents(nDay);
		nDay++;
		if(nDay>6) { nDay = 0; }
	}, 7000);
}
