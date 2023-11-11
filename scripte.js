function disparate() {
  mainElements.style.display = "block";

  var acc = document.getElementById("acueille");
  acc.style.animation = "accueille_disparition ease 1.5s forwards";
  setTimeout(() => {
    acc.style.display = "none";
  }, 1500);
}

Liste_nom = ["Jerome Bell", "Floyd Miles", "Cindy Pave"];
Liste_age = ["36 ans", "38 ans", "43 ans"];
Liste_info = ["Bénévole", "Médecin", "triathlète"];
Liste_phrase = [
  '“Faites-vous dépister !"',
  "“Ne pas avoir peur d'en parler”",
  "“Le dépistage, c'est la clé”",
];

Liste_btn = [
  ' <button onclick="vidéo2()">Voir la vidéo</button>',
  ' <button onclick="vidéo3()">Voir la vidéo</button>',
  '<button onclick="vidéo1()">Voir la vidéo</button>',
];
cpt = 0;
pouf();

setInterval(() => {
  document.getElementById("card_nom").innerText = Liste_nom[cpt];
  document.getElementById("card_age").innerText = Liste_age[cpt];
  document.getElementById("card_information").innerText = Liste_info[cpt];
  document.getElementById("card_phrase").innerText = Liste_phrase[cpt];
  document.getElementById("card_btn").innerHTML = Liste_btn[cpt];

  if (Liste_nom.length == cpt + 1) {
    cpt = 0;
  } else {
    cpt++;
  }
  pouf();
}, 8500);

function pouf() {
  setTimeout(() => {
    document.getElementById("card_nom").style.animation = "card 5.5s ease";
    document.getElementById("card_phrase").style.animation = "card 5.5s ease";
    document.getElementById("card_age").style.animation = "card 5.5s ease";
    document.getElementById("card_information").style.animation =
      "card 5.5s ease";
  }, 3000);

  setTimeout(() => {
    document.getElementById("card_nom").style.display = "none";
    document.getElementById("card_phrase").style.display = "none";
    document.getElementById("card_age").style.display = "none";
    document.getElementById("card_information").style.display = "none";
  }, 8499);

  setTimeout(() => {
    document.getElementById("card_nom").style.opacity = 0;
    document.getElementById("card_nom").style.display = "block";
    document.getElementById("card_nom").style.animation = "card_inve 3s ease";
    document.getElementById("card_phrase").style.opacity = 0;
    document.getElementById("card_phrase").style.display = "block";
    document.getElementById("card_phrase").style.animation =
      "card_inve 3s ease";
    document.getElementById("card_age").style.opacity = 0;
    document.getElementById("card_age").style.display = "block";
    document.getElementById("card_age").style.animation = "card_inve 3s ease";
    document.getElementById("card_information").style.opacity = 0;
    document.getElementById("card_information").style.display = "block";
    document.getElementById("card_information").style.animation =
      "card_inve 3s ease";
  }, 8500);
}
