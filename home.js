
//slider

const gymTimePhotos = [
    "kindpng1",
    "kindpng2",
    "kindpng3",
    "kindpng4",
    "kindpng5",
    "kindpng6",
    "kindpng7",
    "kindpng8"
];

let gymTimeIndex = 0; // Start with the first image
let gymTimeImg;
const imagePreloads = [];

// Preload images
gymTimePhotos.forEach(photo => {
    const img = new Image();
    img.src = `${photo}.png`;
    imagePreloads.push(img);
});

setInterval(() => {
    gymTimeIndex++;
    if (gymTimeIndex >= gymTimePhotos.length) {
        gymTimeIndex = 0;
    }
    gymTimeImg = `url('${gymTimePhotos[gymTimeIndex]}.png')`;
    document.querySelector(".container2").style.backgroundImage = gymTimeImg;
}, 3000);
