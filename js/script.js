const carousel = document.querySelector('#carousel');
const buttons = document.querySelectorAll('button');
const numberOfView = document.querySelectorAll('#carousel #view').length;
const numberOfViewInComing = document.querySelectorAll('#carousel #view-in-coming').length;
const totalView = numberOfViewInComing + numberOfView;
var windowWidth = window.innerWidth;
var windowHeight = window.innerHeight;
let viewIndex = 1;
let translateX = 0;
let animation = false;
window.addEventListener('scroll', function () {
    var head = document.querySelector('#head');
    head.classList.toggle('sticky', window.scrollY > 0);
})
function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}
async function sent_appear(){
    var notification = document.querySelector('#sent_notification');
    var background = document.querySelector('#notification-background');
    notification.classList.toggle('show');
    background.classList.toggle('show');
    background.classList.toggle('hide');
    notification.classList.toggle('hide');
    console.log('The script appear() is running');
    clearNotification(notification);
} 
async function captcha_appear(){
    var notification = document.querySelector('#captcha_notification');
    var background = document.querySelector('#notification-background');
    notification.classList.toggle('show');
    background.classList.toggle('show');
    background.classList.toggle('hide');
    notification.classList.toggle('hide');
    console.log('The script appear() is running');
    clearNotification(notification);
} 
buttons.forEach(button => {
    button.addEventListener('click', event => {
        if (animation) {
            return;
        }
        else {
            if (event.target.id === 'previous') {
                if (viewIndex !== 1) {
                    viewIndex--;
                    translateX += 20;
                    console.log(event.target.id);
                } else if (viewIndex === 1) {
                    carousel.classList.toggle('left');
                    console.log('toggle left');
                    resetPosition('left')
                }
            } else if (event.target.id === 'next') {
                if (viewIndex !== (totalView)) {
                    viewIndex++;
                    translateX -= 20;
                    console.log(event.target.id);
                } else if (viewIndex === totalView) {
                    carousel.classList.toggle('right');
                    console.log('toggle right');
                    resetPosition('right');
                }
            } carousel.style.transform = `translateX(${translateX}rem)`;
        } 
    })
})
async function resetPosition(side) {
    await sleep(1100);
    console.log('test');
    carousel.classList.toggle(side);
}
async function clearNotification(notification) {
    await sleep(3000);
    var background = document.querySelector('#notification-background');
    notification.classList.toggle('show');
    background.classList.toggle('show');
    background.classList.toggle('hide');
    notification.classList.toggle('hide');
    console.log('clearNotification has cleared');
}
pageSize(windowWidth, windowHeight);
window.addEventListener('resize', function () {
    windowWidth = this.innerWidth;
    windowHeight = this.innerHeight;
    pageSize(windowWidth, windowHeight);
})
function pageSize(windowWidth, windowHeight) {
    console.log('pageSize is running');
    console.log(windowWidth, windowHeight);
   
    if (windowWidth > windowHeight) {
        if (windowWidth < 2560 && windowWidth > 1700) {
            modifySection('1100px');
            console.log('Section size width : 1100');
        }
        else if (windowWidth < 1700 && windowWidth > 1500) {
            modifySection('900px');
            console.log('Section size width : 900');
        }
        else if (windowWidth < 1500 && windowWidth > 1200) {
            modifySection('800px');
            console.log('Section size width : 800');
        }
        else if (windowWidth < 1200 && windowWidth > 900) {
            modifySection('700px');
            console.log('Section size width : 700');
        } else {
            modifySection('1200px');
            console.log('Section size width : 1200');
        }
    }else {
        modifySection('1900px');
        console.log('windowWidth < windowHeight');
    }
}
function modifySection(sectionWidth) {
    var section = document.querySelectorAll("section");
    console.log(section);
    console.log('sectionWith :', sectionWidth);
    size = section.length;
    for (var i = 0; i < size; i++) {
        section[i].style.width = sectionWidth;
        console.log(section[i], 'section[size].style.width :', section[i].style.width);
    }
    var foot = document.querySelector("#foot");
    foot.style.width = sectionWidth;
}
function iconMenu(windowWidth, windowHeight) {
    if (windowWidth < 700) {
        var onglet_title = document.querySelectorAll('#onglet-title');
        for (var i = 0; i < onglet_title.length; i++) {
        onglet_title[i].style.display = 'none';
        }
    }
}
iconMenu(windowWidth, windowHeight);
console.log('The script is running');
