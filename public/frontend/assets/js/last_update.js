// array isi item
const item = ['item1', 'item2', 'item3', 'item4', 'item5', 'item6', 'item7', 'item8', 'item9', 'item10', 'item11',
  'item12', 'item13', 'item14', 'item15'
];

const itempro = ['itempro1', 'itempro2', 'itempro3', 'itempro4', 'itempro5', 'itempro6', 'itempro7', 'itempro8', 'itempro9', 'itempro10', 'itempro11'];

const pola = [
  'pola1', 'pola2', 'pola3', 'pola4', 'pola5', 'pola6', 'pola7', 'pola8', 'pola9', 'pola10', 'pola11', 'pola12', 'pola13', 'pola14', 'pola15', 'pola16', 'pola17', 'pola18', 'pola19', 'pola20', 'pola21', 'pola22', 'pola23', 'pola24', 'pola25', 'pola26', 'pola27', 'pola28', 'pola29', 'pola30', 'pola31', 'pola32', 'pola33', 'pola34', 'pola35', 'pola36', 'pola37', 'pola38', 'pola39', 'pola40', 'pola41', 'pola42', 'pola43', 'pola44', 'pola45',
  'pola46', 'pola47', 'pola48',
  'pola49', 'pola50', 'pola51',
  'pola52', 'pola53', 'pola54',
];

// const dnow = moment().format("D M Y, h:mm:ss")
moment.locale('id');
const dnow = new Date();
const dnowformat = moment().format('D M Y, LT');
// console.log(dnowformat);
// const setjam = moment(dnow, "D M Y, h:mm:ss").add(6, 'hours').format("D M Y, LT")
// const setjam = moment().add(6, 'hours').format("D M Y, h:mm:ss")
// console.log(setjam);

function generate(done) {
  // forloop
  for (let index = 0; index < item.length; index++) {
    localStorage.setItem(item[index], Math.floor(Math.random() * (95 - 30) + 30));
  }
  for (let index = 0; index < itempro.length; index++) {
    localStorage.setItem(itempro[index], Math.floor(Math.random() * (95 - 90) + 90));
  }
  for (let index = 0; index < pola.length; index++) {
    localStorage.setItem(pola[index], Math.round((Math.random() * (100 - 10) + 10) / 10) * 10);
  }

  done();
}

function implentItem() {
  // forloop array
  for (let index = 0; index < item.length; index++) {
    // const element = array[index];
    localStorage.getItem(item[index]);
    localStorage.getItem('updated_at');
    $('.' + item[index]).attr('data-progress', localStorage.getItem(item[index]));
  }
  for (let index = 0; index < itempro.length; index++) {
    localStorage.getItem(itempro[index]);
    localStorage.getItem('updated_at');
    $('.' + itempro[index]).attr('data-progress', localStorage.getItem(itempro[index]));
  }

  for (let index = 0; index < pola.length; index++) {
    localStorage.getItem(pola[index]);
    localStorage.getItem('updated_at');
    $('.' + pola[index]).html(localStorage.getItem(pola[index]));
  }

  for (let pgbar = 0; pgbar < item.length; pgbar++) {
    const element = item[pgbar];
    // console.log(element);
    var pg = $('.animated-progress')
      .find('.' + item[pgbar])
      .attr('data-progress');
    // red
    if (pg <= 49) {
      $('.' + item[pgbar]).css({
        'background-color': '#f3c623',
        'background-image': 'linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25% , transparent 25% , transparent 50% , rgba(255, 255, 255, 0.15) 50% , rgba(255, 255, 255, 0.15) 75% , transparent 75% , transparent)',
        'background-size': '1rem 1rem',
        // 'transition': 'all 0.5s ease',
        'animation': 'slidebar 1s linear infinite',
      });
    } else if (pg <= 79) {
      $('.' + item[pgbar]).css({
        'background-color': '#f3c623',
        'background-image': 'linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25% , transparent 25% , transparent 50% , rgba(255, 255, 255, 0.15) 50% , rgba(255, 255, 255, 0.15) 75% , transparent 75% , transparent)',
        'background-size': '1rem 1rem',
        // 'transition': 'all 0.5s ease',
        'animation': 'slidebar 1s linear infinite',
      });
    } else {
      $('.' + item[pgbar]).css({
        'background-color': '#01d9c9',
        'background-image': 'linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25% , transparent 25% , transparent 50% , rgba(255, 255, 255, 0.15) 50% , rgba(255, 255, 255, 0.15) 75% , transparent 75% , transparent)',
        'background-size': '1rem 1rem',
        // 'transition': 'all 0.5s ease',
        'animation': 'slidebar 1s linear infinite',
      });
    }
  }

  for (let pgbar = 0; pgbar < itempro.length; pgbar++) {
    const element = itempro[pgbar];
    // console.log(element);
    var pg = $('.animated-progress')
      .find('.' + itempro[pgbar])
      .attr('data-progress');
    // red
    if (pg <= 49) {
      // $('.' + itempro[pgbar]).css('background-color', '#f3c623');
      $('.' + itempro[pgbar]).css({
        'background-color': '#f3c623',
        'background-image': 'linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25% , transparent 25% , transparent 50% , rgba(255, 255, 255, 0.15) 50% , rgba(255, 255, 255, 0.15) 75% , transparent 75% , transparent)',
        'background-size': '1rem 1rem',
        // 'transition': 'all 0.5s ease',
        'animation': 'slidebar 1s linear infinite',
      });
    } else if (pg <= 79) {
      // $('.' + itempro[pgbar]).css('background-color', '#f3c623');
      $('.' + itempro[pgbar]).css({
        'background-color': '#f3c623',
        'background-image': 'linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25% , transparent 25% , transparent 50% , rgba(255, 255, 255, 0.15) 50% , rgba(255, 255, 255, 0.15) 75% , transparent 75% , transparent)',
        'background-size': '1rem 1rem',
        // 'transition': 'all 0.5s ease',
        'animation': 'slidebar 1s linear infinite',
      });
    } else {
      $('.' + itempro[pgbar]).css({
        'background-color': '#01d9c9',
        'background-image': 'linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25% , transparent 25% , transparent 50% , rgba(255, 255, 255, 0.15) 50% , rgba(255, 255, 255, 0.15) 75% , transparent 75% , transparent)',
        'background-size': '1rem 1rem',
        // 'transition': 'all 0.5s ease',
        'animation': 'slidebar 1s linear infinite',
      });
    }
  }
  // console.log('b');

  // data-attribute item  get
  // getItem
  // ganti value progress
}

function animateproggress() {
  $('.animated-progress span').each(function () {
    $(this).animate({
        width: $(this).attr('data-progress') + '%',
      },
      1000
    );
    $(this).text($(this).attr('data-progress') + '%');
  });
}

// generate()

const localdate = localStorage.getItem('updated_at');
// console.log(localdate)

// let updatedate;
const lastupdate = localStorage.getItem('last_update');



const interval = () => {
  let interval = setInterval(() => {
    if (moment().diff(moment(localStorage.getItem("updated_at"), "YYYY-MM-DD H:mm").add(6, 'h')) >= 0) {
      localStorage.setItem('updated_at', moment().format("YYYY-MM-DD H:mm"));
      $('.update').text(localStorage.getItem("updated_at"));
      generate(() => {
        implentItem();
        animateproggress()
      });
    }
  }, 1000)
}

// Check updated_at ada apa ga / undifined
// updated_at ga sama dengan date now
//  generate()
if (!localStorage.hasOwnProperty("updated_at")) {
  localStorage.setItem('updated_at', moment().format("YYYY-MM-DD H:mm"));

  $('.update').text(moment(localStorage.getItem("updated_at"), "YYYY-MM-DD H:mm").format('YYYY-MM-DD H:mm'));
  generate(() => {
    implentItem();
    animateproggress()
    interval();
  });
} else if (moment().diff(moment(localStorage.getItem("updated_at"), "YYYY-MM-DD H:mm").add(6, 'h')) >= 0) {
  localStorage.setItem('updated_at', moment().format("YYYY-MM-DD H:mm"));
  $('.update').text(moment(localStorage.getItem("updated_at"), "YYYY-MM-DD H:mm").format('YYYY-MM-DD H:mm'));
  generate(() => {
    implentItem();
    animateproggress()
    interval();
  });
} else {
  $('.update').text(moment(localStorage.getItem("updated_at"), "YYYY-MM-DD H:mm").format('YYYY-MM-DD H:mm'));
  implentItem();
  animateproggress()
  interval();
}

$('.last-hours').text(moment(localStorage.getItem("updated_at"), "YYYY-MM-DD H:mm").format("HH:mm"));
$('.next-hours').text(moment(localStorage.getItem("updated_at"), "YYYY-MM-DD H:mm").add(6, 'h').format("HH:mm"));


// var multiple = Math.floor(Math.random() * 11) * 10
// $('.pola1').text(Math.round((Math.random() * (100 - 10) + 10) / 10) * 10);
// $('.pola2').text(Math.round((Math.random() * (100 - 10) + 10) / 10) * 10);
// $('.pola3').text(Math.round((Math.random() * (100 - 10) + 10) / 10) * 10);

// var textpola = $(".pola");
// var arrpola = [];
// textpola.each(function (pola4) {
//   const dcin = Math.round((Math.random() * (100 - 10) + 10) / 10) * 10;
//   arrpola.push(dcin);
//   textpola.eq(pola4).html(dcin);

// });
// console.log(arrpola)