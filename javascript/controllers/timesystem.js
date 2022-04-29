window.onload = function timeSystem() {
    var time = moment().format('LT');
    document.getElementById('timesystem').textContent = time;
}