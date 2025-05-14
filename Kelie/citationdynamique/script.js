
const Quotes =[
     {
        quote:"The pessimist sees difficulty in every opportunity.",
        author: "__Robert Greene"
    },
    {
    quote: "The pessimist sees difficulty in every opportunity.The optimist sees the opportunity in every difficult!",
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
    quote: "Courir et se gratter les pieds ne vont pas ensemnle!",
    author: "__#Amassoka"
  },
    
    ];
    
function newQuote(){
    const randomIndex=Math.floor(Math.random()*Quotes.length);
    const quote = document.getElementById('quote');
    const author = document.getElementById('author');
    quote.innerText = `${Quotes[randomIndex].quote}`;
    author.innerText = `-${Quotes[randomIndex].author}`;
};
const btn = document.getElementById("btnQuote");
let random =() => {
  return Math.floor(Math.random()*256);
};
let changeColor =() =>{
let randomColor = `rgb(${random()},${random()},${random()})`;
document.body.style.backgroundColor =randomColor;
};

btn.addEventListener("click", () =>{ 
   changeColor();
   newQuote(); 
});
window.addEventListener("load", () =>{ 
  changeColor();
  newQuote(); 
});