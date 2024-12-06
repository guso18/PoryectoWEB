let appointments = [];

document.addEventListener("DOMContentLoaded", function() {
    loadAppointments();
});

function loadAppointments() {
    fetch('PHP/get_appointments.php')
        .then(response => response.json())
        .then(data => {
            appointments = data;
            renderCalendar();
        })
        .catch(error => console.error('Error cargando citas:', error));
}

const reservationForm = document.getElementById('reservationForm');
reservationForm.addEventListener('submit', function(event) {
    event.preventDefault();

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const time = document.getElementById('time').value;
    const services = Array.from(document.querySelectorAll('input[type="checkbox"]:checked')).map(cb => cb.value);

    if (!selectedDate || !time) {
        alert('Por favor selecciona una fecha y un horario.');
        return;
    }

    const appointmentDate = selectedDate.toISOString().split('T')[0];

    // Verificar si la fecha y hora ya están ocupadas
    const isSlotTaken = appointments.some(appointment => {
        const [date, timeSlot] = appointment.Fecha_Cita.split(' ');
        return date === appointmentDate && timeSlot === time;
    });

    if (isSlotTaken) {
        alert('Esta fecha y hora ya están ocupadas. Por favor selecciona otro horario.');
    } else {
        const newAppointment = {
            date: appointmentDate,
            time: time,
            name: name,
            email: email,
            services: services
        };

        fetch('PHP/save_appointment.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(newAppointment)
        })
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                alert(data.error);
            } else {
                alert('Cita agendada con éxito!');
                window.location.href = 'HTMLS/cliente.php';
            }
        })
        .catch(error => console.error('Error guardando citas:', error));
    }
});

const currentDate = new Date();
let currentMonth = currentDate.getMonth();
let currentYear = currentDate.getFullYear();
let selectedDate = null;

const calendarBody = document.getElementById('calendarBody');
const currentMonthElement = document.getElementById('currentMonth');
const selectedDateElement = document.getElementById('selectedDate');

const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

prevBtn.addEventListener('click', () => {
    currentMonth--;
    renderCalendar();
});

nextBtn.addEventListener('click', () => {
    currentMonth++;
    renderCalendar();
});

function renderCalendar() {
    const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();
    const firstDayIndex = new Date(currentYear, currentMonth, 1).getDay();

    currentMonthElement.textContent = new Date(currentYear, currentMonth).toLocaleDateString('default', { month: 'long', year: 'numeric' });

    let days = '';

    for (let i = 1; i <= firstDayIndex; i++) {
        days += `<div class="calendar-day"></div>`;
    }

    for (let i = 1; i <= daysInMonth; i++) {
        const date = new Date(currentYear, currentMonth, i);
        const className = getDayClassName(date);
        days += `<div class="calendar-day ${className}" onclick="selectDate(${i})">${i}</div>`;
    }

    calendarBody.innerHTML = days;
}

function selectDate(day) {
    selectedDate = new Date(currentYear, currentMonth, day);
    renderCalendar();
    updateSelectedDate();
}

function updateSelectedDate() {
    if (selectedDate) {
        selectedDateElement.textContent = `Fecha seleccionada: ${formatDate(selectedDate)}`;
    } else {
        selectedDateElement.textContent = `Fecha seleccionada:`;
    }
}

function getDayClassName(date) {
    if (selectedDate && date.toDateString() === selectedDate.toDateString()) {
        return 'selected';
    }
    return '';
}

function formatDate(date) {
    return `${date.getDate()}/${date.getMonth() + 1}/${date.getFullYear()}`;
}

renderCalendar();
updateSelectedDate();
