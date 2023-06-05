let currentlyOpenTab = "wineries";
let currentlySelectedWinery = "";
let lastServedID = "";
let lastcount = 1;

window.onload = function(){
    const xhttpObject = new XMLHttpRequest();
    switchOnLoader();

    xhttpObject.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            switchOffLoader();
            currentlyOpenTab = "wineries";
            populateData(this.responseText);
        }
    };

    xhttpObject.open("GET", "../../Backend/Api/Api.php?" + "type=GET_WINERY_ADMIN");
    xhttpObject.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttpObject.send();
}

const switchOnLoader = function(){
    const websiteContainer = document.querySelector(".main-admin-container");
    websiteContainer.innerHTML += '<div class="spinner-container">' +
                                    '<div class="spinner-grow text-success" role="status">' +
                                        '<span class="sr-only">Loading...</span>' +
                                    '</div>' +
                                '</div>';
}

const switchOffLoader = function(){document.querySelector(".spinner-container").remove();}

const viewWineries = function(){
    if(currentlyOpenTab === "wineries")return;
    const xhttpObject = new XMLHttpRequest();
    switchOnLoader();

    xhttpObject.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            document.querySelector(".container-of-data .table tbody").innerHTML = "";
            lastcount = 1;
            switchOffLoader();
            currentlyOpenTab = "wineries";
            populateData(this.responseText);
        }
    };

    xhttpObject.open("GET", "../../Backend/Api/Api.php?" + "type=GET_WINERY_ADMIN");
    xhttpObject.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttpObject.send();
}

const viewManagers = function(){
    if(currentlyOpenTab === "managers")return;
    const xhttpObject = new XMLHttpRequest();
    switchOnLoader();

    xhttpObject.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            document.querySelector(".container-of-data .table tbody").innerHTML = "";
            lastcount = 0;
            switchOffLoader();
            currentlyOpenTab = "managers";
            populateData(this.responseText);
        }
    };

    xhttpObject.open("GET", "../../Backend/Api/Api.php?" + "type=GET_MANAGERS_ADMIN");
    xhttpObject.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttpObject.send();
}

const addWinery = function(){
    const wineryName = document.getElementById("winery-name-input").value;
    const wineryImageURL = document.getElementById("winery-imageurl-input").value;
    const wineryWebsiteURL = document.getElementById("winery-websiteurl-input").value;
    const location = document.getElementById("winery-location-input").value;
    const country = document.getElementById("winery-country-input").value;
    const region = document.getElementById("winery-region-input").value;
    const longitude = document.getElementById("longitude").value;
    const latitude = document.getElementById("latitude").value;
    const wineryManagerID = document.getElementById("winery-managerid-input").value;
    const isverified = document.getElementById("winery-isVerified-input").checked;
    const description = document.getElementById("floatingTextarea2").value;

    if(wineryName === "" || wineryImageURL === "" || wineryWebsiteURL === "" || location === ""
    || isverified === "" || description === "" || country === "" || region === "" 
    || longitude === "" || latitude === ""){
        document.querySelector(".form-error-container label").innerHTML = "Form cannot be empty. Only the winery manager id may be empty";
        return;
    }

    switchOnLoader();

    const xhttpObject = new XMLHttpRequest();

    xhttpObject.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            switchOffLoader();
            if(currentlyOpenTab === "wineries"){
                currentlyOpenTab = "managers";
                viewWineries();
            }
            else{
                currentlyOpenTab = "wineries";
                viewManagers();
            }
        }
    };

    const body = JSON.stringify({
        "type": "ADD_WINERY_ADMIN",
        "wineryName": wineryName ,
        "wineryImageURL": wineryImageURL ,
        "wineryWebsiteURL": wineryWebsiteURL ,
        "location": location ,
        "country": country ,
        "longitude": longitude ,
        "latitude": latitude ,
        "region": region ,
        "wineryManagerID": (wineryManagerID === "" ? null : wineryManagerID) ,
        "isverified": isverified ,
        "description": description
    });

    xhttpObject.open("POST", "../../Backend/Api/Api.php");
    xhttpObject.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttpObject.send(body);
}

const openExternalWineryManagementPage = function(wineryID){
    const xhttpObject = new XMLHttpRequest();
    const body = JSON.stringify({
        "type": "OPEN_WINERY_ADMIN",
        "managerID": wineryID
    });

    xhttpObject.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            window.location.href = "manager.php";
        }
    };

    xhttpObject.open("POST", "../../Backend/Api/Api.php");
    xhttpObject.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttpObject.send(body);
}

const deleteWinery = function(){
    const xhttpObject = new XMLHttpRequest();
    switchOnLoader();

    xhttpObject.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            switchOffLoader();
            if(currentlyOpenTab === "wineries"){
                currentlyOpenTab = "managers";
                viewWineries();
            }
            else{
                currentlyOpenTab = "wineries";
                viewManagers();
            }
        }
    };

    xhttpObject.open("GET", "../../Backend/Api/Api.php?type=DELETE_WINERY_ADMIN&wineryID=" + currentlySelectedWinery);
    xhttpObject.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttpObject.send();
}

const populateData = function(jsonData){
    const res = JSON.parse(jsonData);

    document.querySelector(".Total-wineries").innerHTML = res.data.wineryCount;
    document.querySelector(".Total-wines").innerHTML = res.data.wineCount;
    document.querySelector(".Total-tourists").innerHTML = res.data.managersCount;
    document.querySelector(".Total-managers").innerHTML = res.data.touristCount;

    const table = document.querySelector(".container-of-data .table tbody");

    if(res.data.isWineries !== undefined && res.data.wineries.length > 0){
        for(let i = 0; i < res.data.wineries.length; ++i, ++lastcount){
            table.innerHTML += '<tr class="wineryElement">' +
                                    '<th scope="row">'+ lastcount +'</th>' + 
                                    '<td>'+ res.data.wineries[i].winery_name +'</td>' +
                                    hasWineryManager(res.data.wineries[i].winery_manager) + 
                                    '<th scope="row action-btns">' +
                                        '<div data-bs-toggle="modal" data-bs-target="#confirmDelete" onmouseup="setWineryId(\''+ res.data.wineries[i].wineryID +'\')">' +
                                            '<i class="fa-solid fa-trash action-btn"></i>' +
                                        '</div>' +
                                    '</th>' +
                                '</tr>';
        }
        lastServedID = res.data.wineries[res.data.wineries.length - 1].wineryID;
    }
    else if(res.data.isWineries !== undefined  && res.data.wineries.length > 0){
        for(let i = 0; i < res.data.wineries.length; ++i, ++lastcount){
            table.innerHTML += '<tr class="wineryElement">' +
                                    '<th scope="row">'+ lastcount +'</th>' + 
                                    '<td>'+ res.data.wineries[i].winery_name +'</td>' +
                                    hasWineryManager(res.data.wineries[i].winery_manager) + 
                                    '<th scope="row action-btns">' +
                                        '<div data-bs-toggle="modal" data-bs-target="#confirmDelete" onmouseup="setWineryId(\''+ res.data.wineries[i].wineryID +'\')">' +
                                            '<i class="fa-solid fa-trash action-btn"></i>' +
                                        '</div>' +
                                    '</th>' +
                                '</tr>';
        }
        lastServedID = res.data.wineries[res.data.wineries.length - 1].winery_manager;
    }
}

const setWineryId = function(val){
    currentlySelectedWinery = val;
} 

const hasWineryManager = function(data){
    if(data === null || data === undefined)
        return '<th scope="row action-btns">' +
                    '<i class="fa-solid fa-ban action-btn"></i>' +
                '</th>';
    else return '<th scope="row action-btns" onmouseup="openExternalWineryManagementPage(\''+ data +'\')">' +
                    '<i class="fa-solid fa-arrow-up-right-from-square action-btn"></i>' +
                '</th>';
}

const loadMoreData = function(){
    const xhttpObject = new XMLHttpRequest();
    switchOnLoader();
    xhttpObject.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            switchOffLoader();
            populateData(this.responseText);
        }
    };

    xhttpObject.open("GET", "../../Backend/Api/Api.php?" + "type=" + ( currentlyOpenTab === "managers" ? "GET_MANAGERS_ADMIN" : "GET_WINERY_ADMIN") + "&last_id=" + lastServedID);
    xhttpObject.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttpObject.send();
}
