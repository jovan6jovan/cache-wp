// MENU SCRIPTS
const drinksContainer = document.querySelector(".drinks-container");
const foodContainer = document.querySelector(".food-container");
const card1 = document.querySelector("#menu-card-1");
const card2 = document.querySelector("#menu-card-2");
const card3 = document.querySelector("#menu-card-3");
const card11 = document.querySelector("#menu-card-11");
const card4 = document.querySelector("#menu-card-4");
const card5 = document.querySelector("#menu-card-5");
const card6 = document.querySelector("#menu-card-6");

const url = "http://restaurant-cach.local/wp-content/themes/cache-theme/";

card1.addEventListener("click", function() {
  drinksContainer.classList.toggle("transition");

  if (card1.firstElementChild.src == `${url}images/menu-img/01.jpg`) {
    card1.firstElementChild.src = `${url}images/menu-img/arrow-right.svg`;
    card1.classList.add("reset-transform");
    card2.classList.add("reset-transform");
    card3.classList.add("reset-transform");
  } else {
    card1.firstElementChild.src = `${url}images/menu-img/01.jpg`;
    card1.classList.remove("reset-transform");
    card2.classList.remove("reset-transform");
    card3.classList.remove("reset-transform");
  }
});

card11.addEventListener("click", function() {
  foodContainer.classList.toggle("transition");

  if (card11.firstElementChild.src == `${url}images/menu-img/01.jpg`) {
    card11.firstElementChild.src = `${url}images/menu-img/arrow-right.svg`;
    card11.classList.add("reset-transform");
    card4.classList.add("reset-transform");
    card5.classList.add("reset-transform");
    card6.classList.add("reset-transform");
  } else {
    card11.firstElementChild.src = `${url}images/menu-img/01.jpg`;
    card11.classList.remove("reset-transform");
    card4.classList.remove("reset-transform");
    card5.classList.remove("reset-transform");
    card6.classList.remove("reset-transform");
  }
});
