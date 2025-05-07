var productposter = [
  {
    id: 1,
    // img: "assets/images/DavidSilva.jpg",
    img: "assets/images/DavidSilva.jpg",
    name: "David Silva Poster",
    price: "280",
    description: "This is David Silva Poster",
    type: "poster",
    param: "poster",
  },
  {
    id: 2,
    img: "assets/images/ErlingHaaland_ManchesterCityPosterfootball.jpg",
    name: "Erling Haaland Poster",
    price: "320",
    description: "This is Erling Haaland Poster",
    type: "poster",
    param: "poster",
  },
  {
    id: 3,
    img: "assets/images/KDB.jpg",
    name: "Kevin De Bruyne Poster",
    price: "320",
    description: "This is Kevin De Bruyne Poster",
    type: "poster",
    param: "poster",
  },
  {
    id: 4,
    img: "assets/images/KYLE_WALKER.jpg",
    name: "Kyle Walker Poster",
    price: "280",
    description: "This is Kyle Walker Poster",
    type: "poster",
    param: "poster",
  },
  {
    id: 5,
    img: "assets/images/pep_manager.jpg",
    name: "Pep Manager Poster",
    price: "360",
    description: "This is Pep Manager Poster",
    type: "poster",
    param: "poster",
  },
  // {
  //   id: 6,
  //   img: "assets/images/Nasri.jpg",
  //   name: "Nasri Poster",
  //   price: "320",
  //   description: "This is Nasri Poster",
  //   type: "poster",
  //   param: "poster",
  // },
];

// [{}, {}, {}, {}, {}]; // length 5
{
  /* <div class="my-card-news ${item.type} active" data-id="${item.id}" data-type="${item.type}" data-param="${item.param}"> */
}

$(document).ready(function () {
  const cardList = $("#card-list");

  for (let i = 0; i < productposter.length; i++) {
    const item =
      productposter[i].type === "image" ? productposter[i] : productposter[i];
    const cardHtml = `
      <div class="card ${item.type}" data-id="${item.id}" data-type="${item.type}">
        <div class="card-header">
          <h4 class="card-name">${item.name}</h4>
          <p class="card-description">${item.description}</p>
        </div>
        <div class="card-footer">
          <div class="card-footer-img">
            <img src="${item.img}" alt="${item.name}">
          </div>
          <i class="fa-solid fa-tag"></i>
          <p>price</p>
          <p>${item.price} THB</p>
          <button onclick="openProductDetail(${i})" class="btn-buy">Buy</button>
        </div>
      </div>
    `;

    cardList.append(cardHtml);
  }
});

/********************************************************************************************************/

var cardnewsmensteam = [
  {
    id: 1,
    img: "assets/newsimages/OmarMarmoushmarketvaluechangeswhohasmovedtoanewclubthistransferwindow.jpg",
    name: "Omar Marmoush market value",
    description:
      "The market value change of players who’ve moved to a new club this transfer window 📈💫",
    type: "newsmensteam",
    param: "mensteam",
  },
  {
    id: 2,
    img: "assets/newsimages/ManchesterCitysacademyhasexcelledinproducingtalent.jpg",
    name: "Manchester City's academy has excelled inproducing talent",
    description:
      "Manchester City's academy has excelled in producing talent Despite the presence of a world-class squad, these players continue to carve out a reputation abroad and have now become worth millions! 🔵💰 2023 Estimated Value",
    type: "newsmensteam",
    param: "mensteam",
  },
  {
    id: 3,
    img: "assets/newsimages/MatchdayPosterforMancityManchesterCity.jpg",
    name: "Matchday Poster for Manchester City",
    description:
      "Manchester City's UEFA Champions League clash with Sparta Prague on Wednesday, October 23, 2024, has concluded with Manchester City winning 5-0 at the Etihad Stadium.",
    type: "newsmensteam",
    param: "mensteam",
  },
  {
    id: 4,
    img: "assets/newsimages/TheManchesterEveningNews.jpg",
    name: "The Manchester Evening News",
    description:
      "This story is from the May 22, 2023 edition of Manchester Evening News.",
    type: "newsmensteam",
    param: "mensteam",
  },
  {
    id: 5,
    img: "assets/newsimages/WestHamCitythetitleisours.jpg",
    name: "Foden Shines, West Ham Vanishes – 15-0 Slaughter!",
    description:
      "West Ham City: The title is ours 😁! Uncredible News FODEN will not get any like.",
    type: "newsmensteam",
    param: "mensteam",
  },
  {
    id: 6,
    img: "assets/newsimages/Whichforwardwouldyouprefertohaveinyourteam.jpg",
    name: "🔥 Goal Machine: Is Sergio Agüero Your Ideal Striker?",
    description:
      "Which forward would you prefer to have in your team? (ZFlix Football Post)",
    type: "newsmensteam",
    param: "mensteam",
  },
];

var cardnewsacademyteam = [
  {
    id: 1,
    img: "assets/newsimages/Notrocketscience.jpg",
    name: "'Not rocket science' - the Man City academy change producing stunning results",
    description:
      "Manchester City Under-18s bounced back from a slow start with 20 straight wins, chasing both the league title and FA Youth Cup. Their rise reflects academy director Thomas Krucken’s new approach, focusing on individual development through multi-sport training and one-on-one sessions, which has boosted player growth and performance.",
    type: "newsademyteam",
    param: "academyteam",
  },
  {
    id: 2,
    img: "assets/newsimages/KoloToureinterview.jpg",
    name: "Kolo Toure interview: I couldn't say no to Man City return - now I'm building their future",
    description:
      "Kolo Toure returned to Manchester City in 2023 as assistant coach for the Under-18s, focusing on youth development after a setback at Wigan. Working closely with head coach Oliver Reiss, Toure has helped strengthen the team’s defense during a 23-game winning run. He shares his experience to develop players while promoting a winning mindset, prioritizing growth over results.",
    type: "newsademyteam",
    param: "academyteam",
  },
  {
    id: 3,
    img: "assets/newsimages/BenWilkinson.jpg",
    name: "How a risky penalty backfired to send Man City crashing out of Begiristain's favourite competition",
    description:
      "Divine Mukasa's flair has fueled a stellar season for City's Under-18s, but his failed penalty in the Youth League quarter-final ended their European hopes. Despite the setback, coach Ben Wilkinson sees valuable growth, with both the Under-18s and Under-21s still in contention for domestic titles and a potential academy treble.",
    type: "newsademyteam",
    param: "academyteam",
  },
  {
    id: 4,
    img: "assets/newsimages/JahmaiSimpsonPusey.jpg",
    name: "Who is Jahmai Simpson-Pusey? Man City defender handed debut at Sporting and idolises Sergio Ramos",
    description:
      "Jahmai Simpson-Pusey, 19, has swiftly risen from captaining Manchester City’s U18s to making his senior debut in both the Premier League and Champions League. A composed, versatile defender inspired by Ramos, Dias, and Stones, he’s now seen as one of the academy’s top emerging talents.",
    type: "newsademyteam",
    param: "academyteam",
  },
  {
    id: 5,
    img: "assets/newsimages/DivineMukasa.jpg",
    name: "What scouts did at Man City game uncovers their latest asset worth keeping an eye on",
    description:
      "Manchester City's 17-year-old Divine Mukasa is enjoying a standout season with 14 goals and 24 assists across three age groups. His creativity and composure have impressed coaches and scouts alike, especially in a recent 6-0 FA Youth Cup win over West Brom. Inspired by Zidane and De Bruyne, Mukasa is a key player in City's push for multiple academy trophies and is quickly rising as one to watch for the future.",
    type: "newsademyteam",
    param: "academyteam",
  },
  {
    id: 6,
    img: "assets/newsimages/ReiganHeskey.jpg",
    name: "Man City teenage goalscoring sensation sends fresh message as excitement builds",
    description:
      "Manchester City's 16-year-old Reigan Heskey had a standout week, scoring five goals across U21 and U18 matches, featuring in the UEFA Youth League, and earning an England U17 call-up. With eight goals in eight U18 games, he's been praised as a top prospect, though coaches emphasize keeping him grounded as he develops.",
    type: "newsademyteam",
    param: "academyteam",
  },
];

var cardnewswomensteam = [
  {
    id: 1,
    img: "assets/newsimages/VivianneMiedema.jpg",
    name: "New Man City signing has already impressed after 'gut feeling' and Arsenal plea",
    description:
      "Vivianne Miedema, the WSL's all-time top scorer, has joined Manchester City after leaving Arsenal, seeking a fresh challenge following injury struggles. The 28-year-old chose City for its ambition and her connection with manager Gareth Taylor, aiming to return to top form and add to her decorated career. Her move has drawn mixed reactions, but she’s ready to prove herself in this new chapter.",
    type: "newswomensteam",
    param: "womensteam",
  },
  {
    id: 2,
    img: "assets/newsimages/ChloeKelly.jpg",
    name: "Manchester United announce major contract decision as Man City star makes Arsenal admission",
    description:
      "Manchester City and Manchester United earned key WSL wins, with City beating Brighton 2-1 and United defeating Everton 2-0. Marc Skinner extended his United contract to 2027, while Vivianne Miedema and Kerstin Casparij scored for City. Chloe Kelly expressed her joy at playing regularly on loan at Arsenal, and United CEO Omar Berrada urged fans to support the women's team ahead of crucial upcoming matches.",
    type: "newswomensteam",
    param: "womensteam",
  },
  {
    id: 3,
    img: "assets/newsimages/JessPark.jpg",
    name: "Manchester City star makes title promise and lifts lid on Euros dream",
    description:
      "Jess Park scored her first WSL goal of the season in the Manchester derby, highlighting her breakout year with City. After a strong loan at Everton, she’s stepped up in a new No.10 role following Jill Roord’s injury. Backed by Gareth Taylor, Park has earned an England start and is now eyeing a spot at Euro 2025 while helping City’s title charge.",
    type: "newswomensteam",
    param: "womensteam",
  },
  {
    id: 4,
    img: "assets/newsimages/JessParkwomensteam.jpg",
    name: "Manchester City star has passed England audition and Chelsea clash proved it",
    description:
      "Jess Park has stepped up for Manchester City in Jill Roord's absence, with standout performances earning praise from Gareth Taylor and Sarina Wiegman. Aiming for a regular spot in the England squad, her recent form positions her as a key asset for both club and country.",
    type: "newswomensteam",
    param: "womensteam",
  },
  {
    id: 5,
    img: "assets/newsimages/StephHoughton.jpg",
    name: "Man City add club legend to coaching staff as mid-season gamble pays off - for now",
    description:
      "After sacking Gareth Taylor before the Women's League Cup final, Manchester City lost to Chelsea but bounced back under interim manager Nick Cushing, securing a Champions League win. Cushing made tactical changes and relied on youth players like Gracie Prior and Lily Murphy. With key injuries and former captain Steph Houghton joining the coaching staff, City now faces a crucial WSL match against Chelsea to stay in Champions League contention.",
    type: "newswomensteam",
    param: "womensteam",
  },
  {
    id: 6,
    img: "assets/newsimages/ChloeKellywomensteam.jpg",
    name: "Man City make Chloe Kelly decision amid Manchester United transfer talk",
    description:
      "Chloe Kelly will miss tonight's Manchester derby amid transfer rumors linking her to a loan move to Manchester United. Struggling for game time at City, her contract expires at the end of the season, and reports indicate tension with manager Gareth Taylor, leaving her future uncertain.",
    type: "newswomensteam",
    param: "womensteam",
  },
];

{
  /* <div class="modaldesc-detail">
<p class="topic-desc-news">News Today</p>
<div class="news-desc-container">
    <div class="news-desc-news">
        <p class="news-desc">The market value change of players who’ve moved to a new club this transfer window 📈💫</p>
        <br>
    </div>
    <br>
    <div class="btn-control">
        <div class="btn-group-submit">
            <button class="btn btn-submit">Go to News</button>
        </div>
        <div class="btn-group-out">
            <button onclick="CloseModal()" class="btn btn-out">Close</button>
        </div>
    </div>
</div>
</div> */
}

$(document).ready(function () {
  const cardList = $("#card-news");

  for (let i = 0; i < cardnewsmensteam.length; i++) {
    const item =
      cardnewsmensteam[i].type === "image"
        ? cardnewsmensteam[i]
        : cardnewsmensteam[i];
    const cardHtml = `
      <div class="my-card-news ${item.type} active" data-id="${item.id}" data-type="${item.type}" data-param="${item.param}">
      <img class="news-img" src="${item.img}" alt="${item.name}">
      <div class="card-news-name">
        <p onclick="openNewsDetail(${i}, '${item.param}')" class="news-name">${item.name}</p>
      </div>
      <p class="news-desc">${item.description}</p>
  </div>`;

    cardList.append(cardHtml);
  }
});

$(document).ready(function () {
  const cardList = $("#card-news");

  for (let i = 0; i < cardnewsacademyteam.length; i++) {
    const item =
      cardnewsacademyteam[i].type === "image"
        ? cardnewsacademyteam[i]
        : cardnewsacademyteam[i];
    const cardHtml = `
    <div class="my-card-news ${item.type}" data-id="${item.id}" data-type="${item.type}" data-param="${item.param}">
    <img class="news-img" src="${item.img}" alt="${item.name}">
    <div class="card-news-name">
      <p onclick="openNewsDetail(${i}, '${item.param}')" class="news-name">${item.name}</p>  
    </div>
    <p class="news-desc">${item.description}</p>
</div>`;

    cardList.append(cardHtml);
  }
});

$(document).ready(function () {
  const cardList = $("#card-news");

  for (let i = 0; i < cardnewswomensteam.length; i++) {
    const item =
      cardnewswomensteam[i].type === "image"
        ? cardnewswomensteam[i]
        : cardnewswomensteam[i];
    const cardHtml = `
    <div class="my-card-news ${item.type}" data-id="${item.id}" data-type="${item.type}" data-param="${item.param}">
    <img class="news-img" src="${item.img}" alt="${item.name}">
    <div class="card-news-name">
    <p onclick="openNewsDetail(${i}, '${item.param}')" class="news-name">${item.name}</p>  
    </div>
    <p class="news-desc">${item.description}</p>
    </div>`;

    cardList.append(cardHtml);
  }
});

// /********************************************************************************************************/
// onclick product category

// /********************************************************************************************************/

// *************************************** logic return value
// function searchsomething(elem) {
//   console.log("#" + elem.id);
//   var value = $("#" + elem.id)
//     .val()
//     .trim();
//   console.log(value);

//   var html = "";
//   html += renderMen(value);
//   html += renderAcademy(value);
//   html += renderWomen(value);

//   if (html == "") {
//     $("#card-news").html(`<p>Not found News or ${value}</p>`);
//   } else {
//     $("#card-news").html(html);
//   }
// }

// function renderMen(value) {
//   var html = "";

//   if (value === "") {
//     for (let i = 0; i < cardnewsmensteam.length; i++) {
//       var item =
//         cardnewsmensteam[i].type === "image"
//           ? cardnewsmensteam[i]
//           : cardnewsmensteam[i];
//       html += `
//         <div class="my-card-news ${item.type} active" data-id="${item.id}" data-type="${item.type}" data-param="${item.param}">
//         <img class="news-img" src="${item.img}" alt="${item.name}">
//         <div class="card-news-name ${item.name}">
//           <p onclick="openNewsDetail(${i})" class="news-name">${item.name}</p>
//         </div>
//         <p class="news-desc">${item.description}</p>
//     </div>`;
//     }

//     return html;
//   }

//   for (let i = 0; i < cardnewsmensteam.length; i++) {
//     var item =
//       cardnewsmensteam[i].type === "image"
//         ? cardnewsmensteam[i]
//         : cardnewsmensteam[i];
//     if (item.name.includes(value)) {
//       html += `
//       <div class="my-card-news ${item.type} active" data-id="${item.id}" data-type="${item.type}" data-param="${item.param}">
//       <img class="news-img" src="${item.img}" alt="${item.name}">
//       <div class="card-news-name ${item.name}">
//         <p onclick="openNewsDetail(${i})" class="news-name">${item.name}</p>
//       </div>
//       <p class="news-desc">${item.description}</p>
//   </div>`;
//     }
//   }
//   return html;

//   function renderMen_check(el) {
//     let param = el.dataset.param;
//     console.log({ param });

//     $(".my-card-news").hide();

//     $(".my-card-news").each(function () {
//       if ($(this).data("param") === param) {
//         $(this).show();
//       }
//     });
//   }
// }

// function renderAcademy(value) {
//   if (value === "") return "";
//   var html = "";
//   for (let i = 0; i < cardnewsacademyteam.length; i++) {
//     var item =
//       cardnewsacademyteam[i].type === "image"
//         ? cardnewsacademyteam[i]
//         : cardnewsacademyteam[i];
//     if (item.name.includes(value)) {
//       html += `
//       <div class="my-card-news ${item.type} active" data-id="${item.id}" data-type="${item.type}" data-param="${item.param}">
//       <img class="news-img" src="${item.img}" alt="${item.name}">
//       <div class="card-news-name ${item.name}">
//         <p onclick="openNewsDetail(${i})" class="news-name">${item.name}</p>
//       </div>
//       <p class="news-desc">${item.description}</p>
//   </div>`;
//     }
//   }
//   return html;

//   function renderAcademy_check(el) {
//     let param = el.dataset.param;
//     console.log({ param });

//     $(".my-card-news").hide();

//     $(".my-card-news").each(function () {
//       if ($(this).data("param") === param) {
//         $(this).show();
//       }
//     });
//   }
// }

// function renderWomen(value) {
//   if (value === "") return "";
//   var html = "";
//   for (let i = 0; i < cardnewswomensteam.length; i++) {
//     var item =
//       cardnewswomensteam[i].type === "image"
//         ? cardnewswomensteam[i]
//         : cardnewswomensteam[i];
//     if (item.name.includes(value)) {
//       html += `
//       <div class="my-card-news ${item.type} active" data-id="${item.id}" data-type="${item.type}" data-param="${item.param}">
//       <img class="news-img" src="${item.img}" alt="${item.name}">
//       <div class="card-news-name ${item.name}">
//         <p onclick="openNewsDetail(${i})" class="news-name">${item.name}</p>
//       </div>
//       <p class="news-desc">${item.description}</p>
//   </div>`;
//     }
//   }
//   return html;

//   function renderWomen_check(el) {
//     let param = el.dataset.param;
//     console.log({ param });

//     $(".my-card-news").hide();

//     $(".my-card-news").each(function () {
//       if ($(this).data("param") === param) {
//         $(this).show();
//       }
//     });
//   }
// }
// *************************************** logic return value

// ***************************************
function searchsomething(elem) {
  console.log("#" + elem.id);
  var value = $("#" + elem.id)
    .val()
    .trim();
  console.log(value);
  var html = "";
  if (value === "") {
    for (let i = 0; i < cardnewsmensteam.length; i++) {
      var item =
        cardnewsmensteam[i].type === "image"
          ? cardnewsmensteam[i]
          : cardnewsmensteam[i];
      if (item.name.includes(value)) {
        html += `
        <div class="my-card-news ${item.type} active" data-id="${item.id}" data-type="${item.type}" data-param="${item.param}">
        <img class="news-img" src="${item.img}" alt="${item.name}">
        <div class="card-news-name ${item.name}">
          <p onclick="openNewsDetail(${i}, '${item.param}')" class="news-name">${item.name}</p>
        </div>
        <p class="news-desc">${item.description}</p>
    </div>`;
      }
    }
    $("#card-news").html(html);
    return;
  }
  for (let i = 0; i < cardnewsmensteam.length; i++) {
    var item =
      cardnewsmensteam[i].type === "image"
        ? cardnewsmensteam[i]
        : cardnewsmensteam[i];
    if (item.name.includes(value)) {
      html += `
      <div class="my-card-news ${item.type} active" data-id="${item.id}" data-type="${item.type}" data-param="${item.param}">
      <img class="news-img" src="${item.img}" alt="${item.name}">
      <div class="card-news-name ${item.name}">
        <p onclick="openNewsDetail(${i}, '${item.param}')" class="news-name">${item.name}</p>
      </div>
      <p class="news-desc">${item.description}</p>
  </div>`;
    }
  }
  for (let i = 0; i < cardnewsacademyteam.length; i++) {
    var item =
      cardnewsacademyteam[i].type === "image"
        ? cardnewsacademyteam[i]
        : cardnewsacademyteam[i];
    if (item.name.includes(value)) {
      html += `
      <div class="my-card-news ${item.type} active" data-id="${item.id}" data-type="${item.type}" data-param="${item.param}">
      <img class="news-img" src="${item.img}" alt="${item.name}">
      <div class="card-news-name ${item.name}">
        <p onclick="openNewsDetail(${i}, '${item.param}')" class="news-name">${item.name}</p>
      </div>
      <p class="news-desc">${item.description}</p>
  </div>`;
    }
  }
  for (let i = 0; i < cardnewswomensteam.length; i++) {
    var item =
      cardnewswomensteam[i].type === "image"
        ? cardnewswomensteam[i]
        : cardnewswomensteam[i];
    if (item.name.includes(value)) {
      html += `
      <div class="my-card-news ${item.type} active" data-id="${item.id}" data-type="${item.type}" data-param="${item.param}">
      <img class="news-img" src="${item.img}" alt="${item.name}">
      <div class="card-news-name ${item.name}">
        <p onclick="openNewsDetail(${i}, '${item.param}')" class="news-name">${item.name}</p>
      </div>
      <p class="news-desc">${item.description}</p>
  </div>`;
    }
  }
  if (html == "") {
    $("#card-news").html(`<p>Not found News or ${value}</p>`);
  } else {
    $("#card-news").html(html);
  }
}
// ***************************************
/* <div class="productsidebar">
        <input onkeyup="searchsomethingproduct(this)" id="txt_search_product" type="text" class="sidebar-product" placeholder="search product" />
     <!-- product category -->
            <!-- <a onclick="searchnews(this, 'mensteam')" data-param="mensteam" class="sidebar-items">Men's Team</a>
            <a onclick="searchnews(this, 'academyteam')" data-param="academyteam" class="sidebar-items">Manchester City Academy</a>
            <a onclick="searchnews(this, 'womensteam')" data-param="womensteam" class="sidebar-items">Women's Team</a> -->
    </div> */

// $(document).ready(function () {
//   const cardList = $("#card-list");
// });

function searchsomethingproduct(elem) {
  // console.log("#" + elem.id);
  var value = $("#" + elem.id).val();
  console.log(value);

  var html = "";

  for (let i = 0; i < productposter.length; i++) {
    var item =
      productposter[i].type === "image" ? productposter[i] : productposter[i];

    if (item.name.includes(value)) {
      html += `
      <div class="card active ${item.type}" data-id="${item.id}" data-type="${item.type}">
        <div class="card-header">
          <h4 class="card-name">${item.name}</h4>
          <p class="card-description">${item.description}</p>
        </div>
        <div class="card-footer">
          <div class="card-footer-img">
            <img src="${item.img}" alt="${item.name}">
          </div>
          <i class="fa-solid fa-tag"></i>
          <p>price</p>
          <p>${item.price}</p>
          <button onclick="openProductDetail(${i})" class="btn-buy">Buy</button>
        </div>
      </div>
    `;
    }
    // for (let i = 0; i < cardnewswomensteam.length; i++) {
    //   var item =
    //     cardnewswomensteam[i].type === "image"
    //       ? cardnewswomensteam[i]
    //       : cardnewswomensteam[i];
    //   if (item.name.includes(value)) {
    //     html += `
    //     <div class="my-card-news ${item.type} active" data-id="${item.id}" data-type="${item.type}" data-param="${item.param}">
    //     <img class="news-img" src="${item.img}" alt="${item.name}">
    //     <div class="card-news-name ${item.name}">
    //       <p class="news-name">${item.name}</p>
    //     </div>
    //     <p class="news-desc">${item.description}</p>
    // </div>`;
    //   }
    // }
  }
  if (html == "") {
    $("#card-list").html(
      `<p style="color: var(--light)">Not found News or ${value}</p>`
    );
  } else {
    $("#card-list").html(html);
  }
}

// function searchnews(param) {
//   console.log(param);
// }
// $(".my-card-news").css("display", "none");

// function searchnews(el) {
//   let param = el.dataset.param;
//   console.log("param:", param);
//   $(".my-card-news").css("display", "none");
//   if (param == "mensteam") {
//     $(".my-card-news").css("display", "none");
//   } else {
//   }
// }

// *************************************** สำรอง
function searchnews(el) {
  let param = el.dataset.param;
  console.log({ param });

  $(".my-card-news").hide();

  $(".my-card-news").each(function () {
    if ($(this).data("param") === param) {
      $(this).show();
    }
  });
}
// *************************************** สำรอง

// *************************************** เขียน render logic return value

// function searchnews(el) {
//   let param = el.dataset.param;
//   console.log({ param });

//   $(".my-card-news").hide();

//   $(".my-card-news").each(function () {
//     if ($(this).data("param") === param) {
//       $(this).show();
//     }
//   });
// }
// *************************************** เขียน render

function searchnewsproduct(el) {
  let posterid = el.dataset.id;
  console.log({ posterid });

  $(".card").hide();

  $(".card").each(function () {
    if ($(this).data("id") === id) {
      $(this).show();
    }
  });
}

var productIndex = 0;
function openProductDetail(index) {
  productIndex = index;
  console.log(productIndex);
  $("#modalDescproduct").css("display", "flex");
  $("#mdd-img").attr("src", productposter[index].img);
  $("#mdd-name").text(productposter[index].name);
  $("#mdd-price").text(`${productposter[index].price} THB`);
}

// var onnewsIndex = 0;
// function openonNewsDetail(index) {
//   cardnewsIndex = index;
//   console.log(cardnewsIndex);
//   $("#modalDescnews").css("display", "flex");
//   $("#modaldesc-img").attr("src", cardnewsmensteam[index].img);
//   $("#news-desc").text(cardnewsmensteam[index].description);
// }

// ******************************************************************************************
// var newsIndex = 0;

// function openNewsDetail(index) {
//   newsIndex = index;
//   console.log(newsIndex);
//   $("#modalDescnews").css("display", "flex");
//   $("#modaldesc-img").attr("src", cardnewsmensteam[index].img);
//   $("#modaldesc-img").attr("src", cardnewsacademyteam[index].img);
//   $("#modaldesc-img").attr("src", cardnewswomensteam[index].img);
//   $("#news-desc").text(cardnewsmensteam[index].description);
//   $("#news-desc").text(cardnewsacademyteam[index].description);
//   $("#news-desc").text(cardnewswomensteam[index].description);
// }
// ******************************************************************************************
var newsIndex = 0;

function openNewsDetail(index, type) {
  newsIndex = index;
  console.log(newsIndex);
  $("#modalDescnews").css("display", "flex");

  let selectedNews;

  if (type === "mensteam") {
    selectedNews = cardnewsmensteam[index];
  } else if (type === "academyteam") {
    selectedNews = cardnewsacademyteam[index];
  } else if (type === "womensteam") {
    selectedNews = cardnewswomensteam[index];
  } else {
    console.error("Unknown news type:", type);
    return;
  }

  $("#modaldesc-img").attr("src", selectedNews.img);
  $("#news-desc").text(selectedNews.description);
}

function CloseModal() {
  $(".modal").css("display", "none");
}

//  ******************************************************* logic เดิม
var cart = [];

function AddtoCart() {
  var pass = true;

  for (let i = 0; i < cart.length; i++) {
    if (productIndex == cart[i].index) {
      console.log("found same product");
      cart[i].count++;
      pass = false;
    }
  }

  if (pass) {
    var obj = {
      index: productIndex,
      id: productposter[productIndex].id,
      name: productposter[productIndex].name,
      price: productposter[productIndex].price,
      img: productposter[productIndex].img,
      count: 1,
    };
    // console.log(obj);
    cart.push(obj);
  }
  console.log(cart);

  Swal.fire({
    icon: "success",
    title: "Add " + productposter[productIndex].name + " to cart !",
    text: "Price " + productposter[productIndex].price,
    showConfirmButton: true,
    confirmButtonColor: "#98c5e9",
  });

  $("#cartcount").css("display", "flex").text(cart.length);
}

//  ******************************************************* logic เดิม

//  ******************************************************* สำรอง
// let totalCount = 0;
// for (let i = 0; i < cart.length; i++) {
//   totalCount += cart[i].count;
// }
// $("#cartcount").css("display", "flex").text(totalCount);
// function AddtoCart() {
//   Swal.fire({
//     title: "Add " + productposter[productIndex].name + " to cart !",
//     text: "Price " + productposter[productIndex].price,
//     icon: "question",
//     showCancelButton: true,
//     confirmButtonText: "Confirm",
//     confirmButtonColor: "#98c5e9",
//     cancelButtonText: "Cancel",
//     cancelButtonColor: "black",
//   }).then((result) => {
//     if (result.isConfirmed) {
//       console.log("Your product was successfully added to the cart.");

//       var pass = true;
//       for (let i = 0; i < cart.length; i++) {
//         if (productIndex == cart[i].index) {
//           console.log("found same product");
//           cart[i].count++;
//           pass = false;
//         }
//       }
//       if (pass) {
//         var obj = {
//           index: productIndex,
//           id: productposter[productIndex].id,
//           name: productposter[productIndex].name,
//           price: productposter[productIndex].price,
//           img: productposter[productIndex].img,
//           count: 1,
//         };
//         // console.log(obj);
//         cart.push(obj);
//       }
//       console.log(cart);

//       let totalCount = cart.reduce((sum, item) => sum + item.count, 0);

//       $("#cartcount").css("display", "flex").text(totalCount);
//     } else if (result.dismiss === Swal.DismissReason.cancel) {
//       console.log("User cancelled the product");
//     }
//   });
// }

//  ******************************************************* สำรอง

//  ******************************************************* เขียนใหม่

// function AddtoCart() {
//   Swal.fire({
//     title: "Add " + productposter[productIndex].name + " to cart !",
//     text: "Price " + productposter[productIndex].price,
//     icon: "question",
//     showCancelButton: true,
//     confirmButtonText: "Confirm",
//     confirmButtonColor: "#98c5e9",
//     cancelButtonText: "Cancel",
//     cancelButtonColor: "black",
//   }).then((result) => {
//     if (result.isConfirmed) {
//       console.log("Your product was successfully added to the cart.");

//       var pass = true;
//       var addedItem = null;

//       for (let i = 0; i < cart.length; i++) {
//         if (productIndex == cart[i].index) {
//           console.log("found same product");
//           cart[i].count++;
//           pass = false;
//           addedItem = cart[i];
//           break;
//         }
//       }
//       if (pass) {
//         var obj = {
//           index: productIndex,
//           id: productposter[productIndex].id,
//           name: productposter[productIndex].name,
//           price: productposter[productIndex].price,
//           img: productposter[productIndex].img,
//           count: 1,
//         };

//         cart.push(obj);
//         addedItem = obj;
//       }
//       console.log(cart);

//       let totalCount = cart.reduce((sum, item) => sum + item.count, 0);

//       $("#cartcount").css("display", "flex").text(totalCount);

//       openProductDetail(addedItem.index);
//     } else if (result.dismiss === Swal.DismissReason.cancel) {
//       console.log("User cancelled the product");
//     }
//   });
// }

// icon: "success",
//  ******************************************************* เขียนใหม่
function openCart() {
  $("#modalCart").css("display", "flex");
  renderCart();
}

function renderCart() {
  if (cart.length > 0) {
    var html = "";
    for (let i = 0; i < cart.length; i++) {
      html += `<div class="cartlist-items">
      <div class="cartlist-left">
          <div class="cartlist-img">
              <img src="${cart[i].img}" alt="${cart[i].name}">
          </div> 
      </div>
      <div class="cartlist-center">
          <div class="cartlist-detail">
              <p class="product-name">${cart[i].name}</p>
              <p id="priceitems${i}" class="product-price">${
        cart[i].price * cart[i].count
      } THB</p>
          </div>
      </div>
      <div class="cartlist-right">
          <p onclick="deinitems('-', ${i})" class="btnc">-</p>
          <p id="countitems${i}" class="btnq">${cart[i].count}</p>
          <p onclick="deinitems('+', ${i})" class="btnc">+</p>
      </div>
  </div>`;
    }
    $("#mycart").html(html);
  } else {
    $("#mycart").html(`<p style="color: white">Not found product list</p>`);
  }
}

function deinitems(action, index) {
  if (action == "-") {
    if (cart[index].count > 0) {
      cart[index].count--;
      $("#countitems" + index).text(cart[index].count);

      $("#priceitems" + index).text(
        `${cart[index].price * cart[index].count} THB`
      );

      if (cart[index].count <= 0) {
        Swal.fire({
          icon: "warning",
          title: "Are you sure to delete?",
          showConfirmButton: true,
          showCancelButton: true,
          confirmButtonText: "Delete",
          cancelButtonText: "Cancel",
        }).then((res) => {
          if (res.isConfirmed) {
            cart.splice(index, 1);
            console.log(cart);
            renderCart();
            $("#cartcount").css("display", "flex").text(cart.length);

            if (cart.length <= 0) {
              $("#cartcount").css("display", "none");
            }
          } else {
            cart[index].count++;
            $("#countitems" + index).text(cart[index].count);
            $("#priceitems" + index).text(
              `${cart[index].price * cart[index].count} THB`
            );
          }
        });
      }
    }
  } else if (action == "+") {
    cart[index].count++;
    $("#countitems" + index).text(cart[index].count);
    $("#priceitems" + index).text(
      `${cart[index].price * cart[index].count} THB`
    );
  }
}

// btt back to top
let myBtn = document.getElementById("btt");

function scrollFunction() {
  if (
    document.body.scrollTop > 1400 ||
    document.documentElement.scrollTop > 1400
  ) {
    myBtn.style.display = "block";
  } else {
    myBtn.style.display = "none";
  }
}

window.onscroll = function () {
  scrollFunction();
};

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
/********************************************************************************************************/

function checkViewport() {
  const warning = document.querySelector(".desktop-only-warning");
  const mq = window.matchMedia(
    "(min-width: 320px) and (max-width: 360px), (min-width: 415px) and (max-width: 431px)"
  );

  if (mq.matches) {
    warning.style.display = "block";
  } else {
    warning.style.display = "none";
  }
}

window.addEventListener("load", checkViewport);
window.addEventListener("resize", checkViewport);

// scroll mouse
const container = document.querySelector(".news-items");
let isDown = false;
let startX;
let scrollLeft;

container.addEventListener("mousedown", (e) => {
  isDown = true;
  startX = e.pageX - container.offsetLeft;
  scrollLeft = container.scrollLeft;
  container.style.cursor = "grabbing";
});

container.addEventListener("mouseleave", () => {
  isDown = false;
  container.style.cursor = "grab";
});

container.addEventListener("mouseup", () => {
  isDown = false;
  container.style.cursor = "grab";
});

container.addEventListener("mousemove", (e) => {
  if (!isDown) return;
  e.preventDefault();
  const x = e.pageX - container.offsetLeft;
  const walk = (x - startX) * 2;
  container.scrollLeft = scrollLeft - walk;
});

container.style.cursor = "grab";
