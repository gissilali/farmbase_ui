@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       <div class="col-lg-4 col-md-4 col-sm-6">
           <div class="image-wrap" style="height:250px;background: grey">
           		<span class="category label">farm produce</span>
           		<div class="no-image" style="text-align: center;padding-top:40px">
           			<i class="fa fa-image"></i>
                    <h4>no image available</h4>
                </div>
           </div>
       </div>
       <div class="col-lg-6 col-md-8 col-sm-6">
			<div class="item-info">
				<div class="row">
					<p class="title">Beetroot Juice</p>
				</div>
				<div class="row">
					<p class="price">KES 3000</p>
					<span class="negotiable label">negotiable</span>

				</div>
				<div class="row">
					<p class="product-description">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium labore tenetur doloribus quasi vel, explicabo culpa tempore tempora illum possimus aliquam ad similique dolores nihil consectetur placeat error id eum voluptatibus, ullam molestias a quisquam laboriosam? Atque at optio culpa modi ducimus quidem velit perspiciatis! Nobis aspernatur sint, reiciendis sed iusto voluptatem praesentium eaque laboriosam mollitia labore ut enim delectus odit voluptatibus excepturi, nisi error quam maxime atque fugit porro consequuntur! Obcaecati officia tenetur dicta quod explicabo deserunt! Accusamus, cum repudiandae? Quasi voluptates enim, error deleniti, voluptatum doloribus laboriosam, sit facilis debitis veritatis eaque. Odit, officiis. Sint quia odit exercitationem laboriosam eveniet ullam? Ipsum earum asperiores provident dicta quasi facilis assumenda, iure veniam repudiandae dignissimos iusto maxime nihil distinctio cum nemo, ea soluta dolor quos molestiae unde est eaque laboriosam. Rem, explicabo, eaque. Dolor consectetur, ullam, a debitis, optio autem incidunt itaque esse perferendis inventore, repellendus ut obcaecati quod molestiae.
					</p>
				</div>
				<div class="row">
					<div class="actions">
						<p class="author"><i class="fa fa-user"></i>Kill Bill</p>
						<p class="location"><i class="fa fa-map-marker"></i>Kisumu</p>
                        <button class="fa fa-star favorite"></button>
					</div>
				</div>
			</div>
       </div>
    </div>
</div>
@endsection
