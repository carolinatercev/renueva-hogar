
console.log(blogNoticias);

const container = document.getElementById("lista-blog");
// foreach para mostrar todas mis noticias con mi funcion verCard
blogNoticias.forEach(noticias => {
  // if(noticias.categoria ==="empresa"){
  //    console.log(noticias.titulo);
      container.innerHTML += `<div class="card" style="width:18rem;">
  <img src="${noticias.imagen}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">${noticias.titulo}</h5>
    <h6 class="card-subtitle mb-2 text-muted ">${noticias.resumen}</h6>
    <p class="card-text"></p>
    
  </div>
   <a  href="noticia.php" >Leer mas>></a>
  
</div>
<br />`;


})


// Esta función se utiliza para mostrar el enlace de la noticia al hacer click

function verEnlace(){
  const enlace= document.getElementById("enlace");
  const variable = enlace.dataset.categoria;
  //al hacer click en Leer mas me muestra la noticia completa
  
  
  enlace.addEventListener("click", (e) => {
    const idNoticia = e.target.getAttribute("data-id");
    localStorage.setItem("noticia-id", idNoticia); 
    window.location.href= "noticia.php";
   
  
    })
  }

  const noticiaCompleta = document.getElementById("noticia-completa");
  console.log(noticias.contenido)
  blogNoticias.forEach(noticias => {
     noticiaCompleta.innerHTML += `<div>
    <img src="${noticias.imagen}" class="card-img-top" alt="...">
    <div >
      <h5 class="card-title">${noticias.titulo}</h5>
      <h6 >${noticias.contenido}</h6>
      <section >${noticias.imagencontenido}</section>
    </div>
    </div>
  <br />`;
  
  
  })

  function imagenContenido () {
  blogNoticias.forEach(noticias => {
    
    `<section id="why-us contenido" class="why-us section">
    <div class="container">
      <div class="row no-gutters">

        <div class="col-lg-4 col-md-6 card" data-aos="fade-up" data-aos-delay="200">
          <img src="${noticias.imagencontenido[i]}" alt="imagenes">
        </div>
        <br>
      </div>
    </div>
  </section>`
  })

};



/*
function verCard(noticias) {
    console.log(noticias.titulo);
    return `<div class="card" style="width:18rem;">
    <img src="${noticias.imagen}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">${noticias.titulo}</h5>
      <h6 class="card-subtitle mb-2 text-muted ">${noticias.resumen}</h6>
      <p class="card-text"></p>
      
    </div>
     <a href="noticia.php?noticia=1">Leer mas>></a>
    
  </div>
  <br />`
}
function verTip(noticias) {
  console.log(noticias.titulo);
  return `<div class="card" style="width:18rem;">
  <img src="${noticias.imagen}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">${noticias.titulo}</h5>
    <h6 class="card-subtitle mb-2 text-muted ">${noticias.resumen}</h6>
    <p class="card-text"></p>
    
  </div>
   <a href="noticia.php?noticia=1">Leer mas>></a>
  
</div>
<br />`
}*/

