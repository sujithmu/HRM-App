
<div class="span10" id='calendar' style="padding-top:5px;margin-left:100px;"></div>
<div class="rightside span2">

<div class="divcolor"><span class="color1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="listsp">Holiday</span></div>
<div class="divcolor"><span class="color2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="listsp">Optional Holiday</span></div>
<div class="divcolor"><span class="color3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="listsp">Leave Scheduled</span></div>
<div class="divcolor"><span class="color4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="listsp">Leave Pending</span></div>
<div class="divcolor"><span class="color5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="listsp">Leave Taken</span></div>


</div>

<link href='./css/fullcalendar.css' rel='stylesheet' />

<script src='./js/moment.min.js'></script>

<script src='./js/fullcalendar.min.js'></script>
<script>

	$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			header: {
				
				
				
			},
			defaultDate: '2014-11-12',
			editable: false,
			eventLimit: true, // allow "more" link when too many events
			 events: {
        url: '<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=Holiday/ShowHolidays',
       
        error: function() {
            alert('there was an error while fetching events!');
        },
        
        color: 'yellow',   // a non-ajax option
        textColor: 'black' // a non-ajax option
    }, 
    viewRender: function (view, element) {
    	//alert( view.start);
    		var end_date_max   = '2014-12-30';
    		var start_date_min = '2014-00-01';
    	    var startdate = new Date(view.start);
        	var curr_date = startdate.getDate()-1;
        	if (curr_date<10)
        		curr_date="0"+curr_date;
			var curr_month = startdate.getMonth();
			if (curr_month<9){
        		curr_month=curr_month+1;
        		curr_month="0"+curr_month;	
			}else
				curr_month=curr_month+1;

        
			var curr_year = startdate.getFullYear();
			var start_date = curr_year + "-" + (curr_month)+ "-" + (curr_date);
			






    	 	var enddate = new Date(view.start);
    	 	enddate.setDate(enddate.getDate()+7);
        	var curr_date = enddate.getDate()-1;
        	if (curr_date<10)
        		curr_date="0"+curr_date;
			var curr_month = enddate.getMonth();
			if (curr_month<9){
        		curr_month=curr_month+1;
        		curr_month="0"+curr_month;	
			}else
				curr_month=curr_month+1;
			var curr_year = enddate.getFullYear();
			var end_date = curr_year + "-" + (curr_month)+ "-" + (curr_date);
			

			if (start_date_min>start_date && start_date_min>end_date ){

				$('.fc-next-button').trigger('click');
			}

	
			if (end_date_max<end_date ){
			

				$('.fc-prev-button').trigger('click');
			}

			

     },
        eventRender: function (event, element, monthView) 
    {
            var start1 = new Date(event.start);
        	var curr_date = start1.getDate();
        	if (curr_date<10)
        		curr_date="0"+curr_date;
			var curr_month = start1.getMonth();
			var curr_year = start1.getFullYear();
			var curdate = curr_year + "-" + (curr_month+1)+ "-" + (curr_date);

         if (event.typename == "holiday") 
         {      	
        
            $( ".fc-day-grid" ).find( 'td[data-date="' + curdate + '"]').css('background-color', '#D10A02');
           
         }else if (event.typename == "optional"){
         	
         	$( ".fc-day-grid" ).find( 'td[data-date="' + curdate + '"]').css('background-color', '#CE7369');

        
         }else if (event.typename == "LEAVE_SCHEDULED"){
         	
         	$( ".fc-day-grid" ).find( 'td[data-date="' + curdate + '"]').css('background-color', '#DEACE3');


         }else if (event.typename == "LEAVE_APPLIED"){
         	
         	$( ".fc-day-grid" ).find( 'td[data-date="' + curdate + '"]').css('background-color', '#DE9218');


         }else if (event.typename == "LEAVE_TAKEN"){
         	
         	$( ".fc-day-grid" ).find( 'td[data-date="' + curdate + '"]').css('background-color', '#20EB0B');


         }



    },
    dayClick: function(date, allDay, jsEvent, view) {

        if (allDay) {
      //      alert('Clicked on the entire day: ' + date);
        }else{
         //   alert('Clicked on the slot: ' + date);
        }

       

    },
    eventClick: function(calEvent, jsEvent, view) {
   
        //alert('Event: ' + calEvent.title);
       // alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
        //alert('View: ' + view.name);

        // change the border color just for fun
      //  $(this).css('border-color', 'red');

    }
		});

		//$('#calendar').fullCalendar( 'addEventSource', source )
		//$('#calendar').fullCalendar('removeEventSource', 'calendarJSON.php' );
		
	});

</script>
