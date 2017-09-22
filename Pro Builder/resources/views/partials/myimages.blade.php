<div class="images masonry-3" id="myImages">

<?php
if(!empty($userImages))
{
?>

@foreach ($userImages as $img)
<div class="image">
	<div class="imageWrap">
		<img src="{{ $userSrc }}/{{ $img }}">
	</div>
	<div class="buttons clearfix">
		<button type="button" class="btn btn-info btn-embossed btn-block btn-sm useImage" data-url="{{ $dataURL }}/{{ Auth::user()->id }}/<?php echo $img;?>"><span class="fui-export"></span> Insert Image</button>
	</div>
</div><!-- /.image -->
@endforeach

<?php
}
?>
</div><!-- /.images -->