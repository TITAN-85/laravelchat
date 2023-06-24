// // File: resources/js/countdown.js

// // Set the target date and time for the countdown
// const targetDate = new Date("2023-06-25T00:00:00");

// // Function to calculate and update the countdown
// function updateCountdown() {
//   const now = new Date().getTime();
//   const distance = targetDate - now;

//   // Calculate days, hours, minutes, and seconds
//   const days = Math.floor(distance / (1000 * 60 * 60 * 24));
//   const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
//   const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
//   const seconds = Math.floor((distance % (1000 * 60)) / 1000);

//   // Update the countdown element
//   document.getElementById("countdown").innerHTML = `${days}d ${hours}h ${minutes}m ${seconds}s`;

//   // If the countdown is over, display a message
//   if (distance < 0) {
//     document.getElementById("countdown").innerHTML = "Countdown is over!";
//   }
// }

// // Update the countdown every second
// setInterval(updateCountdown, 1000);






// // File: resources/js/countdown.js

// // Set the target date and time for the countdown
// const targetDate = new Date("2023-06-25T00:00:00");

// // Declare variables for countdown and timer
// let countdownInterval;
// let timerRunning = false;

// // Function to calculate and update the countdown
// function updateCountdown() {
//   const now = new Date().getTime();
//   const distance = targetDate - now;

//   // Calculate days, hours, minutes, and seconds
//   const days = Math.floor(distance / (1000 * 60 * 60 * 24));
//   const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
//   const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
//   const seconds = Math.floor((distance % (1000 * 60)) / 1000);

//   // Update the countdown element
//   document.getElementById("countdown").innerHTML = `${days}d ${hours}h ${minutes}m ${seconds}s`;

//   // If the countdown is over, display a message
//   if (distance < 0) {
//     document.getElementById("countdown").innerHTML = "Countdown is over!";
//     clearInterval(countdownInterval);
//     timerRunning = false;
//   }
// }

// // Function to start the timer
// function startTimer() {
//   if (!timerRunning) {
//     updateCountdown(); // Run immediately
//     countdownInterval = setInterval(updateCountdown, 1000);
//     timerRunning = true;
//   }
// }

// // Function to stop the timer
// function stopTimer() {
//   if (timerRunning) {
//     clearInterval(countdownInterval);
//     timerRunning = false;
//   }
// }

// // Event listener for the start button
// document.getElementById("startButton").addEventListener("click", startTimer);

// // Event listener for the stop button
// document.getElementById("stopButton").addEventListener("click", stopTimer);





    // // Timer for 2 minutes
    // var timer1 = setInterval(function() {
    //     var timerElement = $('#timer1');
    //     var time = timerElement.text().split(':');
    //     var minutes = parseInt(time[0]);
    //     var seconds = parseInt(time[1]);

    //     if (seconds === 0) {
    //         if (minutes === 0) {
    //             clearInterval(timer1);
    //             return;
    //         }
    //         minutes--;
    //         seconds = 59;
    //     } else {
    //         seconds--;
    //     }

    //     timerElement.text(('0' + minutes).slice(-2) + ':' + ('0' + seconds).slice(-2));
    // }, 1000);

    // // Timer for 20 minutes
    // var timer2 = setInterval(function() {
    //     var timerElement = $('#timer2');
    //     var time = timerElement.text().split(':');
    //     var minutes = parseInt(time[0]);
    //     var seconds = parseInt(time[1]);

    //     if (seconds === 0) {
    //         if (minutes === 0) {
    //             clearInterval(timer2);
    //             return;
    //         }
    //         minutes--;
    //         seconds = 59;
    //     } else {
    //         seconds--;
    //     }

    //     timerElement.text(('0' + minutes).slice(-2) + ':' + ('0' + seconds).slice(-2));
    // }, 1000);

    // // Timer for time spent in the game
    // var startTime = new Date().getTime();
    // var timer3 = setInterval(function() {
    //     var timerElement = $('#timer3');
    //     var currentTime = new Date().getTime();
    //     var elapsedTime = currentTime - startTime;

    //     var minutes = Math.floor(elapsedTime / 60000);
    //     var seconds = Math.floor((elapsedTime % 60000) / 1000);

    //     timerElement.text(('0' + minutes).slice(-2) + ':' + ('0' + seconds).slice(-2));
    // }, 1000);





    // // TIMERS STOP BUTTONS DONT WORK
    // var timers = {
    //     timer1: null,
    //     timer2: null,
    //     timer3: null
    // };

    // function startTimer(id, duration) {
    //     var timerElement = $('#' + id);
    //     var time = timerElement.text().split(':');
    //     var minutes = parseInt(time[0]);
    //     var seconds = parseInt(time[1]);

    //     timers[id] = setInterval(function() {
    //         if (seconds === 0) {
    //             if (minutes === 0) {
    //                 clearInterval(timers[id]);
    //                 return;
    //             }
    //             minutes--;
    //             seconds = 59;
    //         } else {
    //             seconds--;
    //         }

    //         timerElement.text(('0' + minutes).slice(-2) + ':' + ('0' + seconds).slice(-2));
    //     }, 1000);
    // }

    // function stopTimer(id) {
    //     clearInterval(timers[id]);
    // }

    // function resetTimer(id, duration) {
    //     clearInterval(timers[id]);
    //     $('#' + id).text(duration);
    // }

    // // Timer 1 buttons
    // $('#start1').click(function() {
    //     startTimer('timer1', '2:00');
    // });

    // $('#stop1').click(function() {
    //     stopTimer('timer1');
    // });

    // $('#reset1').click(function() {
    //     resetTimer('timer1', '2:00');
    // });

    // // Timer 2 buttons
    // $('#start2').click(function() {
    //     startTimer('timer2', '20:00');
    // });

    // $('#stop2').click(function() {
    //     stopTimer('timer2');
    // });

    // $('#reset2').click(function() {
    //     resetTimer('timer2', '20:00');
    // });

    // // Timer 3 buttons
    // $('#start3').click(function() {
    //     startTimer('timer3', '0:00');
    // });

    // $('#stop3').click(function() {
    //     stopTimer('timer3');
    // });

    // $('#reset3').click(function() {
    //     resetTimer('timer3', '0:00');
    // });







// // GAME TIMER DONT START
//     var timers = {
//         timer1: null,
//         timer2: null,
//         timer3: null
//     };

//     function startTimer(id, duration) {
//         var timerElement = $('#' + id);
//         var time = timerElement.text().split(':');
//         var minutes = parseInt(time[0]);
//         var seconds = parseInt(time[1]);

//         timers[id] = setInterval(function() {
//             if (seconds === 0) {
//                 if (minutes === 0) {
//                     clearInterval(timers[id]);
//                     return;
//                 }
//                 minutes--;
//                 seconds = 59;
//             } else {
//                 seconds--;
//             }

//             timerElement.text(('0' + minutes).slice(-2) + ':' + ('0' + seconds).slice(-2));
//         }, 1000);
//     }

//     function stopTimer(id) {
//         clearInterval(timers[id]);
//         timers[id] = null;
//     }

//     function resetTimer(id, duration) {
//         clearInterval(timers[id]);
//         $('#' + id).text(duration);
//         timers[id] = null;
//     }

//     // Timer 1 buttons
//     $('#start1').click(function() {
//         if (timers.timer1 === null) {
//             startTimer('timer1', '2:00');
//         }
//     });

//     $('#stop1').click(function() {
//         stopTimer('timer1');
//     });

//     $('#reset1').click(function() {
//         resetTimer('timer1', '2:00');
//     });

//     // Timer 2 buttons
//     $('#start2').click(function() {
//         if (timers.timer2 === null) {
//             startTimer('timer2', '20:00');
//         }
//     });

//     $('#stop2').click(function() {
//         stopTimer('timer2');
//     });

//     $('#reset2').click(function() {
//         resetTimer('timer2', '20:00');
//     });

//     // Timer 3 buttons
//     $('#start3').click(function() {
//         if (timers.timer3 === null) {
//             startTimer('timer3', '0:00');
//         }
//     });

//     $('#stop3').click(function() {
//         stopTimer('timer3');
//     });

//     $('#reset3').click(function() {
//         resetTimer('timer3', '0:00');
//     });









var timers = {
    timer1: null,
    timer2: null,
    timer3: null
};

function startTimer(id, duration) {
    var timerElement = $('#' + id);
    var time = timerElement.text().split(':');
    var minutes = parseInt(time[0]);
    var seconds = parseInt(time[1]);

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
        startTimer('timer3', '0:00');
    }
});

$('#stop3').click(function() {
    stopTimer('timer3');
});

$('#reset3').click(function() {
    resetTimer('timer3', '0:00');
});

// Start the game timer on page load
$(document).ready(function() {
    startTimer('timer3', '0:00');
});