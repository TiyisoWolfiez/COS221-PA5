let lastServedID = "";
let searchval = "";

window.onload = function(){
    const xhttpObject = new XMLHttpRequest();
    switchOnLoader();

    xhttpObject.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            switchOffLoader();
            document.querySelector(".website-container").innerHTML = "";
            placeWineElements(this.responseText);
        }
    };

    xhttpObject.open("GET", "../../Backend/Api/Api.php?type=GET_WINE&lastcount=0");
    xhttpObject.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttpObject.send();
}

const loadDefault = function(){
    document.getElementById("searchbar").value = "";
    const xhttpObject = new XMLHttpRequest();
    switchOnLoader();

    xhttpObject.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            switchOffLoader();
            document.querySelector(".website-container").innerHTML = "";
            placeWineElements(this.responseText);
        }
    };

    xhttpObject.open("GET", "../../Backend/Api/Api.php?type=GET_WINE&lastcount=0");
    xhttpObject.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttpObject.send();
}

const searchFor = function() {
    const searchbarval = document.getElementById("searchbar").value;
    searchval = searchbarval;
    switchOnLoader();

    const xhttpObject = new XMLHttpRequest();
    xhttpObject.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            switchOffLoader();
            document.querySelector(".website-container").innerHTML = "";
            placeWineElements(this.responseText);
        }
    };

    xhttpObject.open("GET", "../../Backend/Api/Api.php?type=SEARCH_WINE&lastcount=0&name=" + searchbarval);
    xhttpObject.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttpObject.send();
}

const switchOnLoader = function(){
    const websiteContainer = document.querySelector(".website-container");
    websiteContainer.innerHTML += '<div class="spinner-container">' +
                                    '<div class="spinner-grow text-success" role="status">' +
                                        '<span class="sr-only">Loading...</span>' +
                                    '</div>' +
                                '</div>';
}

const switchOffLoader = function(){
    document.querySelector(".spinner-container").remove();
}

const placeWineElements = function(res){
    const jsonRes = JSON.parse(res);
    const websiteContainer = document.querySelector(".website-container");

    for(let i = 0; i < jsonRes.data.length; ++i){
        websiteContainer.innerHTML += '<div class="card card-item rounded-2" style="width: 18rem;">'+
                                        '<div class="img-container">'+
                                            '<img class="card-img-top" src="'+ jsonRes.data[i].wine_imageURL +'" alt="Card image cap">'+
                                        '</div>'+
                                        '<div class="card-body">'+
                                        '<h5 class="card-title">'+ jsonRes.data[i].wine_name +'</h5>' + 
                                        '<p class="card-text">'+ jsonRes.data[i].winery_name +'</p>'+
                                        '</div>'+
                                        '<ul class="list-group list-group-flush">'+
                                        '<li class="list-group-item"> <i class="fa-solid fa-circle-notch"></i> &nbsp;'+ jsonRes.data[i].varietal +'</li>'+
                                        '<li class="list-group-item"> <i class="fa-solid fa-palette"></i> &nbsp;'+ jsonRes.data[i].colour  +' </li>'+
                                        '<li class="list-group-item"> <i class="fa-solid fa-cubes-stacked"></i> &nbsp;'+ jsonRes.data[i].carbonation +' •  &nbsp;'+ jsonRes.data[i].sweetness +' </li>'+
                                        '<li class="list-group-item"><i class="fa-regular fa-calendar"></i> &nbsp; year bottled: '+ jsonRes.data[i].year_bottled +'</li>'+
                                        '</ul>'+
                                    '</div>';
    }
    lastServedID = jsonRes.lastcount;
    // On Click
    const divs = document.querySelectorAll('.card');
    // Add click event listener to each div
    divs.forEach(div => {
        div.addEventListener('click', () => {
            // Get the title element within the div
            const titleElement = div.querySelector('.card-title');
            // Get the text of the title element
            const titleText = titleElement.textContent;
            localStorage.setItem('winery_name', titleText);
            window.location.href = "wine-details.php";
        });
    });
}

const loadMoreData = function(){
    const xhttpObject = new XMLHttpRequest();
    switchOnLoader();
    xhttpObject.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            switchOffLoader();
            placeWineElements(this.responseText);
        }
    };

    xhttpObject.open("GET", "../../Backend/Api/Api.php?" + "type=SEARCH_WINE&lastcount=" + lastServedID + "&name=" + searchval);
    xhttpObject.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttpObject.send();
}

const openWine = function(){
    const xhttpObject = new XMLHttpRequest();
    switchOnLoader();

    xhttpObject.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            switchOffLoader();
            window.location.href = "wine-details.php";
        }
    };

    xhttpObject.open("GET", "../../Backend/Api/Api.php?type=OPEN_WINE&id=" + wineID);
    xhttpObject.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttpObject.send();
}

const checkValue = function(){
    console.log("here")
    const searchbarval = document.getElementById("searchbar").value;
    if(searchbarval === "")document.querySelector(".cancel-search-btn").hidden = true;
    else document.querySelector(".cancel-search-btn").hidden = false;
}

const filterBy = function(){

}

$(document).ready(function(){
    var FilterBC = 'div.ms-3.btn.btn-light.btn-rounded.rounded-4.border.border-dark-subtle.filter-buttons';
    $(FilterBC).click(function(){
        console.log("Insideee");
        var typeWine = $(this).html();
        console.log(typeWine);
        var body = {
            type : 'GET_WINES',
            location : flocation
        }
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function()
        {
            if(this.readyState== 4 && this.status == 200)
            {
                document.querySelector(".website-container").innerHTML = "";
            }
        }
    })
})