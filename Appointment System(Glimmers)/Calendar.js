const times = document.querySelectorAll('.time');

times.forEach(time => {
    time.addEventListener('click', () => {
        alert(`Appointment scheduled for ${time.getAttribute('data-time')}`);
    });
});