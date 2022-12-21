function CategoriaFilter(a){
  //  alert(a);

     var xmlhttp = new XMLHttpRequest();
     xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
           document.getElementById('results').innerHTML  = (this.responseText);
          }
     };
     xmlhttp.open("GET","process.php?searchphrase="+a, true);
     xmlhttp.send();
   
   }
 function LoginUser (){
     let div = document.createElement("div");
     div.className.add("container-teste");

}


var estabelecimentos = [
  {
      id: 1,
      nomeEmpresa: "teste1",
      info: "Lorem, deren, trataro, filede, nerada",
      price: "$5.95",
      imageSrc: "images/categoria/menu-item-1.png"
  },

  {
      id: 2,
      nomeEmpresa: "teste2",
      info: "Lorem, deren, trataro, filede, nerada",
      price: "$14.95",
      imageSrc: "images/categoria/menu-item-2.png"
  },

  {
      id: 3,
      nomeEmpresa: "teste3",
      info: "Lorem, deren, trataro, filede, nerada",
      price: "$8.95",
      imageSrc: "images/categoria/menu-item-3.png"
  }

  
];


const classCol = ["col-lg-4","menu-item"];
const classImg = ["menu-img","img-fluid"];
const classA = ["glightbox"];


for(let i=0; i<estabelecimentos.length; i++){

      let col = document.createElement("div");
      classCol.forEach(element => {
               col.classList.add(element);
           });
      

      let a = document.createElement("a");
      a.href= estabelecimentos[i].imageSrc;
      classA.forEach(element => {
               a.classList.add(element);
           });
      let img = document.createElement("img");
      img.src= estabelecimentos[i].imageSrc;
      classImg.forEach(element => {
               img.classList.add(element);
           });
      
      a.append(img);
      col.append(a);



      let h4 = document.createElement("h4");
      h4.append(estabelecimentos[i].nomeEmpresa);
      col.append(h4);

      let p =document.createElement("p");
      p.classList.add("ingredients");
      p.append(estabelecimentos[i].info);
      col.append(p);

      let p2 = document.createElement("p");
      p2.classList.add("price");
      p2.append(estabelecimentos[i].price);
      col.append(p2);

  
      document.querySelector("#row1").append(col);
   
}

for(let i=0; i<estabelecimentos.length; i++){

  let col = document.createElement("div");
  classCol.forEach(element => {
           col.classList.add(element);
       });
  

  let a = document.createElement("a");
  a.href= estabelecimentos[i].imageSrc;
  classA.forEach(element => {
           a.classList.add(element);
       });
  let img = document.createElement("img");
  img.src= estabelecimentos[i].imageSrc;
  classImg.forEach(element => {
           img.classList.add(element);
       });
  
  a.append(img);
  col.append(a);



  let h4 = document.createElement("h4");
  h4.append(estabelecimentos[i].nomeEmpresa);
  col.append(h4);

  let p =document.createElement("p");
  p.classList.add("ingredients");
  p.append(estabelecimentos[i].info);
  col.append(p);

  let p2 = document.createElement("p");
  p2.classList.add("price");
  p2.append(estabelecimentos[i].price);
  col.append(p2);


  document.querySelector("#row2").append(col);

}

for(let i=0; i<estabelecimentos.length; i++){

  let col = document.createElement("div");
  classCol.forEach(element => {
           col.classList.add(element);
       });
  

  let a = document.createElement("a");
  a.href= estabelecimentos[i].imageSrc;
  classA.forEach(element => {
           a.classList.add(element);
       });
  let img = document.createElement("img");
  img.src= estabelecimentos[i].imageSrc;
  classImg.forEach(element => {
           img.classList.add(element);
       });
  
  a.append(img);
  col.append(a);



  let h4 = document.createElement("h4");
  h4.append(estabelecimentos[i].nomeEmpresa);
  col.append(h4);

  let p =document.createElement("p");
  p.classList.add("ingredients");
  p.append(estabelecimentos[i].info);
  col.append(p);

  let p2 = document.createElement("p");
  p2.classList.add("price");
  p2.append(estabelecimentos[i].price);
  col.append(p2);


  document.querySelector("#row3").append(col);

}


for(let i=0; i<estabelecimentos.length; i++){

  let col = document.createElement("div");
  classCol.forEach(element => {
           col.classList.add(element);
       });
  

  let a = document.createElement("a");
  a.href= estabelecimentos[i].imageSrc;
  classA.forEach(element => {
           a.classList.add(element);
       });
  let img = document.createElement("img");
  img.src= estabelecimentos[i].imageSrc;
  classImg.forEach(element => {
           img.classList.add(element);
       });
  
  a.append(img);
  col.append(a);



  let h4 = document.createElement("h4");
  h4.append(estabelecimentos[i].nomeEmpresa);
  col.append(h4);

  let p =document.createElement("p");
  p.classList.add("ingredients");
  p.append(estabelecimentos[i].info);
  col.append(p);

  let p2 = document.createElement("p");
  p2.classList.add("price");
  p2.append(estabelecimentos[i].price);
  col.append(p2);


  document.querySelector("#row4").append(col);

}