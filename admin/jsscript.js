{
  const isActive = document.querySelectorAll(".my-card-news.active");

  for (let i = 0; i < isActive.length; i++) {
    const active = isActive[i];
  }
}

{
  const isActive_product = document.querySelectorAll(".card.active");

  for (let i = 0; i < isActive_product.length; i++) {
    const active = isActive_product[i];
  }
}

// $(document).ready(function () {
//   const cardList = $("#card-news");

//   for (let i = 0; i < cardnewsmensteam.length; i++) {
//     const item = cardnewsmensteam[i];
//     const cardHtml = createCardHtml(item);
//     cardList.append(cardHtml);
//   }
// });

// function createCardHtml(item) {
//   return `
//       <div class="my-card-news ${item.type}" data-id="${item.id}" data-type="${item.type}" data-param="${item.param}">
//         <img class="news-img" src="${item.img}" alt="${item.name}">
//         <div class="card-news-name">
//           <p class="news-name">${item.name}</p>
//         </div>
//         <p class="news-desc">${item.description}</p>
//       </div>`;
// }

// function searchInGroup(group, value) {
//   let html = "";
//   for (let i = 0; i < group.length; i++) {
//     const item = group[i];
//     if (item.name.includes(value)) {
//       html += createCardHtml(item);
//     }
//   }
//   return html;
// }

// function searchsomething(elem) {
//   const value = $("#" + elem.id).val();
//   console.log("Searching for:", value);

//   let html = "";

//   html += searchInGroup(cardnewsmensteam, value);
//   html += searchInGroup(cardnewsacademyteam, value);
//   html += searchInGroup(cardnewswomensteam, value);

//   if (html === "") {
//     $("#card-news").html(`<p>Not found News or "${value}"</p>`);
//   } else {
//     $("#card-news").html(html);
//   }
// }
