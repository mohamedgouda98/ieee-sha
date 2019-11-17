function countDown() {
  "use strict";
var now = new Date(),
  eventDate = new Date('Sep 24, 2019 00:00:00'),
  currentTime = now.getTime(),
  eventTime = eventDate.getTime(),
  remTime = eventTime - currentTime,
  sec = Math.floor(remTime / 1000),
  min = Math.floor(sec / 60),
  hur = Math.floor(min / 60),
  day = Math.floor(hur / 24);

  sec %= 60;
  min %= 60;
  hur %= 24;

    document.getElementById('days').textContent = day;
    document.getElementById('hours').textContent = hur;
    document.getElementById('minutes').textContent = min;
    document.getElementById('seconds').textContent = sec;

    setTimeout(countDown, 1000);
}

countDown();