$('.container').hide()
$(document).ready(function () {

    function showPage() {
        $('.lds-roller').hide('slow')
        $('.container').show('slow')
    }
    showPage()
})