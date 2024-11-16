@extends('layouts.app2')

@section('styles')
<!-- styles -->
@endsection

@section('content')

<!-- GALLERY DEMO OPEN -->
<!-- <div class="demo-gallery card"> -->
<div class="d-flex justify-content-center align-items-center">
	<div class="col-lg-8 col-md-8">
		<div class="card">
			<div class="card-header">
				<div class="card-title">Gallery</div>
			</div>
			<div class="card-body">
				<ul id="lightgallery" class="list-unstyled row">
					<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" data-responsive="../assets/images/media/1.jfif" data-src="../assets/images/media/1.jfif" data-sub-html="<h4>Gallery Image 1</h4><p> Nursery Pictures</p>">
						<a href="javascript:void(0)">
							<img class="img-responsive br-5 wp-100" src="../assets/images/media/1.jfif" alt="Thumb-1">
						</a>
					</li>
					<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" data-responsive="../assets/images/media/2.jfif" data-src="../assets/images/media/2.jfif" data-sub-html=" <h4>Gallery Image 2</h4><p> Nursery Pictures</p>">
						<a href="javascript:void(0)">
							<img class="img-responsive br-5 wp-100" src="../assets/images/media/2.jfif" alt="Thumb-2">
						</a>
					</li>

					<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" data-responsive="../assets/images/media/3.jfif" data-src="../assets/images/media/3.jfif" data-sub-html="<h4>Gallery Image 3</h4><p> Nursery Pictures</p>">
						<a href="javascript:void(0)">
							<img class="img-responsive br-5 wp-100" src="../assets/images/media/3.jfif" alt="Thumb-1">
						</a>
					</li>
					<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" data-responsive="../assets/images/media/4.jfif" data-src="../assets/images/media/4.jfif" data-sub-html="<h4>Gallery Image 4</h4><p> Nursery Pictures</p>">
						<a href="javascript:void(0)">
							<img class="img-responsive br-5 wp-100" src="../assets/images/media/4.jfif" alt="Thumb-2">
						</a>
					</li>
					<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" data-responsive="../assets/images/media/5.jpg" data-src="../assets/images/media/5.jpg" data-sub-html="<h4>Gallery Image 5</h4><p> Nursery Pictures</p>">
						<a href="javascript:void(0)">
							<img class="img-responsive br-5 wp-100" src="../assets/images/media/5.jpg" alt="Thumb-1">
						</a>
					</li>
					<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" data-responsive="../assets/images/media/6.jfif" data-src="../assets/images/media/6.jfif" data-sub-html="<h4>Gallery Image 6</h4><p> Nursery Pictures</p>">
						<a href="javascript:void(0)">
							<img class="img-responsive br-5 wp-100" src="../assets/images/media/6.jfif" alt="Thumb-2">
						</a>
					</li>
					<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 mb-md-0 mb-xl-0  border-bottom-0" data-responsive="../assets/images/media/7.jpg" data-src="../assets/images/media/7.jpg" data-sub-html="<h4>Gallery Image 7</h4><p> Nursery Pictures</p>">
						<a href="javascript:void(0)">
							<img class="img-responsive mb-0 br-5 wp-100" src="../assets/images/media/7.jpg" alt="Thumb-1">
						</a>
					</li>
					<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-xl-0 mb-md-0 mb-md-0 mb-5 border-bottom-0" data-responsive="../assets/images/media/8.jpg" data-src="../assets/images/media/8.jpg" data-sub-html="<h4>Gallery Image 8</h4><p> Nursery Pictures</p>">
						<a href="javascript:void(0)">
							<img class="img-responsive mb-0 br-5 wp-100" src="../assets/images/media/8.jpg" alt="Thumb-2">
						</a>
					</li>
					<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" data-responsive="../assets/images/media/9.jpg" data-src="../assets/images/media/9.jpg" data-sub-html="<h4>Gallery Image 9</h4><p> Nursery Pictures</p>">
						<a href="javascript:void(0)">
							<img class="img-responsive br-5 wp-100" src="../assets/images/media/9.jpg" alt="Thumb-2">
						</a>
					</li>
					<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" data-responsive="../assets/images/media/10.jfif" data-src="../assets/images/media/10.jfif" data-sub-html="<h4>Gallery Image 10</h4><p> Nursery Pictures</p>">
						<a href="javascript:void(0)">
							<img class="img-responsive mb-0 br-5 wp-100" src="../assets/images/media/10.jfif" alt="Thumb-1">
						</a>
					</li>
					<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" data-responsive="../assets/images/media/11.jpg" data-src="../assets/images/media/11.jpg" data-sub-html="<h4>Gallery Image 11</h4><p> Nursery Pictures</p>">
						<a href="javascript:void(0)">
							<img class="img-responsive mb-0 br-5 wp-100" src="../assets/images/media/11.jpg" alt="Thumb-2">
						</a>
					</li>
					<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" data-responsive="../assets/images/media/12.jpg" data-src="../assets/images/media/12.jpg" data-sub-html="<h4>Gallery Image 12</h4><p> Nursery Pictures</p>">
						<a href="javascript:void(0)">
							<img class="img-responsive mb-0 br-5 wp-100" src="../assets/images/media/12.jpg" alt="Thumb-1">
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- </div> -->
<!-- GALLERY DEMO CLOSED -->

@endsection

@section('modal')
<!-- modal -->
@endsection

@section('scripts')
<!-- scripts -->

@endsection