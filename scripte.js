function disparate() {
  mainElements.style.display = "block";

  var acc = document.getElementById("acueille");
  acc.style.animation = "accueille_disparition ease 1.5s forwards";
  setTimeout(() => {
    acc.style.display = "none";
  }, 1500);
}

Liste_nom = ["Daniel Tourneroche", "Jeremy Margallé", "Ali", "Ugo Pezzetta"];
Liste_age = ["", "", "", ""];
Liste_info = [
  "Représentant de la ligue contre le cancer",
  "Comédien et cascadeur",
  "Participante",
  "Maire de la Ferté sous jouarre",
];
Liste_phrase = [
  '“Il faut se faire dépister"',
  "“C’est important que ce genre d’événement se perpétue”",
  "“Ça n’arrive pas qu’aux autres, aussi bien qu’aux femmes qu’aux hommes”",
  "“9 femmes sur 10 peuvent guérir du cancer du sein à partir du moment où le dépistage est fait à temps”",
];

cpt = 0;
pouf();

setInterval(() => {
  document.getElementById("card_nom").innerText = Liste_nom[cpt];
  document.getElementById("card_age").innerText = Liste_age[cpt];
  document.getElementById("card_information").innerText = Liste_info[cpt];
  document.getElementById("card_phrase").innerText = Liste_phrase[cpt];

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

function video() {
  document.getElementById("vid").style.scale = 1;
  document.body.style.overflow = "hidden";
  document.getElementById("vid").style.backgroundColor = "rgba(0, 0, 0, 0.8)";
  document.getElementById("vid").style.transform = "translate(-50%, -50%)";
}

function novid() {
  document.getElementById("vid").style.backgroundColor = "transparent";
  setTimeout(() => {
    document.body.style.overflow = "auto";
    document.getElementById("vid").style.transform = "translate(-100%, -100%)";

    document.getElementById("vid").style.scale = 0.0001;
  }, 900);
}
