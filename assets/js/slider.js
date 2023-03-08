var slider = tns({
    container: ".my-slider",
    items: 4,
    autoplay: true,
    mouseDrag: true,
    controls: false,
    edgePadding:100,
    responsive: {
        350: {
            items: 1,
            gutter: 50,
        },
        992: {
            items: 2,
            gutter: 50,
        },
    },
});
