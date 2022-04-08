/*<div class="col align-items-start d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="<?php echo $consoles[0]->getPhotos(); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $consoles[0]->getName(); ?></h5>
                    <p class="card-text"><?php echo $consoles[0]->getDescription(); ?></p>
                    <a href="cart" class="btn btn-primary">Place in cart</a>
                </div>
            </div>
        </div> */

function loadConsoles() {
    fetch("https://wd-1-console-site.herokuapp.com/api/console")
    //http://localhost/api/console
    .then(result => result.json())
    .then(consoles => {
        consoles.forEach(cons => {
            // get the main div element for the page
            let mainDiv = document.getElementById("consolerow");

            let colDiv = document.createElement("div");
            colDiv.className = "col align-items-start d-flex justify-content-center";

            let cardDiv = document.createElement("div");
            cardDiv.className = "card";
            cardDiv.style = "width: 18rem";
            
            let img = document.createElement("img");
            img.src = cons.photos;
            img.className = "card-img-top";
            img.alt = "Console";

            let cardBody = document.createElement("div");
            cardBody.className = "card-body";

            let cardHeader = document.createElement("h5");
            cardHeader.className = "card-title";
            cardHeader.innerHTML = cons.name;

            let p = document.createElement("p");
            p.className = "card-text";
            p.innerHTML = cons.description;

            let a = document.createElement("a");
            a.href = "#";
            a.className = "btn btn-primary";
            a.innerHTML = "Place in cart";

            cardBody.appendChild(cardHeader);
            cardBody.appendChild(p);
            cardBody.appendChild(a);

            cardDiv.appendChild(img);
            cardDiv.appendChild(cardBody);

            colDiv.appendChild(cardDiv);

            mainDiv.appendChild(colDiv);
        });
    })
}

loadConsoles();