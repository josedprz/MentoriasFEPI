document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    initialDate: '2024-06-07',
    headerToolbar: {
      left: 'prev,next today',
      center: 'title',
      right: 'dayGridMonth,timeGridWeek,timeGridDay'
    },
    events: function(fetchInfo, successCallback, failureCallback) {
      fetch('js/obtener_eventos.php')
        .then(response => response.json())
        .then(data => {
          successCallback(data);
        })
        .catch(error => {
          failureCallback(error);
        });
    }
  });

  calendar.render();
});
