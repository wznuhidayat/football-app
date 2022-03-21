    // $('#light-slider').lightSlider({
    //     autoWidth: true,
    //     loop: true,
        
    //     onSliderLoad: function() {
    //         $('#autoWidth').removeClass('cS-hidden');
    //     }
        
    // });
    var slider = $("#light-slider").lightSlider({
        controls: false,
         auto: true,
         loop: true,
         autoWidth: true,
         pager: false,
         slideMargin: 30,
        
    });
      $('.slideControls .slidePrev').click(function() {
          slider.goToPrevSlide();
      });

      $('.slideControls .slideNext').click(function() {
          slider.goToNextSlide();
      });
function Menu(e) {
    let list = document.querySelector('ul');
    e.name === 'menu' ? (e.name = "close", list.classList.add('top-navbar') , list.classList.add('opacity-100')) : (e.name = "menu", list.classList.remove('top-navbar'), list.classList.remove('opacity-100'))
}
// function Menu(e){
//     let list = document.querySelector('ul');
//     e.name === 'menu' ? (e.name = "close", list.classList.add('top-[80px]') , list.classList.add('opacity-100')) : (e.name = "menu",list.classList.remove('top-[80px]'), list.classList.remove('opacity-100'))
// }

var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.top = "0";
    } else {
        document.getElementById("navbar").style.top = "-60px";
    }
    prevScrollpos = currentScrollPos;
}

const scrollElements = document.querySelectorAll(".js-scroll");

const elementInView = (el, dividend = 1) => {
    const elementTop = el.getBoundingClientRect().top;

    return (
        elementTop <=
        (window.innerHeight || document.documentElement.clientHeight) / dividend
    );
};

const elementOutofView = (el) => {
    const elementTop = el.getBoundingClientRect().top;

    return (
        elementTop > (window.innerHeight || document.documentElement.clientHeight)
    );
};

const displayScrollElement = (element) => {
    element.classList.add("opacity-100");
};

const hideScrollElement = (element) => {
    element.classList.remove("opacity-100");
};

const handleScrollAnimation = () => {
    scrollElements.forEach((el) => {
        if (elementInView(el, 1.25)) {
            displayScrollElement(el);
        } else if (elementOutofView(el)) {
            hideScrollElement(el)
        }
    })
}

window.addEventListener("scroll", () => {
    handleScrollAnimation();
});


(function () {

    const matchesEL = document.querySelector('.matches');
    const loaderEl = document.querySelector('.loader');
    const mtch = document.querySelectorAll(".matches:last-child");
    // get the matches from API
    const getMatches = async (page, limit) => {
        // const API_URL = `https://api.javascripttutorial.net/v1/matches/?page=${page}&limit=${limit}`;
        const API_URL = `/main/matchespage/${page}/${limit}`;
        const response = await fetch(API_URL);
        // handle 404
        if (!response.ok) {
            throw new Error(`An error occurred: ${response.status}`);
        }
        return await response.json();
    }

    // show the matches
    let day;
    const showMatches = (matches) => {
        
        matches.forEach(match => {
            const matchEl = document.createElement('div');
            const headEl = document.createElement('div');
            matchEl.classList.add('match');
            headEl.classList.add('w-full');
            var date = new Date(match.fixture.timestamp * 1000);
            var hour = date.getHours() < 10 ? '0' + date.getHours() : date.getHours();
            var minutes = date.getMinutes() < 10 ? '0' + date.getMinutes() : date.getMinutes();
            var mydate = match.fixture.date.split("T");
            var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
            var dayName = days[date.getDay()];
            if (day != mydate[0] || day == null) {
                headEl.innerHTML = `<div class="bg-gray-800 p-3 mb-3 animate-fade-in-down rounded-lg flex justify-between">
                <h2 class="text-slate-100 text-lg ">${dayName}</h2>
                <h2 class="text-slate-100 text-lg ">${mydate[0]}</h2>
                </div>`;
                matchesEL.appendChild(headEl);
                day = mydate[0];
            } 
            partDate = mydate[0].split("-");
            matchEl.innerHTML = `
                <div class="w-96 h-36 md:w-64 md:h-24 lg:w-96 lg:h-64 bg-slate-100 p-5 flex justify-between rounded-lg shadow-md animate-fade-in-up">
                    <div class="w-8/12 flex flex-col justify-center px-3 gap-3">
                        <div class="">
                            <img src="${match.teams.home.logo}" alt=""
                                class="inline object-cover w-5 h-5 mr-2">
                            <a href=""> ${match.teams.home.name}</a>
                        </div>
                        <div class="">
                            <img src="${match.teams.away.logo}" alt=""
                                class="inline object-cover w-5 h-5 mr-2">
                            <a href="">${match.teams.away.name}</a>
                        </div>
                    </div>
                    <div class="w-4/12 flex flex-col justify-center">
                        <div class="text-center ">
                            <a href="" class="block text-sm text-slate-600 "> ${hour + ':' + minutes} </a>
                            
                            
                        </div>
                    </div>
                </div>
            `;
            
            matchesEL.appendChild(matchEl);
    
        });
    };

    const hideLoader = () => {
        loaderEl.classList.remove('opacity-100');
    };

    const showLoader = () => {
        loaderEl.classList.add('opacity-100');
    };

    const hasMoreMatches = (page, limit, total) => {
        const startIndex = (page - 1) * limit + 1;
        return total === 0 || startIndex < total;
    };

    // load matches
    const loadMatches = async (page, limit) => {

        // show the loader
        showLoader();

        // 0.5 second later
        setTimeout(async () => {
            try {
                // if having more matches to fetch
                if (hasMoreMatches(page, limit, total)) {
                    // call the API to get matches
                    const response = await getMatches(page, limit);
                    // show matches
                    showMatches(response.data);
                    // update the total
                    total = response.total;
                }
            } catch (error) {
                console.log(error.message);
            } finally {
                hideLoader();
            }
        }, 500);

    };

    // control variables
    let currentPage = 1;
    const limit = 10;
    let total = 0;


    window.addEventListener('scroll', () => {
        const {
            scrollTop,
            scrollHeight,
            clientHeight
        } = document.documentElement;

        if (scrollTop + clientHeight >= scrollHeight - 1 &&
            hasMoreMatches(currentPage, limit, total)) {
            currentPage++;
            loadMatches(currentPage, limit);
        }
    }, {
        passive: true
    });

    // initialize
    loadMatches(currentPage, limit);

})();