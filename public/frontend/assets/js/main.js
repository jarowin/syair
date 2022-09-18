// utility function returning a random item from the input array
// const randomItem = arr => arr[Math.floor(Math.random() * arr.length)];
document.querySelector(".currentYear").innerHTML = new Date().getFullYear();


// const arralert = [];

// for (let index = 0; index < 20; index++) {
//   arralert.push(Math.floor(Math.random() * (350000000 - 80000) + 80000))
// Cetak hasil	
// console.log(ribuan);
// }
// console.log(arralert);

// var number = 0;
// number++;



// console.log(arralert[1]);

// possible values for the message title and modifier
// const messageTitle = [
// 'info',
// 'success',
// 'warning',
// 'danger',
// ];

// possible values for the body of the message
// end result of the emmet shortcut p*10>lorem10
// const messageText = [
//   'Abe***',
//   'Inda***',
//   'Bell***',
//   'Sanj***',
//   'Donj***',
//   'Indr***',
//   'Fell***',
//   'In23***',
//   'Al1***',
//   'Bey***',
//   'Don***',
//   'Nia***',
//   'Sak***',
//   'Zik***',
//   'Rid***',
//   'Tan***',
//   'Rex***',
//   'Dest***',
//   'Just***',
//   'Bint***',
//   'Mich***',
//   'Joh***',
//   'Trin***',
//   'Enny***',
//   'Fik***',
//   'Ido***',
//   'Ross***',
//   'Stef***',
//   'Pau***',
//   'Fan***',
// ];


// const number = [
//   '250000004',
//   '75006247',
//   '7000091',
//   '3224879',
//   '892000',
//   '11000000',
//   '29300001',
//   '504320',
//   '24790560',
//   '79006200',
//   '194300',
//   '790500',
//   '150000000',
//   '12600000',
//   '59400000',
//   '250000',
//   '267000000',
//   '49000000',
//   '12300000',
//   '16007500',
//   '80000000',
//   '54200005',
//   '19640000',
//   '970300',
//   '12006005',
//   '8900000',
//   '88300000',
//   '600000000',
//   '55300000',
//   '297000000',
// ];




/* logic
- create a message
- show the message
- allow to dismiss the message through the dismiss button

once the message is dismissed the idea is to go through the loop one more time, with a different title and text values
*/
// const notification = document.querySelector('.notification');

// function called when the button to dismiss the message is clicked
// function dismissMessage() {
// remove the .received class from the .notification widget
// notification.classList.remove('received');

// call the generateMessage function to show another message after a brief delay
// generateMessage();

// }

// function showing the message
// function showMessage() {
// add a class of .received to the .notification container
// notification.classList.add('received');

// attach an event listener on the button to dismiss the message
// include the once flag to have the button register the click only one time
// const button = document.querySelector('.notification__message button');
// button.addEventListener('click', dismissMessage, {
//   once: true
// });
// }
// let message6 = 0;
// function generating a message with a random title and text
// function generateMessage() {

// after an arbitrary and brief delay create the message and call the function to show the element
// const delay = Math.floor(Math.random() * 1000) + 1500;
// const timeoutID = setTimeout(() => {
// retrieve a random value from the two arrays
// const title = randomItem(messageTitle);
// const namepemenang = messageText[message6];
// const namepemenang = faker.name.firstName();
// const replacename = namepemenang.replace(namepemenang.substring(namepemenang.length - 2), "**");
// const text = number[message6];
// const text = Math.floor(Math.random() * (350000000 - 80000) + 80000);
// console.log(text);
// var reverse = text.toString().split('').reverse().join(''),
//   ribuan = reverse.match(/\d{1,3}/g);
// ribuan = ribuan.join('.').split('').reverse().join('');




// update the message with the random values and changing the class name to the title's option
// const message = document.querySelector('.notification__message');
// const message1 = document.querySelector('.notif-marque');

// message1.querySelector('.replacename').textContent = replacename;
// message1.querySelector('.hadiah').textContent = ribuan;
// message.className = `notification__message message--${title}`;

// call the function to show the message
//     showMessage();
//     clearTimeout(1000);
//     message6++;
//   }, 500);
// }

// console.log(faker.name.firstName(1));

// immediately call the generateMessage function to kickstart the loop
// generateMessage();

// setInterval(() => {
//   if (message6 >= number.length) {
//     message6 = 0;
//   }
//   // console.log(message6)
//   dismissMessage()

// }, 5000)

const reward = ['hadiah1', 'hadiah2', 'hadiah3', 'hadiah4', 'hadiah5', 'hadiah6', 'hadiah7', 'hadiah8', 'hadiah9',
  'hadiah10', 'hadiah11', 'hadiah12', 'hadiah13', 'hadiah14', 'hadiah15'
];

// for (let index = 0; index < reward.length; index++) {
//   const element = reward[index];
//   const namepemenang = faker.name.firstName();
//   const replacename = namepemenang.replace(namepemenang.substring(namepemenang.length - 2), "**");

//   const text = Math.floor(Math.random() * (350000000 - 80000) + 80000);
//   var reverse = text.toString().split('').reverse().join(''),
//     ribuan = reverse.match(/\d{1,3}/g);
//   ribuan = ribuan.join('.').split('').reverse().join('');

//   $('.' + reward[index]).textContent = ribuan;
//   const message1 = document.querySelector('.notif-marque');
//   $('.replacename').textContent = replacename;
// }

var buttons = $(".hadiah");
var randNumbers = [];

buttons.each(function (index) {
  text = Math.floor(Math.random() * (350000000 - 80000) + 80000);
  var reverse = text.toString().split('').reverse().join(''),
    ribuan = reverse.match(/\d{1,3}/g);
  ribuan = ribuan.join('.').split('').reverse().join('');
  // number = Math.floor((Math.random() * 12) + 1);

  // while ($.inArray(ribuan, randNumbers) == -1) {
  //   ribuan = Math.floor((Math.random() * 12) + 1);
  // }
  // console.log($.inArray(ribuan, randNumbers))

  randNumbers.push(ribuan);
  buttons.eq(index).html(ribuan);

});

var replacename = $(".replacename");
var arrname = [];

replacename.each(function (index1) {
  const namepemenang = faker.name.firstName();
  replacepememang = namepemenang.replace(namepemenang.substring(namepemenang.length - 2), "**");
  // console.log(replacepememang)

  arrname.push(replacepememang);
  replacename.eq(index1).html(replacepememang);

});

let SwiperTop = new Swiper('.swiper--top', {
  spaceBetween: 30,
  centeredSlides: true,
  speed: 10000,
  autoplay: {
    delay: 1,
  },
  loop: true,
  slidesPerView: 'auto',
  allowTouchMove: false,
  disableOnInteraction: true
});

const dc = [
  'OFF',
  'ON',
];

const ceklisnot = [
  '(âœ…âŒâœ…)',
  '(âŒâœ…âœ…)',
  '(âŒâŒâœ…)',
  '(âŒâŒâŒ)',
];

const randomItem = arr => arr[Math.floor(Math.random() * arr.length)];

// const randomcek = arr => ceklisnot[Math.floor(Math.random() * ceklisnot.length)]


var textdc = $(".dc");
var arrdc = [];
textdc.each(function (index2) {
  const dcin = randomItem(dc);

  arrdc.push(dcin);
  textdc.eq(index2).html(dcin);

});

// console.log(arrdc);

// arrdc

var textceklisnot = $(".ceklisnot");
var arrceklisnot = [];
textceklisnot.each(function (index4) {
  const dcin = randomItem(ceklisnot);
  arrceklisnot.push(dcin);
  textceklisnot.eq(index4).html(dcin);
});
// $('.dc').text(randomItem(dc));
// $('.ceklisnot').text(randomItem(ceklisnot));