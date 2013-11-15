jQuery(document).ready(function(){
	$('#external-events ul li.external-event').each(function() {
		var eventObject = {
			title: $.trim($(this).text()) // use the element's text as the event title
		};

		// store the Event Object in the DOM element so we can get to it later
		$(this).data('eventObject', eventObject);

		// make the event draggable using jQuery UI
		$(this).draggable({
			zIndex: 999,
			revert: true,      // will cause the event to go back to its
			revertDuration: 0  //  original position after the drag
		});

	});

	var calendar = $('#calendar').fullCalendar({
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,agendaWeek,agendaDay'
		},
		defaultView: 'agendaWeek',
		allDaySlot: false,
		allDayText: 'Todo el dia',
		firstHour: 8,
		slotMinutes: 30,
		defaultEventMinutes: 120,
		axisFormat: 'HH:mm',
		timeFormat: {
		    agenda: 'HH:mm{ - HH:mm}'
		},
		dragOpacity: {
		    agenda: .5
		},
		minTime: 6,
		maxTime: 24,
		buttonText: {
			prev: '&laquo;',
			next: '&raquo;',
			prevYear: '&nbsp;&lt;&lt;&nbsp;',
			nextYear: '&nbsp;&gt;&gt;&nbsp;',
			today: 'hoy',
			month: 'mes',
			week: 'semana',
			day: 'dia'
		},
		monthNames: ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"],
		monthNamesShort:["Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic"],
		dayNames:["Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado"],
		dayNamesShort:["Dom","Lun","Mar","Mie","Jue","Vie","Sab"],
		titleFormat:{month:"MMMM yyyy",week:"d MMM [ yyyy]{ '&#8212;' d MMM yyyy}",day:"dddd, d MMM, yyyy"},
		columnFormat:{month: 'ddd', week: 'ddd d/M', day: 'dddd d/M' },
		editable: true,
		droppable: true,
		drop: function(date, allDay) { 
			var originalEventObject = $(this).data('eventObject');

			var copiedEventObject = $.extend({}, originalEventObject);
			copiedEventObject.start = date;
			copiedEventObject.end = new Date(date.getFullYear(), date.getMonth(), date.getDate(), date.getHours(), date.getMinutes() + 120);
			copiedEventObject.allDay = false;

			$('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
			
			saveevent(copiedEventObject);
		},
		
		eventRender: function(event, element) {
	        //element.find(".fc-event-time").after($("<span class=\"fc-event-icons\"></span>").html("<img class='pull-right' src='/alum/assets/images/EditSmall.png'/>"));
	        element.find(".fc-event-time").append("<img class='pull-right' src='/alum/assets/images/EditSmall.png'/>");
	        $(".fc-event-time").css('white-space', '');
	    },
        
		eventDrop: function(event, dayDelta, minuteDelta, allDay, revertFunc, jsEvent, ui, view) { 			
			saveevent(event);
		},
		eventResize: function(event, dayDelta, minuteDelta, revertFunc, jsEvent, ui, view) { 			
			saveevent(event);
		},
	});
	
	function saveevent(event){
		jQuery.post( 
			'/alum/calendar/saveevent/',
		    {
		    	eventid: event.id != 'undefined'?event.id:'',
		    	studentname: event.title,
		    	start: event.start,
		    	end: event.end
		    },
		    function( data ){
		    	
	    	}
	    );
	}
	
	jQuery.post( 
		'/alum/calendar/getevents/',
	    //{ IdCerda: idcerda },
	    function( events ){
	    	events = JSON.parse(events);
	    	console.log(events);
    		jQuery.each(events, function(i, event){
				var eventObject = event;
		    	var originalEventObject = eventObject;
				// we need to copy it, so that multiple events don't have a reference to the same object
				var copiedEventObject = jQuery.extend({}, originalEventObject);
				copiedEventObject.allDay = false;
				
				jQuery('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
			});
	    }
	);
});
	    