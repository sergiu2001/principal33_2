function alertPopUp(day) {
    if (day % 10 == 1 && day != 11)
        alert(`Today is the ${day}st of July!`);
    else if (day % 10 == 2 && day != 12)
        alert(`Today is the ${day}nd of July!`);
    else if (day % 10 == 3 && day != 13)
        alert(`Today is the ${day}rd of July!`);
    else alert(`Today is the ${day}th of July!`);
}

function eventPopUp() {
    document.querySelectorAll('.day').forEach(item => {
        item.addEventListener('click', event => {
            alert(event.target.innerText);
        })
    })
}

let today = new Date();
let currentD = today.getDate();
let currentM = today.getMonth();
let currentY = today.getFullYear();

let monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
if (currentM == 1) {
    febDays = (currentY % 4 == 0) ? 29 : 28;
}
let monthDays = ["31", "" + febDays + "", "31", "30", "31", "30", "31", "31", "30", "31", "30", "31"];

function createCalendar() {

    let i = 1;
    let tomorrow = new Date(nextMonth() + ' 1,' + currentY);
    let wd = tomorrow.getDay();
    let num = monthDays[currentM];

    let tableHTML = "";
    tableHTML += "<table></table><thead><tr><th>Mon</th><th>Tue</th><th>Wen</th><th>Thu</th><th>Fri</th><th>Sat</th><th>Sun</th></tr></thead>";
    tableHTML += "<tbody><tr>";
    while (i <= num) {
        if (wd > 6) {
            wd = 0;
            tableHTML += "</tr><tr>";
        }

        if (i == currentD) {
            tableHTML += "<td class=\"day today\" >" + i + "</td>";
        } else {
            tableHTML += "<td class=\"day\" >" + i + "</td>";
        }
        wd++;
        i++;
    }
    tableHTML += "</tr></tbody></table>";
    document.getElementsByClassName("content__container").innerHTML=tableHTML;
    alert("hai");
}

function prevMonth() {
    currentY = (currentM === 0) ? currentY - 1 : currentY;
    currentM = (currentM === 0) ? 11 : currentM - 1;
    const divM = document.querySelector(".calendar__m");
    divM.innerHTML = monthNames[currentM];
    const divY = document.querySelector(".calendar__y");
    divY.innerHTML = currentY;
}

function nextMonth() {
    currentY = (currentM === 11) ? currentY + 1 : currentY;
    currentM = (currentM + 1) % 12;
    const divM = document.querySelector(".calendar__m");
    divM.innerHTML = monthNames[currentM];
    const divY = document.querySelector(".calendar__y");
    divY.innerHTML = currentY;
}
