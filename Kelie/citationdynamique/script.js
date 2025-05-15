
const Quotes =[
     {
        quote:"You must learn to see people as they are, not as you wish them to be.",
        author: "__Robert Greene"
    },
    {
    quote: "The pessimist sees difficulty in every opportunity.The optimist sees the opportunity in every difficulty!",
    author: "__Winston Churchill"
    },
    {
    quote:  "La Connaissace est le Pouvoir!",
    author:  "__Francis Bacon"
    },
    {
    quote: "Le voyage de mille lieues commence par un pas!",
    author:"__Lao Tseu"
},
  {
    quote: "Le succès n'est pas final, l'échec n'est pas fatal: C'est le courage de continuer qui compte.",
    author:"__Winston Churchill"
  }, 
  {
    quote:"La seule façon de faire du bon travail est d'aimer ce que vous faites.",
    author:"__Steve Jobs"
  },
  {
    quote:  "Il y a qu'une erreur innée, c'est celle qui consiste de croire que nous existons pour être heureux.",
    author:"__Arthur Schopenhower"
  },
  {
    quote: "L'imagination est plus importante que le savoir." ,
    author: "__Albert Einstein"
  },
  {
    quote: "Courir et se gratter les pieds ne vont pas ensemble!",
    author: "__#Amassoka"
  },
    
    ];
    
function newQuote(){
    const quoteBox=document.getElementById('quoteBox');  
    const quote = document.getElementById('quote');
    const author = document.getElementById('author');
   /*faire disparaire*/
    quoteBox.style.opacity=0; 
    setTimeout(() => {
      const randomIndex=Math.floor(Math.random()*Quotes.length);
      quote.innerText = `"${Quotes[randomIndex].quote}"`;
      author.innerText = `__${Quotes[randomIndex].author}`;
      quoteBox.style.opacity=2;
    }, 500); /*reaffichage, avec la meme durée ou plus courte que la disparition ( dans le css)*/
}
    
const btn = document.getElementById("btnQuote");
let random =() => {
  return Math.floor(Math.random()*256);
};


let changeColor =() =>{
  const random =() => Math.floor(Math.random()*256);
    let color1 = `rgb(${random()},${random()},${random()})`;
    let color2 = `rgb(${random()},${random()},${random()})`;
    let angle =Math.floor(Math.random()*360); // choisir l'angle du dégradé
document.body.style.background =`linear-gradient(${angle}deg, ${color1}, ${color2})`;
};

btn.addEventListener("click", () =>{ 
   changeColor();
   newQuote(); 
});
window.addEventListener("load", () =>{ 
  changeColor();
  newQuote(); 
});