var req = new XMLHttpRequest();

req.onreadystatechange = function() {
  if (req.readyState == 4 && req.status == 200) {
    var res = req.responseText;

    var req2 = new XMLHttpRequest(); // Use a different variable name for the inner XMLHttpRequest

    var username = res;
    var json = { 'type': 'GET_USER_REVIEWS', 'username': username };

    req2.onreadystatechange = function() {
      if (req2.readyState == 4 && req2.status == 200) {
        var res = req2.responseText;
        var jRes = JSON.parse(res);
        var reviewOutput = "";
        

        for (var i in jRes.data) {
          reviewOutput += '<tr><th scope="row">' + jRes.data[i].reviewID + '</th><td>' + jRes.data[i].review_description + '</td><td>' + starGeneration(jRes.data[i].points) + '</td><th scope="row action-btns"><i class="fa-solid fa-user-pen action-btn"></i></th><th scope="row action-btns"><i class="fa-solid fa-trash action-btn"></i></th></tr>';
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
    return '<td><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></td>';
  } else if (points >= 92) {
    return '<td><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i></td>';
  } else if (points >= 88) {
    return '<td><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></td>';
  } else if (points >= 85) {
    return '<td><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i></td>';
  } else if (points >= 82) {
    return '<td><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></td>';
  } else if (points >= 80) {
    return '<td><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i></td>';
  } else if (points >= 77) {
    return '<td><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></td>';
  } else if (points >= 74) {
    return '<td><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i></td>';
  } else if (points >= 71) {
    return '<td><i class="fa-solid fa-star"></i></td>';
  } else {
    return '<td><i class="fa-solid fa-star-half"></i></td>';
  }
};