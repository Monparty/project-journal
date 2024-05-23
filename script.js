function autoHeight(element) {
  element.style.height = "130px";
  element.style.height = (element.scrollHeight) + "px";
}

const weekday = ["SU","M","T","W","TH","F","S"];
const d = new Date();
let day = weekday[d.getDay()];

if (day == "SU") {
    document.getElementById("SU").setAttribute("checked", "true")
}
if (day == "M") {
    document.getElementById("M").setAttribute("checked", "true")
}
if (day == "T") {
    document.getElementById("T").setAttribute("checked", "true")
}
if (day == "W") {
    document.getElementById("W").setAttribute("checked", "true")
}
if (day == "TH") {
    document.getElementById("TH").setAttribute("checked", "true")
}
if (day == "F") {
    document.getElementById("F").setAttribute("checked", "true")
}
if (day == "S") {
    document.getElementById("S").setAttribute("checked", "true")
}

var isDay = d.getDate();
var month = d.getMonth() + 1;
var year = d.getFullYear();
if (month < 10) month = "0" + month;
if (isDay < 10) isDay = "0" + isDay;

var today = year + "-" + month + "-" + isDay;
document.getElementById('toDay').value = today;

function changeSelect1() {
    window.location.href = 'journalList.php';
}

function changeSelect2() {
    window.location.href = 'index.html';
}

function logo() {
    window.location.href = 'index.html';
}