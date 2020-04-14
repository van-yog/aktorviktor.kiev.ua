"use strict";

let btnSend = document.querySelector("#btnSend");

btnSend.addEventListener("click", (event) => {
  let personalData = document.querySelector("#personalData");

  console.dir(personalData);
  if (!personalData.checked) event.preventDefault();
});
