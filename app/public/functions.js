date = new Date();
currentD = date.getDate();
currentM = date.getMonth();
currentY = date.getFullYear();
monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

let calendarM = currentM;
let calendarY = currentY;

function createCalendar() {

    let febDays;
    if (calendarY % 4 === 0) {
        febDays = 29;
    } else {
        febDays = 28;
    }
    let monthDays = ["31", "" + febDays + "", "31", "30", "31", "30", "31", "31", "30", "31", "30", "31"];

    let i = 1;
    let wd = 0;
    let num = monthDays[calendarM];
    let tableHTML = "";

    tableHTML += "<thead><tr><th>Mon</th><th>Tue</th><th>Wen</th><th>Thu</th><th>Fri</th><th>Sat</th><th>Sun</th></tr></thead>";
    tableHTML += "<tbody><tr>";
    while (i <= num) {
        if (wd > 6) {
            wd = 0;
            tableHTML += "</tr><tr>";
        }

        if (i === currentD && calendarM === currentM && calendarY === currentY) {
            tableHTML += "<td data-date=" + createDate(i,calendarM+1,calendarY) + " class=\"day today\" >" + i + "</td>";
        } else {
            tableHTML += "<td data-date=" + createDate(i,calendarM+1,calendarY) + " class=\"day\" >" + i + "</td>";
        }
        wd++;
        i++;
    }
    tableHTML += "</tr></tbody>";
    document.querySelector(".calendar__content").insertAdjacentHTML("beforeend", tableHTML);
    console.log(calendarM + " " + calendarY + " " + num + " " + monthDays[1] + " " + febDays);
}

document.addEventListener('DOMContentLoaded', createCalendar, false);

function loadMY() {
    const divM = document.querySelector(".calendar__m");
    divM.innerHTML = monthNames[calendarM];
    const divY = document.querySelector(".calendar__y");
    divY.innerHTML = calendarY;
}

document.addEventListener('DOMContentLoaded', loadMY, false);

function prevMonth() {
    calendarY = (calendarM === 0) ? calendarY - 1 : calendarY;
    calendarM = (calendarM === 0) ? 11 : calendarM - 1;
    loadMY();

    const tHTML = document.querySelector(".calendar__content");
    tHTML.innerHTML = "";
    createCalendar();
}

function nextMonth() {
    calendarY = (calendarM === 11) ? calendarY + 1 : calendarY;
    calendarM = (calendarM + 1) % 12;
    loadMY();

    const tHTML = document.querySelector(".calendar__content");
    tHTML.innerHTML = "";
    createCalendar();
}

document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.day').forEach(item => {
        item.addEventListener('click', event => {
            alert(event.target.innerText);
        })
    })
}, false);

function createDate(day, month, year) {
    if (day < 10) {
        day = "0" + day;
    }
    if (month < 10) {
        month = "0" + month;
    }
    return year+"-"+month+"-"+day;
}

