var slider = tns({
    container: ".my-slider",
    "items": 2,
    "center": true,
    "loop": false,
    "swipeAngle": true,
    mouseDrag:true,
    autoplay:false,
    controls: false,
    edgePadding:100,
    responsive: {
        350: {
            items: 1,
            gutter: 10,
            autoplay:true
        },
        992: {
            items: 2,
            gutter: 50,
        },
    },
});
