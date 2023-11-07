//Calendar
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        hiddenDays: [0],
        selectable: true,
        locale: 'pt-br',
        themeSystem: '',

        select: function(info) {
            $('#agendar #date').val(info.start.toLocaleString());
            $('#agendar').modal('show');
        }

    });
    calendar.render();
});