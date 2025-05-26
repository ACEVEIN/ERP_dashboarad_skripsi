@extends('master')

@section('content')

<style>
	.bs-canvas-overlay {
   		opacity: 0;
		z-index: -1;
	}
	
	.bs-canvas-overlay.show {
   		opacity: 0.85;
		z-index: 1100;
	}
	
	.bs-canvas-overlay, .bs-canvas {
		transition: all .4s ease-out;
		-webkit-transition: all .4s ease-out;
		-moz-transition: all .4s ease-out;
		-ms-transition: all .4s ease-out;
	}
	
	.bs-canvas {
		top: 0;
		z-index: 1110;
		overflow-x: hidden;
		overflow-y: auto;
		width: 330px;		
	}
	
	.bs-canvas-left {
		left: 0;
		margin-left: -330px;
	}
	
	.bs-canvas-right {
		right: 0;
		margin-right: -330px;
	}
	
	/* Only for demo */
	body {
    	min-height: 100vh;
	}	
</style>


<div class="container-fluid">
     
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Offcanvas</h1>
    </div>

    {{-- <div class="bs-canvas-overlay bg-dark position-fixed w-100 h-100"></div> --}}

    <div class="d-flex justify-content-around my-5">
        <button class="btn btn-primary" type="button" data-toggle="canvas" data-target="#bs-canvas-right" aria-expanded="false" aria-controls="bs-canvas-right">&#9776;</button>
    </div>
    
    <div id="bs-canvas-right" class="bs-canvas bs-canvas-right position-fixed bg-light h-100">
        <header class="bs-canvas-header p-3 bg-primary overflow-auto">
            <button type="button" class="bs-canvas-close float-left close" aria-label="Close" aria-expanded="false"><span aria-hidden="true" class="text-light">&times;</span></button>
            <h4 class="d-inline-block text-light mb-0 float-right">Canvas Header</h4>
        </header>
        <div class="bs-canvas-content px-3 py-5">
            <div class="list-group mb-5">
                  <a href="#" class="list-group-item list-group-item-action">Cras justo odio</a>
                  <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                  <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                  <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                  <a href="#" class="list-group-item list-group-item-action">Vestibulum at eros</a>
            </div>
            <p class="text-muted small">Subscribe to our newsletter:</p>
            <div class="input-group flex-nowrap">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="addon-wrapping">@</span>
                  </div>
                  <input type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <p class="text-right my-5">
                <button type="button" class="btn btn-outline-dark">Subscribe</button>
            </p>
            <table class="table">
                  <thead class="thead-light">
                    <tr>
                          <th scope="col">#</th>
                          <th scope="col">Item</th>
                          <th scope="col">Qty.</th>
                          <th scope="col">Remove</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                          <th scope="row">1</th>
                          <td>Quilt</td>
                          <td>2</td>
                          <td class="text-center"><a href="" class="text-decoration-none text-muted">&times;</a></td>
                    </tr>
                    <tr>
                          <th scope="row">2</th>
                          <td>Shawl</td>
                          <td>1</td>
                          <td class="text-center"><a href="" class="text-decoration-none text-muted">&times;</a></td>
                    </tr>
                    <tr>
                          <th scope="row">3</th>
                          <td>Pillow</td>
                          <td>5</td>
                          <td class="text-center"><a href="" class="text-decoration-none text-muted">&times;</a></td>
                    </tr>
                  </tbody>
            </table>
            <p class="text-center"><button type="button" class="btn btn-primary">Checkout</button></p>
        </div>    
    </div>

</div>

<script>
    jQuery(document).ready(function($){
        var bsOverlay = $('.bs-canvas-overlay');
        $('[data-toggle="canvas"]').on('click', function(){
            var ctrl = $(this), 
                elm = ctrl.is('button') ? ctrl.data('target') : ctrl.attr('href');
            $(elm).addClass('mr-0');
            $(elm + ' .bs-canvas-close').attr('aria-expanded', "true");
            $('[data-target="' + elm + '"], a[href="' + elm + '"]').attr('aria-expanded', "true");
            if(bsOverlay.length)
                bsOverlay.addClass('show');
            return false;
        });
        
        $('.bs-canvas-close, .bs-canvas-overlay').on('click', function(){
            var elm;
            if($(this).hasClass('bs-canvas-close')) {
                elm = $(this).closest('.bs-canvas');
                $('[data-target="' + elm + '"], a[href="' + elm + '"]').attr('aria-expanded', "false");
            } else {
                elm = $('.bs-canvas')
                $('[data-toggle="canvas"]').attr('aria-expanded', "false");	
            }
            elm.removeClass('mr-0');
            $('.bs-canvas-close', elm).attr('aria-expanded', "false");
            if(bsOverlay.length)
                bsOverlay.removeClass('show');
            return false;
        });
    });
</script>
    
@endsection