// Timer for the isle
var timers = {
    timer1: null,
    timer2: null,
    timer3: null
};

function startTimer(id, duration) {
  var timerElement = $('#' + id);
  var initialMinutes = parseInt(duration.split(':')[0]);
  var initialSeconds = parseInt(duration.split(':')[1]);

  var minutes = initialMinutes;
  var seconds = initialSeconds;

  timers[id] = setInterval(function() {
      if (seconds === 0) {
          if (minutes === 0) {
              clearInterval(timers[id]);
              return;
          }
          minutes--;
          seconds = 59;
      } else {
          seconds--;
      }

      timerElement.text(('0' + minutes).slice(-2) + ':' + ('0' + seconds).slice(-2));
  }, 1000);
}

function startTimer3th(id, initialDuration) {
  var timerElement = $('#' + id);
  var time = initialDuration.split(':');
  var minutes = parseInt(time[0]);
  var seconds = parseInt(time[1]);

  timers[id] = setInterval(function() {
      seconds++;

      if (seconds === 60) {
          minutes++;
          seconds = 0;
      }

      timerElement.text(('0' + minutes).slice(-2) + ':' + ('0' + seconds).slice(-2));
  }, 1000);
}

function stopTimer(id) {
    clearInterval(timers[id]);
    timers[id] = null;
}

function resetTimer(id, duration) {
    clearInterval(timers[id]);
    $('#' + id).text(duration);
    timers[id] = null;
}

// Timer 1 buttons
$('#start1').click(function() {
    if (timers.timer1 === null) {
        startTimer('timer1', '2:00');
    }
});

$('#stop1').click(function() {
    stopTimer('timer1');
});

$('#reset1').click(function() {
    resetTimer('timer1', '2:00');
});

// Timer 2 buttons
$('#start2').click(function() {
    if (timers.timer2 === null) {
        startTimer('timer2', '20:00');
    }
});

$('#stop2').click(function() {
    stopTimer('timer2');
});

$('#reset2').click(function() {
    resetTimer('timer2', '20:00');
});

// Timer 3 buttons
$('#start3').click(function() {
    if (timers.timer3 === null) {
      startTimer3th('timer3', '0:00');
    }
});

$('#stop3').click(function() {
    stopTimer('timer3');
});

$('#reset3').click(function() {
    resetTimer('timer3', '0:00');
});


$('#start3').click(function() {
  if (timers.timer3 === null) {
    startTimer3th('timer3', '0:00');
  }
});