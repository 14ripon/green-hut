$(function() {

  $('#calendar').fullCalendar({
    editable: false, // enable draggable events
        header: {
            left: 'prev,next today',
            center: 'title',            
            right: 'month,agendaWeek,timelineDay,listWeek'
        },
        defaultView: 'month',
        eventLimit: true,
        views: {
            timelineDay: {
                slotDuration: '00:30'
            },
            timelineThreeDays: {
                type: 'timeline',
                duration: { days: 3 }
            }
        },
        //resourceGroupField: 'building',
        resourceLabelText: 'Automation Names',
    resources: [
      {id: "AGE", title: "AGENCY LOAN"},
      {id: "CDD", title: "CDDI"},
      {id: "OTH", title: "OTHER"},
      {id: "SET", title: "SETTLEMENTS"},
      {id: "UNI", title: "UNIX PATCHING"}
    ],
    events: [
        {allDay:false,automationName:"AGENCY LOAN",calendarDays:"Follow ",color:"salmon",end:"2018-08-08T23:59:00",id:"1",period:"1",resourceId:"AGE",scheduleFrequency:"Daily",scheduleName:"Login 10:30 AM EST",start:"2018-08-08T10:30:00",title:"Login 10:30 AM EST"},
      {allDay:false,automationName:"AGENCY LOAN",calendarDays:"Follow ",color:"salmon",end:"2018-08-08T11:30:00",id:"2",period:"1",resourceId:"AGE",scheduleFrequency:"Daily",scheduleName:"11:00 AM EST",start:"2018-08-08T11:00:00",title:"11:00 AM EST"},
      {allDay:false,automationName:"AGENCY LOAN",calendarDays:"Follow ",color:"salmon",end:"2018-08-08T12:30:00",id:"2",period:"1",resourceId:"AGE",scheduleFrequency:"Daily",scheduleName:"11:00 AM EST",start:"2018-08-08T12:00:00",title:"11:00 AM EST"},
      {allDay:false,automationName:"AGENCY LOAN",calendarDays:"Follow ",color:"salmon",end:"2018-08-08T23:59:00",id:"2",period:"1",resourceId:"AGE",scheduleFrequency:"Daily",scheduleName:"11:00 AM EST",start:"2018-08-08T11:00:00",title:"11:00 AM EST"},
      {allDay:false,automationName:"AGENCY LOAN",calendarDays:"Follow ",color:"salmon",end:"2018-08-08T23:59:00",id:"3",period:"1",resourceId:"AGE",scheduleFrequency:"Daily",scheduleName:"3:00 PM EST",start:"2018-08-08T15:00:00",title:"3:00 PM EST"},
      {allDay:false,automationName:"AGENCY LOAN",calendarDays:"Follow ",color:"salmon",end:"2018-08-081T23:59:00",id:"4",period:"1",resourceId:"AGE",scheduleFrequency:"Daily",scheduleName:"Logout 5:00 PM EST",start:"2018-08-08T17:00:00",title:"Logout 5:00 PM EST"},
      {allDay:false,automationName:"CDDI",calendarDays:"Follow ",color:"salmon",end:"2018-08-08T23:59:00",id:"5",period:"1",resourceId:"CDD",scheduleFrequency:"Daily",scheduleName:"Login",start:"2018-08-08T05:00:00",title:"Login"}
      ],
     eventClick: function (calEvent, jsEvent, view) {
            $("#DetailModalTitle").text(calEvent.title);
            $("#Autx").text(calEvent.automationName);

            $("#startTime").text(moment(calEvent.start).format('MMMM Do YYYY, h:mm:ss a') + " CST");
            $("#endTime").text(moment(calEvent.end).format('MMMM Do YYYY, h:mm:ss a') + " CST");

            $("#frency").text(calEvent.scheduleFrequency);
            $("#period").text(calEvent.period);
            $("#calendarDays").text(calEvent.calendarDays);
            $(".modal-header").css({ 'background-color': calEvent.color });
            $("#DetailModal").modal('show');

        }
  });

});