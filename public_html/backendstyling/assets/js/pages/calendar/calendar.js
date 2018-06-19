"use strict";
$('#calendar').fullCalendar({
    header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listWeek'
    },
    defaultDate: '2018-03-12',
    editable: true,
    droppable: true, // this allows things to be dropped onto the calendar
    drop: function() {
        // is the "remove after drop" checkbox checked?
        if ($('#drop-remove').is(':checked')) {
            // if so, remove the element from the "Draggable Events" list
            $(this).remove();
        }
    },
    eventLimit: true, // allow "more" link when too many events
    events: [
        {
            title: 'All Day Event',
            start: '2018-01-01',
            className: 'l-khaki'
        },
        {
            title: 'Long Event',
            start: '2018-02-07',
            end: '2018-02-10',
            className: 'l-turquoise'
        },
        {
            id: 999,
            title: 'Repeating Event',
            start: '2018-03-09T16:00:00',
            className: 'l-coral'
        },
        {
            id: 999,
            title: 'Repeating Event',
            start: '2018-02-16T16:00:00',
            className: 'l-green'
        },
        {
            title: 'Conference',
            start: '2018-03-11',
            end: '2018-03-14',
            className: 'l-blue'
        },
        {
            title: 'Meeting',
            start: '2018-03-12T10:30:00',
            end: '2018-03-12 T12:30:00',
            className: 'l-parpl'
        },
        {
            title: 'Lunch',
            start: '2018-03-12T12:00:00',
            className: 'l-coral'
        },
        {
            title: 'Meeting',
            start: '2018-03-12T14:30:00',
            className: 'l-amber'
        },
        {
            title: 'Happy Hour',
            start: '2018-03-12T17:30:00',
            className: 'l-coral'
        },
        {
            title: 'Dinner',
            start: '2018-04-12T20:00:00',
            className: 'l-parpl'
        },
        {
            title: 'Birthday Party',
            start: '2018-03-13T07:00:00',
            className: 'l-green'
        },
        {
            title: 'Click for Google',
            url: 'http://google.com/',
            start: '2018-03-28',
            className: 'l-blue'
        }
    ]
});

    