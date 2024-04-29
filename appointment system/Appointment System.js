const monthEl = document.querySelector('.month .date');
const prevBtn = document.querySelector('.prev');
const nextBtn = document.querySelector('.next');
const daysEl = document.querySelector('.days');

let date = new Date();
let year = date.getFullYear();
let month = date.getMonth();

const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
const days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Say'];

showMonth();

function showMonth() {
  monthEl.textContent = months[month] + ' ' + year;
  daysEl.innerHTML = '';

const firstDay = new Date(year, month, 1).getDay();
  const daysInMonth = new Date(year, month + 1, 0).getDate();

  for (let i = 0; i < firstDay; i++) {
    const emptyDay = document.createElement('div');
    daysEl.appendChild(emptyDay);
  }

  for (let day = 1; day <= daysInMonth; day++) {
    const dayEl = document.createElement('div');
    dayEl.textContent = day;
    dayEl.classList.add('day');
    if (day === date.getDate() && year === date.getFullYear() && month === date.getMonth()) {
      dayEl.classList.add('day');
    }
    dayEl.addEventListener('click', () => {
      const clickedDay = document.querySelector('.day.clicked');
      if (clickedDay) {
        clickedDay.classList.remove('clicked');
      }
      dayEl.classList.add('clicked');
    });
    daysEl.appendChild(dayEl);
  }
}

prevBtn.addEventListener('click', () => {
  month -= 1;
  if (month < 0) {
    month = 11;
    year -= 1;
  }
  showMonth();
});

nextBtn.addEventListener('click', () => {
  month += 1;
  if (month > 11) {
    month = 0;
    year += 1;
  }
  showMonth();
});