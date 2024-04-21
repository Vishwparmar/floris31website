// function user_analytics(period=1) {
//     let xhr = new XMLHttpRequest();
//     xhr.open("POST", "ajax/dashboard.php", true);
//     xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

//     xhr.onload= function(){
//         let responseText = this.responseText;
//         let params = new URLSearchParams(responseText);

//         document.getElementById('total_new_reg').textContent = params.get('total_new_reg');
//         document.getElementById('total_queries').textContent = params.get('total_queries');
//     }

//     xhr.send('user_analytics&period='+period);
// }

// window.onload = function(){
//     user_analytics();
// }
// function fetchUserAnalytics(period = 1) {
//     let xhr = new XMLHttpRequest();
//     xhr.open("POST", "ajax/dashboard.php", true);
//     xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

//     xhr.onload = function () {
//         if (xhr.status === 200) {
//             updateDashboard(xhr.responseText);
//         } else {
//             console.error("Error fetching user analytics:", xhr.statusText);
//         }
//     }

//     xhr.send('user_analytics&period=' + period);
// }

// function updateDashboard(responseText) {
//     let values = responseText.split('&');
//     if (values.length >= 2) {
//         let total_new_reg = values[0].split('=')[1];
//         let total_queries = values[1].split('=')[1];
//         document.getElementById('total_new_reg').textContent = total_new_reg;
//         document.getElementById('total_queries').textContent = total_queries;
//     } else {
//         console.error("Unexpected response format:", responseText);
//     }
// }

// window.onload = function () {
//     fetchUserAnalytics();
// }

// function user_analytics(period = 1) {
//     let xhr = new XMLHttpRequest();
//     xhr.open("POST", "ajax/dashboard.php", true);
//     xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

//     xhr.onload = function () {
//         if (xhr.status >= 200 && xhr.status < 300) {
//             try {
//                 let data = JSON.parse(xhr.responseText);
//                 console.log(data);

//                 document.getElementById('total_new_reg').textContent = data.total_new_reg;
//                 document.getElementById('total_queries').textContent = data.total_queries;
//                 // document.getElementById('cancelled_bookings').textContent = data.cancelled_bookings;
//             } catch (error) {
//                 console.error('Error parsing JSON:', error);
//             }
//         } else {
//             console.error('Request failed with status', xhr.status);
//         }
//     }

//     xhr.onerror = function () {
//         console.error('Request failed');
//     }

//     xhr.send('user_analytics&period=' + period);
// }

// window.onload = function () {
//     user_analytics();
// }
// function user_analytics (period=1)
// {
//     let xhr = new XMLHttpRequest();
//     xhr.open("POST", "ajax/dashboard.php", true);
//     xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

//     xhr.onload=function(){
//         console.log(data);
//     let data = JSON.parse(this.responseText);

//     document.getElementById('total_new_reg').textContent = data.total_new_reg;
//     document.getElementById('total_queries').textContent = data.total_queries;
//    }  
//     xhr.send('user_analytics&period='+period);
// }
//     window.onload = function () {
//         user_analytics();
// }

function user_analytics(period = 1) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/dashboard.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function() {
        let data = JSON.parse(this.responseText);
        console.log(data);
        document.getElementById('total_new_reg').textContent = data.total_new_reg;
        document.getElementById('total_queries').textContent = data.total_queries;
    };

    xhr.send('user_analytics&period='+period);
}

window.onload = function() {
    user_analytics();
};
