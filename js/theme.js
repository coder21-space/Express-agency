;(function($) {
    "use strict";
       
    /*----------------------------------------------------*/
    /*  Home Slider js
    /*----------------------------------------------------*/
    function home_slider(){
        if ( $('#home-slider').length ){
            $("#home-slider").revolution({
                sliderType:"fullscreen",
                sliderLayout:"auto",
                delay:9000,
                disableProgressBar:"on",
                navigation: {
                    onHoverStop: 'off',
                    touch:{
                        touchenabled:"on"
                    },
                    arrows: {
                        style: "Gyges",
                        enable: true,
                        hide_onmobile: false,
                        hide_onleave: false,
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 17,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 17,
                            v_offset: 0
                        }
                    },
                },			
                responsiveLevels:[4096,1200,992,768,480],
                gridwidth:[1140,970,750,450,290],
                gridheight:[1000,900,750,480,480],
                lazyType:"none",
                parallax: {
                    type:"mouse",
                    origo:"slidercenter",
                    speed:2000,
                    levels:[2,3,4,5,6,7,12,16,10,50],
                },
            })
        }
    }
    home_slider();
    
    /*----------------------------------------------------*/
    /*  Home Slider js
    /*----------------------------------------------------*/
    function home_slider2(){
        if ( $('#home-slider2').length ){
            $("#home-slider2").revolution({
                sliderType:"fullscreen",
                sliderLayout:"auto",
                delay:9000,
                disableProgressBar:"on",
                navigation: {
                    onHoverStop: 'off',
                    touch:{
                        touchenabled:"on"
                    },
                    arrows: {
                        style: "Gyges",
                        enable: false,
                        hide_onmobile: false,
                        hide_onleave: false,
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 17,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 17,
                            v_offset: 0
                        }
                    },
                },			
                responsiveLevels:[4096,1200,992,768,480],
                gridwidth:[1140,940,720,700,290],
                gridheight:[794,794,700,500,480],
                lazyType:"none",
                parallax: {
                    type:"mouse",
                    origo:"slidercenter",
                    speed:2000,
                    levels:[2,3,4,5,6,7,12,16,10,50],
                },
            })
        }
    }
    home_slider2();
    
})(jQuery)
