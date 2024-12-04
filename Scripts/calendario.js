let appointments = [];

document.addEventListener("DOMContentLoaded", function() {
    loadAppointments();
});

function loadAppointments() {
    appointments = localStorage.getItem('appointments') ? JSON.parse(localStorage.getItem('appointments')) : [];
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
    const isSlotTaken = appointments.some(appointment => appointment.date === appointmentDate && appointment.time === time);

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

        appointments.push(newAppointment);
        localStorage.setItem('appointments', JSON.stringify(appointments));
        alert('Cita agendada, pronto le llegará un correo de su cita');
        window.location.href = 'index.html';
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



//cuando queremos hacer ya backend
function loadAppointments() {
    fetch('citas.json')
        .then(response => response.json())
        .then(data => {
            appointments = data;
        })
        .catch(error => console.error('Error cargando citas:', error));
}
function saveAppointments() {
    fetch('citas.json', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(appointments)
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Error guardando citas');
        }
    })
    .catch(error => console.error('Error guardando citas:', error));
}

document.getElementById('reservationForm').addEventListener('submit', function(event) {
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

    const isSlotTaken = appointments.some(appointment => appointment.date === appointmentDate && appointment.time === time);

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

        appointments.push(newAppointment);
        saveAppointments();
        alert('Cita agendada, pronto le llegará un correo de su cita');
        window.location.href = 'index.html';
    }
});
