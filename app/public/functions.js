function eventPopUp() {
    document.querySelectorAll('.day').forEach(item => {
        item.addEventListener('click', event => {
            alert(event.target.innerText);
        })
    })
}

document.addEventListener('DOMContentLoaded', function () {

    today = new Date();
    currentD = today.getDate();
    currentM = today.getMonth();
    currentY = today.getFullYear();

    monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    monthDays = ["31", "" + ((currentY % 4 == 0) ? 29 : 28 )+ "", "31", "30", "31", "30", "31", "31", "30", "31", "30", "31"];

    let i = 1;
    let wd =0;
    let num = monthDays[currentM];
    tableHTML = "";

    tableHTML += "<thead><tr><th>Mon</th><th>Tue</th><th>Wen</th><th>Thu</th><th>Fri</th><th>Sat</th><th>Sun</th></tr></thead>";
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
    tableHTML += "</tr></tbody>";
    document.querySelector(".calendar__content").insertAdjacentHTML("beforeend",tableHTML);
}, false);

document.addEventListener('DOMContentLoaded',function (){
    const divM = document.querySelector(".calendar__m");
    divM.innerHTML = monthNames[currentM];
    const divY = document.querySelector(".calendar__y");
    divY.innerHTML = currentY;
}, false);

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
