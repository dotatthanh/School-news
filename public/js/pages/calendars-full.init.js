! function(g) {
    "use strict";

    function e() {}
    e.prototype.init = function() {
        var l = g("#event-modal"),
            t = g("#modal-title"),
            a = g("#form-event"),
            i = null,
            r = null,
            s = document.getElementsByClassName("needs-validation"),
            i = null,
            r = null,
            e = new Date,
            n = e.getDate(),
            d = e.getMonth(),
            o = e.getFullYear();
        // new FullCalendarInteraction.Draggable(document.getElementById("external-events"), {
        //     itemSelector: ".external-event",
        //     eventData: function(e) {
        //         return {
        //             title: e.innerText,
        //             className: g(e).data("class")
        //         }
        //     }
        // });
        // var c = [{
        //         title: "P302 - CNTT1 - Mạng máy tính",
        //         // start: new Date(o, d, 1)
        //         start: '2023-05-27 01:00:00',
        //         end: '2023-05-27 03:00:00',
        //         // allDay: !1,
        //         className: "bg-success"
        //     }, {
        //         title: "Long Event",
        //         start: new Date(o, d, n - 5),
        //         end: new Date(o, d, n - 2),
        //         className: "bg-warning"
        //     }, {
        //         id: 999,
        //         title: "Repeating Event",
        //         start: new Date(o, d, n - 3, 16, 0),
        //         allDay: !1,
        //         className: "bg-info"
        //     }, {
        //         id: 999,
        //         title: "Repeating Event",
        //         start: new Date(o, d, n + 4, 16, 0),
        //         allDay: !1,
        //         className: "bg-primary"
        //     }, {
        //         title: "Meeting",
        //         start: new Date(o, d, n, 10, 30),
        //         allDay: !1,
        //         className: "bg-success"
        //     }, {
        //         title: "Lunch",
        //         start: new Date(o, d, n, 12, 0),
        //         end: new Date(o, d, n, 14, 0),
        //         allDay: !1,
        //         className: "bg-danger"
        //     }, {
        //         title: "Birthday Party",
        //         start: new Date(o, d, n + 1, 19, 0),
        //         end: new Date(o, d, n + 1, 22, 30),
        //         allDay: !1,
        //         className: "bg-success"
        //     }, {
        //         title: "Click for Google",
        //         start: new Date(o, d, 28),
        //         end: new Date(o, d, 29),
        //         url: "http://google.com/",
        //         className: "bg-dark"
        //     }],

        var c = data,
        // var c = [
        // {
        //     title: "P302 - CNTT1 - Mạng máy tính",
        //     start: '2023-05-22 07:00:00',
        //     end: '2023-05-22 09:25:00',
        //     // className: "bg-success"
        // },
        // {
        //     title: "P302 - CNTT1 - Mạng máy tính",
        //     start: '2023-05-22 13:00:00',
        //     end: '2023-05-22 15:25:00',
        //     // className: "bg-success"
        // },
        // {
        //     title: "P302 - CNTT1 - Mạng máy tính",
        //     start: '2023-05-23 07:00:00',
        //     end: '2023-05-23 09:25:00',
        //     // className: "bg-success"
        // },
        // {
        //     title: "P302 - CNTT1 - Mạng máy tính",
        //     start: '2023-05-23 13:00:00',
        //     end: '2023-05-23 15:25:00',
        //     // className: "bg-success"
        // },
        // {
        //     title: "P302 - CNTT1 - Mạng máy tính",
        //     start: '2023-05-23 18:15:00',
        //     end: '2023-05-23 21:30:00',
        //     // className: "bg-success"
        // },
        // {
        //     title: "P302 - CNTT1 - Mạng máy tính",
        //     start: '2023-05-24 07:00:00',
        //     end: '2023-05-24 09:25:00',
        //     // className: "bg-success"
        // },
        // {
        //     title: "P302 - CNTT1 - Mạng máy tính",
        //     start: '2023-05-24 09:35:00',
        //     end: '2023-05-24 12:00:00',
        //     // className: "bg-success"
        // },
        // {
        //     title: "P302 - CNTT1 - Mạng máy tính",
        //     start: '2023-05-24 15:25:00',
        //     end: '2023-05-24 18:00:00',
        //     // className: "bg-success"
        // },
        // {
        //     title: "P302 - CNTT1 - Mạng máy tính",
        //     start: '2023-05-25 07:00:00',
        //     end: '2023-05-25 09:25:00',
        //     // className: "bg-success"
        // },
        // {
        //     title: "P302 - CNTT1 - Mạng máy tính",
        //     start: '2023-05-25 09:35:00',
        //     end: '2023-05-25 12:00:00',
        //     // className: "bg-success"
        // },
        // {
        //     title: "P302 - CNTT1 - Mạng máy tính",
        //     start: '2023-05-25 15:25:00',
        //     end: '2023-05-25 18:00:00',
        //     // className: "bg-success"
        // },
        // {
        //     title: "P302 - CNTT1 - Mạng máy tính",
        //     start: '2023-05-26 07:00:00',
        //     end: '2023-05-26 09:25:00',
        //     // className: "bg-success"
        // },
        // {
        //     title: "P302 - CNTT1 - Mạng máy tính",
        //     start: '2023-05-26 09:35:00',
        //     end: '2023-05-26 12:00:00',
        //     // className: "bg-success"
        // },
        // {
        //     title: "P302 - CNTT1 - Mạng máy tính",
        //     start: '2023-05-26 15:25:00',
        //     end: '2023-05-26 18:00:00',
        //     // className: "bg-success"
        // }],
        v = (document.getElementById("external-events"), document.getElementById("calendar"));

        function u(e) {
            // l.modal("show"), a.removeClass("was-validated"), a[0].reset(), g("#event-title").val(), g("#event-category").val(), t.text("Add Event"), r = e
        }
        var m = new FullCalendar.Calendar(v, {
            plugins: ["bootstrap", "interaction", "dayGrid", "timeGrid"],
            buttonText: {
                // prev: 'Trước',
                // next: 'Sau',
                today: 'Hôm nay',
                month: 'Tháng',
                week: 'Tuần',
                day: 'Ngày',
                list: 'Lịch biểu',
            },
            // slotLabelFormat: {
            //     hour: '2-digit',
            //     minute: '2-digit',
            //     omitZeroMinute: false,
            //     meridiem: false,
            //     hour12: false
            // },
            // dayHeaderFormat: {
                // weekday: 'short', // Hiển thị ngày trong tuần dạng rút gọn (Ví dụ: T2, T3, T4)
                // month: 'numeric', // Hiển thị tháng dạng số (Ví dụ: 1, 2, 3)
                // day: 'numeric' // Hiển thị ngày trong tháng dạng số (Ví dụ: 1, 2, 3)
            // },
            // slotLabelInterval: '02:00:00',
            // minTime: '06:00:00', // Thời gian tối thiểu (6am)
            // maxTime: '22:00:00', // Thời gian tối đa (10pm)
            allDaySlot: false, // Bỏ đi hàng "All-day"
            editable: !0,
            droppable: !0,
            selectable: !0,
            defaultView: "timeGridWeek",
            themeSystem: "bootstrap",
            header: {
                left: "prev,next today",
                center: "title",
                right: "timeGridWeek,timeGridDay"
                // right: 'month,agendaWeek,agendaDay'
            },
            // ... Cấu hình khác
    viewDidMount: function(info) {
        updateTitle("aaaa");
      },
      dateClick: function(info) {
        updateTitle("aaaa");
      },
            eventClick: function(e) {
                l.modal("show"), a[0].reset(), i = e.event, g("#event-title").val(i.title), r = null, t.text("Chi tiết thời khoá biểu"), r = null, g("#event-time").val(i.start.getHours().toString().padStart(2, '0')+':'+i.start.getMinutes().toString().padStart(2, '0')+' - '+i.end.getHours().toString().padStart(2, '0')+':'+i.end.getMinutes().toString().padStart(2, '0'))
            },
            dateClick: function(e) {
                u(e)
            },
            events: c
        });
        

        function updateTitle(text) {
            var titleElement = document.querySelector('.fc-toolbar-title');
            titleElement.textContent = text;
          }
          
        m.render(), g(a).on("submit", function(e) {
            e.preventDefault();
            g("#form-event :input");
            var t, a = g("#event-title").val(),
                n = g("#event-category").val();
            !1 === s[0].checkValidity() ? (event.preventDefault(), event.stopPropagation(), s[0].classList.add("was-validated")) : (i ? (i.setProp("title", a), i.setProp("classNames", [n])) : (t = {
                title: a,
                start: r.date,
                allDay: r.allDay,
                className: n
            }, m.addEvent(t)), l.modal("hide"))
        }), g("#btn-delete-event").on("click", function(e) {
            i && (i.remove(), i = null, l.modal("hide"))
        }), g("#btn-new-event").on("click", function(e) {
            u({
                date: new Date,
                allDay: !0
            })
        })
    }, g.CalendarPage = new e, g.CalendarPage.Constructor = e
}(window.jQuery),
function() {
    "use strict";
    window.jQuery.CalendarPage.init()
}();

