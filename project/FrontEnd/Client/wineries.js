console.log("hello");

window.onload = function(){
    const xhttpObject = new XMLHttpRequest();
    switchOnLoader();

    xhttpObject.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            switchOffLoader();
            document.querySelector(".website-container").innerHTML = "";
            placeWineryElements(this.responseText);
        }
    };

    xhttpObject.open("GET", "../../Backend/Api/Api.php?type=GET_WINERIES");
    xhttpObject.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttpObject.send();
}

const searchFor = function() {
    const searchbarval = document.getElementById("searchbar").value;
    switchOnLoader();

    const xhttpObject = new XMLHttpRequest();
    xhttpObject.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            switchOffLoader();
            document.querySelector(".website-container").innerHTML = "";
            placeWineryElements(this.responseText);
        }
    };

    xhttpObject.open("GET", "../../Backend/Api/Api.php?type=SEARCH_WINERY&name=" + searchbarval);
    xhttpObject.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttpObject.send();
}

const openWinery = function(wineryID){
    const xhttpObject = new XMLHttpRequest();
    switchOnLoader();

    xhttpObject.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            switchOffLoader();
            window.location.href = "wineries-details.php";
        }
    };

    xhttpObject.open("GET", "../../Backend/Api/Api.php?type=OPEN_WINERY&id=" + wineryID);
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

const placeWineryElements = function(res){
    const jsonRes = JSON.parse(res);
    const websiteContainer = document.querySelector(".website-container");

    for(let i = 0; i < jsonRes.data.length; ++i){
        websiteContainer.innerHTML += '<div class="card card-item rounded-2" style="width: 18rem;" onmouseup="openWinery(\''+ jsonRes.data[i].wineryID +'\')">' +
                                '<div class="img-container">' +
                                '<img class="card-img-top" src="'+ jsonRes.data[i].winery_imageURL +'" alt="Card image cap">' +
                                '</div>' +
                                '<div class="card-body">' +
                                '<h5 class="card-title">'+ jsonRes.data[i].winery_name +'</h5>' +
                                '<p class="card-text description-text">'+ jsonRes.data[i].description +'</p>' +
                                '</div>' +
                                '<ul class="list-group list-group-flush">' +
                                '<li class="list-group-item">Location: '+ jsonRes.data[i].address +'</li>' +
                                '<li class="list-group-item">Manager: '+ jsonRes.data[i].winery_manager +'</li>' +
                                '<li class="list-group-item">Status: '+ isVerified(jsonRes.data[i].isVerified) +'</li>' +
                                '</ul>' +
                            '</div>';
    }
}

const isVerified = function(verfiedState){return verfiedState == 1 ? "verified" : "not verified"}

const filterBy = function(){

}

$(document).ready(function(){

    for (let index = 2; index < 10; index++) {
        $("#inlineCheckbox" + index).change(function(){  ////go through all checkboxes and see if they checked
            FilterCheck(2);
        });  
    }
    
    function FilterCheck(str){     /////Function for filtering takes in the number to know which option it is
        var location = '';
        switch (str) {
            case 2:
                location = "Cape Town";
                break;
        
            case 3:
                location = "Port Elizabeth";
                break;
            case 4:
                location = "Durban";
                break;
            case 5:
                location = "Johannesburg";
                break;
            case 6:
                location = "Pretoria";
                break;
            case 7:
                location = "East London";
                break;
            case 8:
                location = "Pietermaritzburg";
                break;
            case 9:
                location = "Bloemfontein";
                break;
        } 
        var body = {
            method : "filter",
            loc : location
        }
        .$post("../../Api/Api.php",body,function(data,status){
            if(status == 200)
            {
                var result = JSON.parse(data);
            }
            else console.log("Massive error blud");
        })
    }
});
