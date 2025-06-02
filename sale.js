
function response(response){
  if( !response.ok) {
    console.log("Errore in response");
    return null;
  }
  else {
    return response.json();
  }
}

function jsonSale(rjson){
    const block = document.querySelector('#sale');
    const N=rjson.length;
    console.log(N);
    for(let i=0; i<N; i++) {
        let cont_a=document.createElement("a");
        cont_a.href="descrizione.php?nome="+rjson[i].nome+"&f="+rjson[i].link+"&d="+rjson[i].descrizione;
        let cont_img=document.createElement("img");
        cont_img.src="img/"+rjson[i].link;
        cont_a.appendChild(cont_img);
        let cont_d=document.createElement("div");
        cont_d.classList.add("nome_sala");
        cont_d.textContent=rjson[i].nome;
        cont_a.appendChild(cont_img);
        cont_a.appendChild(cont_d); 
        block.appendChild(cont_a);
    }
}

fetch("carica_sale.php").then(response).then(jsonSale);