define(['jquery'], function($) {
    document.querySelector(".add-to-card-button").addEventListener("mouseover", function () {
        document.querySelector(".add-to-card-button").classList.toggle('action');
        console.log('1add action')
    })


    document.querySelector(".add-to-card-button").addEventListener("mouseout", function () {
        document.querySelector(".add-to-card-button").classList.remove('action');
        console.log('remove action')
    })
    $(".add-to-card-button").click(function (){
        $(".add-to-card-button").addClass('action')
        console.log('add action')
    })
});
