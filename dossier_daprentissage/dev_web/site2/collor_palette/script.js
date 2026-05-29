const generatteBnt = document.getElementById("generate_bnt")
const paletteContainer = document.querySelector("palette_contener")



generatteBnt.addEventListener("click", generatePalette());

function generatePalette(){
    const colors=[];

    for(let i = 0; i<5 ;i++){
        colors.push(generateRandomcolor());
    }
    updatePaletteDisplay(colors);
}




function generateRandomcolor(){
    const letters= "0123456789ABCDEF";
    let color = "#";

    for (let i=0 ; i<6 ; i++){
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color ;
}

function updatePaletteDisplay(color){
    const colorboxes = document.querySelectorAll(".color_box");

    colorboxes.forEach((box,index)=> {
        const color = [index];
        const colorDiv = box.querySelector(".color");
        const hexValue = box.querySelector(".hex_value");

        colorDiv.style.backrgoundcolor =  color;

        hexValue.textContent= color ;
    });
}

generatePalette();