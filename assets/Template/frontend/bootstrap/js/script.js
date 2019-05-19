$('#buton-cari').on('click',function(){
	var input=$('#input-cari').val();
	$('#movie-list').html('');
	$.ajax({
		url:'http://omdbapi.com',
		dataType:'json',
		type:'get',
		data:{'apikey':'a386c5b6','s':input},
		success:function(data){
			let movies=data.Search;

			$.each(movies,function(i,dat){
				$('#movie-list').append(`
					<div class="col-md-4 col-xs-6" style="margin-bottom:30px;">
					<div class="card">
					  <img src="`+dat.Poster+`" class="card-img-top" >
					  <div class="card-body">
					    <h5 class="card-title">`+dat.Title+`</h5>
					    <p class="card-text">`+dat.Year+`</p>
					    <a href="#" class="card link detail" data-id="`+dat.imdbID+`" data-toggle="modal" data-target="#exampleModalScrollable">Detail</a>
					  </div>
					</div>
					</div>`);
					});
			$('#input-cari').val('');
			input='';
		}

	});
});

$('#movie-list').on('click','.detail',function(){
	let id=$(this).data('id');
	console.log(id);
	$.ajax({
		url:'http://omdbapi.com',
		type:'get',
		dataType:'json',
		data:{'apikey':'a386c5b6','i':id},
		success:function(data){
			$('#movie-detail').append(`
				<div class="row">
					<div class="col-md-4">
						<img src="`+data.Poster+`" class="img-fluid">
					</div>
					<div class="col-md-8">
						<ul class="list-group">
							<li class="list-group-item"><h3>`+data.Title+`</h3></li>
							<li class="list-group-item">Released : "`+data.Released+`</li>
							<li class="list-group-item">Actors	  : "`+data.Actors+`</li>
						</ul>
					</div>
				</div>
			`);
		}
	})
})