document.addEventListener("DOMContentLoaded", function() {
    let loadingScreen = document.getElementById("loading");
    loadingScreen.style.display = 'none';
})

function carousel(selectedImage) {
    if (document.getElementById('carouselExampleIndicators').style.display == 'none') {
        document.getElementById(selectedImage).classList.add("active");
        document.querySelectorAll('img').forEach(function(hide) {
            hide.style.display = 'none';
         });
         document.querySelectorAll('button').forEach(function(hide1) {
            hide1.style.opacity = '0';
         });       
         document.getElementById('carouselExampleIndicators').style.display = 'block';
         document.getElementById('logo').style.display = 'block';
         document.getElementById('checkpho').style.display = 'block';
         document.getElementById('checkbut').style.opacity = '1';
    } else {
        document.getElementById(selectedImage).classList.remove("active");
        document.querySelectorAll('img').forEach(function(show) {
            show.style.display = 'block';
         });
         document.querySelectorAll('button').forEach(function(show1) {
            show1.style.opacity = '1';
         });
         document.getElementById('carouselExampleIndicators').style.display = 'none';
    }
}

let shoppingCart = {
    addToCart: function(ChosenImage) {
        document.getElementById("viewBasket").innerHTML = "";
        document.getElementById("viewBasket").style.display = "block";
        document.getElementById("counter").textContent++;
        const newButton = document.createElement("button");
        const closeButton = document.createElement("Button");
        newButton.innerHTML = "Checkout"
        newButton.className = "position-absolute end-50 bottom-0"
        newButton.id  = "checkbut";
        newButton.style.transform = "translate(50%, 0)"
        document.getElementById("viewBasket").appendChild(newButton)
        const parentCol = document.createElement("div");
        const imageCol = document.createElement("div");
        const textCol  = document.createElement("div");
        const imgSrc = document.createElement("img");
        imgSrc.src = "../Images/" + ChosenImage + ".jpg"
        imgSrc.style.height = "5vh"
        imgSrc.style.width = "100%"
        imgSrc.id = "checkpho"
        document.getElementById("viewBasket").appendChild(parentCol)
        parentCol.style.height = "5vh"
        parentCol.style.width = "100%"
        parentCol.appendChild(imageCol)
        imageCol.style.height = "5vh"
        imageCol.style.width = "30%"
        imageCol.appendChild(imgSrc)
        parentCol.appendChild(textCol)
        textCol.style.height = "5vh"
        textCol.style.width = "70%"
        textCol.style.position = "absolute"
        textCol.style.fontSize = "0.5em"
        textCol.style.color = "#d3d9d4"
        textCol.style.transform = "translate(40%, -100%)"
        textCol.className = "text-center"
        textCol.innerHTML = "photo of " + ChosenImage;
        textCol.appendChild(closeButton)
        closeButton.innerHTML = "x";
        closeButton.onclick = function() {
            parentCol.remove()
            newButton.remove()
            document.getElementById("counter").textContent--;
            document.getElementById("viewBasket").classList = "text-center"
            document.getElementById("viewBasket").innerHTML = "Your Basket is Currently Empty";
        }
    },
    
    hideOrShow: function() {
        if (document.getElementById("viewBasket").style.display == "none") {
            document.getElementById("viewBasket").style.display = "block"
        } else {
            document.getElementById("viewBasket").style.display = "none"
        }
    }
}
