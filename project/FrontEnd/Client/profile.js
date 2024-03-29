var req = new XMLHttpRequest();
let currentlySelectedReviewID = 0;
var username;

req.onreadystatechange = function() {
  if (req.readyState == 4 && req.status == 200) {
    var res = req.responseText;

    var req2 = new XMLHttpRequest(); // Use a different variable name for the inner XMLHttpRequest

    username = res;
    var json = { 'type': 'GET_USER_REVIEWS', 'username': username };

    req2.onreadystatechange = function() {
      if (req2.readyState == 4 && req2.status == 200) {
        var res = req2.responseText;
        var jRes = JSON.parse(res);
        var reviewOutput = "";
        

        for (var i in jRes.data) {
          reviewOutput += '<tr>' +
                            '<th scope="row">' + jRes.data[i].reviewID + '</th>'+
                            '<td>' + jRes.data[i].review_description + '</td>'+
                            '<td>' + starGeneration(jRes.data[i].points) + '</td>'+
                            '<th scope="row action-btns">'+
                              '<div data-bs-toggle="modal" data-bs-target="#editReview" onmouseup="setcurrentlySelectedReviewID(\''+ jRes.data[i].reviewID +'\')">' +
                                '<i class="fa-solid fa-user-pen action-btn"></i>'+
                              '</div>' +
                            '</th>'+
                            '<th scope="row action-btns">'+
                              '<div data-bs-toggle="modal" data-bs-target="#confirmDeleteReview" onmouseup="setcurrentlySelectedReviewID(\''+ jRes.data[i].reviewID +'\')">' +
                                '<i class="fa-solid fa-trash action-btn"></i>' +
                              '</div>' +
                            '</th>'+
                          '</tr>';
        }

        document.querySelector('tbody').innerHTML = reviewOutput;
      }
    };

    req2.open('POST', '../../Backend/Api/Api.php');
    req2.send(JSON.stringify(json));
  }
};

req.open('GET', '../Components/SessionHandler.php', false);
req.send();

//Conversion based on the following method: https://appetiteforwine.blog/2016/02/29/how-to-rate-wine/#:~:text=Over%20the%20years%2C%20I%27ve,-94%20%3D%204.5%20Stars%2FHearts
const starGeneration = function(points){
  if (points >= 95) {
    return '<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>';
  } else if (points >= 92) {
    return '<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i>';
  } else if (points >= 88) {
    return '<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>';
  } else if (points >= 85) {
    return '<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i>';
  } else if (points >= 82) {
    return '<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>';
  } else if (points >= 80) {
    return '<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i>';
  } else if (points >= 77) {
    return '<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>';
  } else if (points >= 74) {
    return '<i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i>';
  } else if (points >= 71) {
    return '<i class="fa-solid fa-star"></i>';
  } else {
    return '<i class="fa-solid fa-star-half"></i>';
  }
};

const deleteMyAccount = function(){
  req = new XMLHttpRequest
  json = {"type": "DELETE_ACCOUNT", "username": username};

  req.onreadystatechange = function() {
    if (req.readyState == 4 && req.status == 200) {
      var res = req.responseText;
      var jRes = JSON.parse(res);

      if(jRes.status == 'success'){
        req = new XMLHttpRequest
        json = {"type": "LOGOUT"};

        req.open('POST', '../../Backend/Api/Api.php');
        req.send(JSON.stringify(json));

        window.location.href = "index.php";
      }
      else if(jRes.status == 'error'){
          console.log(res);
      }
    }
  }

  req.open('POST', '../../Backend/Api/Api.php');
  req.send(JSON.stringify(json));
}

const changeUserName = function(){
  const newUsername = document.getElementById("username-input").value;
  
  req = new XMLHttpRequest
  json = {"type": "UPDATE_USERNAME", "CurrUsername": username, "NewUsername": newUsername};

  req.onreadystatechange = function() {
    if (req.readyState == 4 && req.status == 200) {
      var res = req.responseText;
      var jRes = JSON.parse(res);

      if(jRes.status == 'success'){
        makeUsernameSession(newUsername);

        location.reload();
      }
      else if(jRes.status == 'error'){
          console.log(res);
      }
    }
  }

  req.open('POST', '../../Backend/Api/Api.php');
  req.send(JSON.stringify(json));
}

const changePassword = function(){
  const newPassword = document.getElementById("password-input").value;
  
  req = new XMLHttpRequest
  json = {"type": "UPDATE_PASSWORD", "username": username, "newPswrd": newPassword};

  req.onreadystatechange = function() {
    if (req.readyState == 4 && req.status == 200) {
      var res = req.responseText;
      var jRes = JSON.parse(res);

      if(jRes.status == 'success'){
        
      }
      else if(jRes.status == 'error'){
          console.log(res);
      }
    }
  }

  req.open('POST', '../../Backend/Api/Api.php');
  req.send(JSON.stringify(json));
}

const setcurrentlySelectedReviewID = function(newID){
  currentlySelectedReviewID = newID;
}

const editReview = function(){
  const reviewdescription = document.getElementById("reviewdescription").value;
  
  //do stuff with id of the review is set in currentlySelectedReviewID variable
}

const deleteReview = function(){
  
  //do stuff with id of the review is set in currentlySelectedReviewID variable
}

const makeUsernameSession = function(username){
  req = new XMLHttpRequest;

  req.onreadystatechange = function(){//recieves api response
      if(req.readyState == 4 && req.status == 200)
      {
          var res = req.responseText;
          var jRes = JSON.parse(res);
          console.log(jRes.username);
      }
  }

  req.open('POST', '../Components/SessionHandler.php');
  req.send(username);
};