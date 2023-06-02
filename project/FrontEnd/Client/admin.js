let currentlyOpenTab = "wineries";

window.onload = function(){
    /*
    const xhttpObject = new XMLHttpRequest();
    const body = JSON.stringify({
        "type": "GET_WINERY",
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

const viewWineries = function(){
    /*
    if(currentlyOpenTab === "wineries")return;
    const xhttpObject = new XMLHttpRequest();
    const body = JSON.stringify({
        "type": "GET_WINERY_ADMIN",
        "lastservedid": 0
    });

    xhttpObject.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            switchOffLoader();
            currentlyOpenTab = "wineries";
            populateOnloadData(this.responseText);
        }
    };

    xhttpObject.open("GET", "../../Api/Api.php");
    xhttpObject.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttpObject.send(body);
    */
}

const viewManagers = function(){
    /*
    if(currentlyOpenTab === "managers")return;
    const xhttpObject = new XMLHttpRequest();
    const body = JSON.stringify({
        "type": "GET_MANAGERS_ADMIN",
        "lastservedid": 0
    });

    xhttpObject.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            switchOffLoader();
            currentlyOpenTab = "managers";
            populateOnloadData(this.responseText);
        }
    };

    xhttpObject.open("GET", "../../Api/Api.php");
    xhttpObject.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttpObject.send(body);
    */
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
    /*
    const xhttpObject = new XMLHttpRequest();
    const body = JSON.stringify({
        "type": "OPEN_WINERY_ADMIN",
        "wineryID": wineryID
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

    xhttpObject.open("GET", "../../Api/Api.php");
    xhttpObject.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttpObject.send(body);
    */
}

const populateOnloadData = function(jsonData){

}

const appendData = function(){

}