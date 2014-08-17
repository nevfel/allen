<div class="block block-tags">
	<div class="block-title">
		<strong><span>Popülar Etiketler</span></strong>
	</div>
	<div class="block-content">
		<ul class="tags-list">
      @foreach ($tags as $tag)
			<li><a href="#" style="font-size:{{rand(90, 150)}}%;">{{$tag}}</a></li>
      @endforeach
		</ul>
		<div class="actions">
			<a href="#">Tüm Etiketler</a>
		</div>
	</div>
</div>