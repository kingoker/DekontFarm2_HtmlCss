new Swiper('.swiper-container',{
    direction: 'vertical',

    pagination: {
        el: '.header',
        clickable: true,
    },

    scrollbar:{
        el: '.swiper-scrollbar',
        draggable: true,
    },

    keyboard:{
        enable: true,
        onlyInViewport: true,
        pageUpDown: true,
    },

    mousewheel:{
        sensitivity: 1,
    }
});