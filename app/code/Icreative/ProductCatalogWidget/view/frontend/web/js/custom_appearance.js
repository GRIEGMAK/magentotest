define(['jquery'], function($) {
    $(".product-item-info").mouseenter(function () {
        this.classList.toggle('focus-item');
    })

    $(".product-item-info").mouseleave(function () {
        this.classList.remove('focus-item');
    })
});
