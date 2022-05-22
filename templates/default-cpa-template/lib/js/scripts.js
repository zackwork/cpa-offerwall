function fetchData(){

	
	fetch(scriptParams.cpa_ow_json_url).then(response => {
		if(!response.ok){
			throw ERROR("ERROR");
		}

		return response.json();
		
	}).then(data => {
		// console.log(data.offers);
		const html = data.offers.map(offers => {
			return `
			<div class="col-12 col-md-6 col-lg-3">
			<div class="card">
			<img class="card-img-top" src="${offers.offerphoto}" alt="${offers.title}"/>
			<div class="card-body">
			<h5 class="card-title">${offers.title}</h5>
			<p class="card-text">${offers.description}</p>
			<a href="${offers.offerlink}" target="_blank" style="width: 100%;" class="btn btn-primary nounderline" rel=nofollow>GO TO OFFER PAGE</a>  
			</div>
			</div>
			</div>`
		}).join("");
		// console.log(html);
		document.querySelector('#content').innerHTML = html;
	}).catch(error => {
		console.log(error);
	});



}


fetchData();