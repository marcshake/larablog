<?php print '<?xml version="1.0" encoding="UTF-8" ?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

@foreach ($posts as $item)

<url>
<loc>{{$item->link}}</loc>
</url>
@endforeach
</urlset>