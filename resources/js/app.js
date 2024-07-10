import './bootstrap';
import 'bootstrap';

//========= Category Slider 
tns({
    container: '.category-slider',
    items: 3,
    slideBy: 'page',
    autoplay: false,
    mouseDrag: true,
    gutter: 0,
    nav: false,
    controls: true,
    controlsText: ['<i class="lni lni-chevron-left"></i>', '<i class="lni lni-chevron-right"></i>'],
    responsive: {
        0: {
            items: 1,
        },
        540: {
            items: 2,
        },
        768: {
            items: 4,
        },
        992: {
            items: 5,
        },
        1170: {
            items: 6,
        }
    }
});

//========= testimonial 
tns({
    container: '.testimonial-slider',
    items: 3,
    slideBy: 'page',
    autoplay: false,
    mouseDrag: true,
    gutter: 0,
    nav: true,
    controls: false,
    controlsText: ['<i class="lni lni-arrow-left"></i>', '<i class="lni lni-arrow-right"></i>'],
    responsive: {
        0: {
            items: 1,
        },
        540: {
            items: 1,
        },
        768: {
            items: 2,
        },
        992: {
            items: 2,
        },
        1170: {
            items: 2,
        }
    }
});

let globalSearch = document.querySelector('#globalSearch');
let globalInput = document.querySelector('#globalInput');

if (!globalInput.value) {
    globalSearch.classList.add('d-none');
} else if (globalInput.value) {
    globalSearch.classList.remove('d-none');
}


let subMenu = document.getElementById("subMenu");

function toggleMenu() {
    console.log('cazzi');
    subMenu.classiList.toggle("open-menu");
}



