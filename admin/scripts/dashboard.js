// function user_analytics(period=1)
// {
//     let xhr = new XMLHttpRequest();
//     xhr.open("POST", "ajax/dashboard.php", true);
//     xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');


//     xhr.onload= function(){
//         let data= JSON.parse(this.responseText);
//         console.log(data);

//         document.getElementById('total_new_reg').textContent = data.total_new_reg;
//         document.getElementById('total_queries').textContent = data.total_queries;
//         // document.getElementById('cancelled_bookings').textContent= data.cancelled_bookings;
//     }

//     xhr.send('user_analytics&period='+period);
// }
    
// window.onload = function(){
//     user_analytics();
// }
function user_analytics(period = 1) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/dashboard.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        if (xhr.status >= 200 && xhr.status < 300) {
            try {
                let data = JSON.parse(xhr.responseText);
                console.log(data);

                document.getElementById('total_new_reg').textContent = data.total_new_reg;
                document.getElementById('total_queries').textContent = data.total_queries;
                // document.getElementById('cancelled_bookings').textContent = data.cancelled_bookings;
            } catch (error) {
                console.error('Error parsing JSON:', error);
            }
        } else {
            console.error('Request failed with status', xhr.status);
        }
    }

    xhr.onerror = function () {
        console.error('Request failed');
    }

    xhr.send('user_analytics&period=' + period);
}

window.onload = function () {
    user_analytics();
}


