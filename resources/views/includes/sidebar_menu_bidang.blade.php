<div class="col-sm-4 constructing_right">
    <h2>Menu Bidang</h2>
    <ul class="painting">
    	@foreach($bidang as $data_bidang) 
            <li>
            	<a href="{{ route('bidang') }}/{{ $data_bidang->id }}">
            		{{ $data_bidang->judul }}
            	</a>
            </li>
        @endforeach
    </ul>
</div>