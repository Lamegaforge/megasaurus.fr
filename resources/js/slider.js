"use strict";

import "@splidejs/splide/css/core";
import Splide from "@splidejs/splide";

new Splide(".js-latest-clips-slider", {
    type: "slide",
    padding: "3rem",
    mediaQuery: "min",
    breakpoints: {
        640: {
            perPage: 2,
        },
        1024: {
            perPage: 4,
            perMove: 4,
        }
    },
    classes: {
        prev: "arrow arrow--prev",
        next: "arrow arrow--next"
    },
    pagination: false,
}).mount();