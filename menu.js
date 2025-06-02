
const Btn_ricerca = document.querySelector('#aggiungi');
const Btn_pref = document.querySelector('#l_preferiti');
const form_ricerca = document.querySelector('#ricerca');

function chiusura(event){
    // const closeBtn = document.querySelector('.chiudi_pref');
    // closeBtn.removeEventListener('click', chiusura);
    //fetch("http://localhost/hw1/menu.php");
    event.currentTarget.removeEventListener('click', chiusura);
    location.reload();
    return false;
}

function apertura(event){
  let finestra;
  let closeBtn;
  if (event.currentTarget==Btn_ricerca) {
    finestra = document.querySelector('#finestra_ricerca');
  }
  else {
    finestra = document.querySelector('#finestra_preferiti');
    fetch("preferiti.php").then(response).then(jsonPref);
  }
  finestra.style.display = 'block';
  /*
    if (finestra.style.display == 'none' || finestra.style.display == '') {
      finestra.style.display = 'block';
    } else {
      finestra.style.display = 'none';
    }
  */
    closeBtn = finestra.querySelector('.chiudi');
    closeBtn.addEventListener('click', chiusura);
}


function response(response){
  if( !response.ok) {
    console.log("Errore in response");
    return null;
  }
  else {
    return response.json();
  }
}

function jsonPref(rjson){
  if (!rjson["success"]){
    let elem={};
    let list=[];
    const N=rjson.length;
    const msg = document.querySelector('#msg_pref');
    console.log(N);
    if(N>0){
      msg.style.display = 'none';
      for(let i=0; i<N; i++) {
        elem={'id' : rjson[i].id_img , 'src' : rjson[i].link};
        list.push(elem);
      }
      displayPhotos(list, 1); // il secondo parametro indica quale dei div selezionare; 1 = preferiti
    }
    else{
      msg.style.display = 'block';
    }
  }
}

function jsonAdd(rjson){
  console.log(rjson);
}

function jsonSelect(rjson){
  console.log(rjson);
}

function imgSelect(event){
  const checkObj = event.currentTarget;
  const idx = checkObj.name;
    const preferito= checkObj.parentElement;
    const node=preferito.childNodes[0]; // L'elemento 0 e' l'immagine, l'elemento 1 e' il checkbox
    console.log( node );
  if (checkObj.checked) {
    // L'utente ha selezionato una immagine che deve essere inserita nel DB
    console.log( idx+" checked");
    fetch("add_img.php?id="+node.id+"&l="+encodeURIComponent(node.src)).then(response).then(jsonSelect);
  }
  else {
    // L'utente ha deselezionato una immagine da cancellare dal DB
    console.log( idx+" not checked");
    fetch("remove_img.php?id="+node.id+"&l="+encodeURIComponent(node.src)).then(response).then(jsonSelect);
  }
}

function jsonRicerca(rjson){
  if (!rjson["success"]){
    let elem={};
    let list=[];
    const N=rjson.photos.length;
    for(let i=0; i<N; i++) {
      // cont_img.id=rjson.photos[i].id;
      // cont_img.src=rjson.photos[i].src.medium; // ci sono anche altri formati
      elem={'id' : rjson.photos[i].id , 'src' : rjson.photos[i].src.medium};
      list.push(elem);
    }
    displayPhotos(list, 0); // il secondo parametro indica quale dei div selezionare; 0 = ricerca
  }
}

function displayPhotos(photos, box){
      const box_img=document.querySelectorAll(".show-img");
      box_img[box].replaceChildren();
      console.log(box_img[box]);
      const N=photos.length;
      for(let i=0; i<N; i++) {
        let contenitore=document.createElement("div");
        contenitore.id="cont"+i;
        let cont_img=document.createElement("img");
        cont_img.id=photos[i].id;
        cont_img.src=photos[i].src;
        let cont_check=document.createElement("input");
        cont_check.type='checkbox';
        cont_check.name=i;
        if (box == 1)
          cont_check.checked=true;
        contenitore.appendChild(cont_img);
        contenitore.appendChild(cont_check);
        box_img[box].appendChild(contenitore);
        cont_check.addEventListener("click", imgSelect);
      }
  }

function cerca_img(event){
    event.preventDefault();
    
    const f=document.getElementById("ricerca"); //querySelector("#ricerca");
    //console.log(f);
    const ricerca_dati = new FormData(f);
    //console.log(ricerca_dati);
    //console.log(ricerca_dati.get('s-bar'));
    fetch("ricerca_immagini.php?q="+encodeURIComponent(ricerca_dati.get('s-bar'))).then(response).then(jsonRicerca);
}


if (Btn_ricerca!=null)
  Btn_ricerca.addEventListener('click', apertura);
if (Btn_pref!=null)
  Btn_pref.addEventListener('click', apertura);

form_ricerca.addEventListener('submit', cerca_img);

  