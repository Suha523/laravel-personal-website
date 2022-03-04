// let api = "https://www.googleapis.com/youtube/v3/search?key=AIzaSyATvaENg7D41qdsULCBReyBsEXboauxDg4&channelId=UCQAZ928zqV3HXfNv53HCHEA&part=snippet,id&order=date&maxResults=50";
// let portfolio = document.querySelector(".portfolio");

// async function getData() {
//     let response = await fetch(api);
//     let data = await response.json();
//     console.log(data.items);
//     showData(data.items);
// }

// function showData(data) {
//     let htmlContent = "";

//     data.map((d) => {
//         //   console.log(d);
//         if (d.id.videoId != undefined) {
//             const months = ["January", "February", "March", "April", "May", "June",
//              "July", "August", "September", "October", "November", "December"];
//              const days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
//             let date= new Date(d.snippet.publishedAt);
//             htmlContent += `
//         <div class="col-lg-4">

//         <div class="card position-relative video" style="width: 18rem;">
//         <div class="overlay d-flex justify-content-center align-items-center position-absolute w-100">

//               <a href="http://www.youtube.com/watch?v=${d.id.videoId}"><i class="fab fa-youtube mr-2"></i></a>

//               </div>
//         <img height="200px" src="${d.snippet.thumbnails.high.url}"
//              class=""
//              alt="${d.snippet.title}"/>


//         <div class="card-body">
//             <h5 class="card-title">${d.snippet.title}</h5>

//          </div>
//          <div class="card-footer bg-warning">
//          <p class="card-text">Published At: ${months[date.getMonth()]} ${date.getDate()}, ${date.getFullYear()}</p>

//          </div>


//       </div>

//         </div>

//       `;
//         }
//     });
//     // console.log(htmlContent);
//     portfolio.innerHTML = htmlContent;
// }

// getData();
