/*$(document).ready(function () {//se for mobile, troca a informação
    if ($(window).width() < 500) {
        let aux = $('#compre_item1')[0].innerHTML + "<br><br>" + $('#div_video')[0].innerHTML
        //$('#div_video')[0].innerHTML+=($('#compre')[0].innerHTML)
        $('#div_video')[0].innerHTML = aux
        $('#compre_item1').hide()
    }
})*/
$(window).on('resize',function(){
    if ($(window).width() < 500) {
        let aux = $('#compre_item1')[0].innerHTML + "<br><br>"
        $('#mob_compre_item1').show()
        $('#mob_compre_item1')[0].innerHTML = aux
        $('#compre_item1').hide()
    }
    else{
        $('#compre_item1').show()
        $('#mob_compre_item1').hide()
    }
})
const second = 1000;
const minute = second * 60;
const hour = minute * 60;
const day = hour * 24;
const data_fim = new Date('2022/04/01 23:59:00')
setInterval(() => {
    let data_inicio = new Date()
    var diff = moment(data_fim, "DD/MM/YYYY HH:mm:ss").diff(moment(data_inicio, "DD/MM/YYYY HH:mm:ss"));
    $('#dias')[0].innerText = moment.duration(diff)._data.days
    $('#horas')[0].innerText = moment.duration(diff)._data.hours
    $('#minutos')[0].innerText = moment.duration(diff)._data.minutes
    $('#segundos')[0].innerText = moment.duration(diff)._data.seconds
}, 1000);
var slides = {
    op: 1,
    com: 1
}
function slide(e, div) {
    if (slides[div] + e > 0 && slides[div] + e <= 3) {
        $('#'+div + slides[div]).hide()
        slides[div] += e
        $('#'+div + slides[div]).show()
        $('#'+div + slides[div]).css('visibility', 'visible')
    }
}
function mostracoment(a) {
    if ($('#maisp' + a)[0].innerText == '+') {
        $('#r' + a).show()
        $('#maisp' + a)[0].innerText = '-'
    }
    else {
        $('#r' + a).hide()
        $('#maisp' + a)[0].innerText = '+'
    }
}
function mostraform() {
    $('#form').css('display', 'block')
}
$('.let').on('input', function () {
    $(this).val($(this).val().replace(/[\d]/, ''))
})