let currentlyOpenTab = "wineries";

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
    /*
    const xhttpObject = new XMLHttpRequest();
    const body = JSON.stringify({
        "type": "ADD_WINERY_ADMIN",
        "lastservedid": 0
    });

    xhttpObject.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            switchOffLoader();
            populateOnloadData(this.responseText);
        }
    };

    xhttpObject.open("GET", "../../Api/Api.php");
    xhttpObject.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttpObject.send(body);
    */
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
    /*
    const xhttpObject = new XMLHttpRequest();
    const body = JSON.stringify({
        "type": "DELETE_WINERY_ADMIN",
        "wineryID": wineryID
    });

    xhttpObject.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            switchOffLoader();
            populateOnloadData(this.responseText);
        }
    };

    xhttpObject.open("GET", "../../Backend/Api/Api.php");
    xhttpObject.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttpObject.send(body);
    */
}

const populateData = function(jsonData){
    const res = JSON.parse(jsonData);

    document.querySelector(".Total-wineries").innerHTML = res.data.wineryCount;
    document.querySelector(".Total-wines").innerHTML = res.data.wineCount;
    document.querySelector(".Total-tourists").innerHTML = res.data.managersCount;
    document.querySelector(".Total-managers").innerHTML = res.data.touristCount;

    const table = document.querySelector(".container-of-data .table tbody");

    if(res.data.isWineries !== undefined){
        for(let i = 0; i < res.data.wineries.length; ++i){
            table.innerHTML += '<tr>' +
                                    '<th scope="row">'+ res.data.wineries[i].wineryID +'</th>' + 
                                    '<td>'+ res.data.wineries[i].winery_name +'</td>' +
                                    hasWineryManager(res.data.wineries[i].winery_manager) + 
                                    '<th scope="row action-btns">' +
                                    '<i class="fa-solid fa-trash action-btn"></i>' +
                                    '</th>' +
                                '</tr>';
        }
    }
    else if(res.data.isWineries !== undefined){
        for(let i = 0; i < res.data.wineries.length; ++i){
            table.innerHTML += '<tr>' +
                                    '<th scope="row">'+ res.data.wineries[i].winery_manager +'</th>' + 
                                    '<td>'+ res.data.wineries[i].winery_name +'</td>' +
                                    hasWineryManager(res.data.wineries[i].winery_manager) + 
                                    '<th scope="row action-btns">' +
                                    '<i class="fa-solid fa-trash action-btn"></i>' +
                                    '</th>' +
                                '</tr>';
        }
    }
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